# pdflabel

## 概要
テキストを入力してラベル用紙にあわせたPDFを生成するWEBアプリケーション。

## 現在の状態
`index.html` に実装済み。

## 開発環境
- Dev Container (`mcr.microsoft.com/devcontainers/base:bookworm`)
  - Node.js, GitHub CLI, Claude Code が features で導入される
- Python 仮想環境 `.venv`（`post_create.sh` で作成）
  - `pdfplumber`, `pdf2image`, `pytesseract`, `Pillow` を導入済み
  - `tesseract-ocr` / `tesseract-ocr-jpn` / `poppler-utils` を apt でインストール
  - 既存のラベル用紙PDFのレイアウト解析（OCR・座標抽出）に利用する想定

## 技術仕様
1. html + javascript
2. PDF作成には jsPDF ライブラリを使用する（CDNから読み込む）
   - バージョンを固定して読み込む（最新安定版 4.2.1）
   - `https://cdnjs.cloudflare.com/ajax/libs/jspdf/4.2.1/jspdf.umd.min.js`
3. 対応ブラウザは Google Chrome, Firefox, Microsoft Edge（いずれも最新版）とする

## ラベル仕様
1. 用紙サイズ A4 210mm x 297mm
2. 余白は上下左右設定できる（デフォルト 上下左右各10mm）
3. ラベルのサイズ（幅x高さ）を設定できる（デフォルト 70mm x 37mm）
4. ラベル間の余白は横方向・縦方向を個別に調整できる（デフォルト各2mm）
5. テキストを入力してすべてのラベルに同じ内容を印字
6. ラベルの行数・列数は、用紙サイズ・余白・ラベルサイズ・ラベル間余白から自動計算する
7. 計算結果が1ページに収まらない場合（ラベル数が多い場合）は自動で複数ページに分割してPDFを生成する
8. フォントはメイリオを使用する
   - 画面（入力フォーム・プレビュー）の表示フォントはメイリオ（CSSで `"Meiryo", sans-serif` 等を指定）
   - メイリオはライセンス上PDFへの埋め込み配布ができないため、PDF内のテキスト描画には別途ライセンス上問題のない日本語フォント（IPAexゴシック。IPAフォントライセンスで埋め込み・再配布が許諾されている）を使用する
   - フォントファイルは `https://cdn.jsdelivr.net/npm/@fontpkg/ip-aex-gothic@4.1.1/IPAexGothic.ttf` からJavaScriptの`fetch`で取得し、`addFileToVFS`/`addFont`でjsPDFに登録する（HTMLファイルへの直接埋め込みはしない）
9. テキストの配置はラベル内で左上揃え
10. テキストがラベル幅を超える場合は折り返す
11. ラベルの周囲に枠線（罫線）を描画する
12. フォントサイズはデフォルト10pt（ユーザーが変更可能）
13. ラベル内のテキストには余白（padding）2mmを設ける
14. 用紙プリセット機能を持つ。ドロップダウンで選択すると、余白（上下・左右）・ラベルサイズ（幅・高さ）・ラベル間余白（横・縦）が自動設定される。選択後も各数値は手動で変更可能
    - 1: カスタム（手動設定、自動設定なし）
    - 2: A4 72面
    - 3: A4 24面
    - 4: A4 44面
    - ※ 現状、各プリセットのラベル幅・高さは正式な製品仕様が未確認のため、面数（72/24/44）が計算結果と一致するよう逆算した暫定値を使用している。正確な数値が判明次第、`index.html` 内の `PRESETS` を差し替えること

## コーディング規約
1. コメントは日本語
2. 一つのHTMLファイルにまとめる（外部cssファイル、jsファイルを作成しない）

## 作業ルール
- 変更前に必ず git commit する
