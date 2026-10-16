# ラベルPDF作成機能（Laravel版）統合手順

`index.html`（JS+jsPDF版）のラベルPDF作成機能を、PHP/Laravel + AdminLTE + barryvdh/laravel-dompdf で実装したものです。
このフォルダの中身は、既存のLaravelプロジェクトに手動でコピーして組み込んでください（このフォルダ自体はLaravelプロジェクトではありません）。

## ファイル対応表

| このフォルダ内のパス | コピー先（既存Laravelプロジェクト内） |
|---|---|
| `app/Http/Controllers/LabelPdfController.php` | `app/Http/Controllers/LabelPdfController.php` |
| `resources/views/label_pdf/index.blade.php` | `resources/views/label_pdf/index.blade.php` |
| `resources/views/label_pdf/pdf.blade.php` | `resources/views/label_pdf/pdf.blade.php` |
| `routes/web.php`（中身を追記） | `routes/web.php`（既存ファイルに追記） |
| `public/fonts/IPAexGothic.ttf` | `public/fonts/IPAexGothic.ttf` |

## 統合手順

1. **PDFライブラリを導入する**
   ```
   composer require barryvdh/laravel-dompdf
   ```

2. **コントローラをコピーする**
   `app/Http/Controllers/LabelPdfController.php` を既存プロジェクトの同じパスに配置する。

3. **ビューをコピーする**
   `resources/views/label_pdf/` フォルダごと既存プロジェクトの `resources/views/` 配下にコピーする。

4. **フォントをコピーする**
   `public/fonts/IPAexGothic.ttf` を既存プロジェクトの `public/fonts/` に配置する（IPAフォントライセンスでPDF埋め込み・再配布が許諾されている）。

5. **ルートを追記する**
   `routes/web.php` の中身を、既存プロジェクトの `routes/web.php` に追記する。
   サンプル（`pdf_text_cnv01.blade.php`）に見られる `@can('system')` 等の権限制御を使っている場合は、
   既存の権限ミドルウェア／ルートグループに合わせてラップすること。

6. **メニューに追加する（任意）**
   AdminLTEのサイドバーメニュー（通常 `resources/views/vendor/adminlte/partials/sidebar/menu-item.blade.php` 等）に
   `route('label_pdf.index')` へのリンクを追加する。

7. **動作確認**
   `php artisan serve` 等で起動し、`/label-pdf` にアクセスしてPDFが生成できることを確認する。

## 仕様（index.htmlのCLAUDE.mdと同内容）

- 用紙サイズ A4固定、余白は上下左右個別設定可
- ラベルサイズ（幅×高さ）、ラベル間余白（横・縦個別）を設定可能
- 用紙プリセット: A4 65面（5列×13段）／24面／44面
  - 選択すると余白・ラベルサイズ・ラベル間余白が自動入力される。選択後も手動で変更可能
- 列数・行数は用紙サイズ・余白・ラベルサイズ・ラベル間余白から自動計算（0.5mmの許容誤差あり。詳細は `LabelPdfController::calcGrid()` 内コメント参照）
- 1ページに収まらない枚数の場合は自動で複数ページに分割
- フォントサイズはデフォルト10pt、ラベル内余白(padding)2mm、左上揃え、幅を超える場合は折り返し、枠線（罫線）描画
- PDF内の日本語テキストはIPAexゴシックで埋め込み描画（`public/fonts/IPAexGothic.ttf` をdompdfの`@font-face`で参照）

## 検証について

このdevcontainerにはLaravel本体やWebサーバーがないため、`php artisan serve` での実機確認はできていません。
代わりに以下を行い、ロジック自体は検証済みです。

- `app/Http/Controllers/LabelPdfController.php`: `php -l` で構文チェック済み
- `resources/views/label_pdf/pdf.blade.php`: `illuminate/view` 単体（Laravelスタブ環境）でコンパイル・実行し、
  65面／24面／44面の3プリセットすべてで、名称どおりの枚数・正しいページ数が生成されることを確認
- 実際に `dompdf/dompdf` でPDF化し、画像変換・座標解析（`pdfplumber`）で目視+数値の両方で確認
  - 初期実装では `white-space: pre-wrap; word-break: break-all;` だとdompdfでは折り返されずラベル枠からテキストがはみ出す不具合があったため、
    `white-space: normal; word-wrap: break-word;` ＋ `nl2br()` による改行変換に修正済み（`pdf.blade.php` 内コメント参照）
  - **2026-10-16 追加修正**: dompdfは `box-sizing: border-box` を尊重せず、width/height指定済みの要素にpadding・borderをそのまま加算して外寸が膨らむ不具合があった（44面プリセットで実測：指定136.91pt→実測149.0pt など、縦横とも約4.26mm＝padding(2mm)×2＋border分だけ過大）。これにより隣接ラベルの枠と文字が重なって見えていた。
    枠線用の`.label-box`とテキスト・padding用の内側`.label-text`を分離する構造に変更し解消（詳細は`pdf.blade.php`内コメント参照）。修正後は3プリセットとも実測との差が罫線の太さ分（約0.26mm）のみに収まることを確認済み。

`index.blade.php`（フォーム画面）は `@extends('adminlte::page')` に依存しており、AdminLTE本体がないこの環境ではレンダリングできないため未検証です。Windows側の実環境で表示崩れがないか確認をお願いします。
