# PC移行・転勤時の引き継ぎ手順

2026-10-23、GitHubへの初回pushを行った際にまとめたメモ。

## 背景

このリポジトリ（`pdflabel`）は、devcontainer環境としてPC（WSL2）上で動いている。転勤等で今のPCが使えなくなっても困らないよう、GitHub（`https://github.com/kumshige2/pdflabel`）をバックアップ先として使う方針にした。

## 日常の運用ルール（今すぐ・継続的に行うこと）

- 作業の区切りごとに **`git commit` → `git push`** を忘れずに行う
  - `commit`だけではローカルに残るだけで、GitHubには反映されない
  - pushし忘れた期間の作業は、PCが使えなくなった時点で失われる
- 新しく秘密情報（パスワード・APIキー等）をコードに追加する時は、`.env`や`.gitignore`対象のファイルに書く（gitで管理するファイルに直接書かない）

## 実際に転勤・PC移行が発生した時にやること

1. 新しいPCに以下でリポジトリを取得
   ```
   git clone https://github.com/kumshige2/pdflabel.git
   ```
2. VS Code + Dev Containers拡張機能で開く
   - `devcontainer.json`・`post_create.sh`により、PHP・Composer・PostgreSQL等の環境が自動で再構築される
3. **`config/const.php`・`config/const_BK20230615.php`を手動で復元する**（下記「注意点」参照）
4. PostgreSQLにテストデータを入れたい場合は、Windows側のLaravel Factory/Seeder（合成データ）を使って再投入する

## 注意点

### `const.php`はgitに含まれていない

`app-laravel/claude_upload1019/config/const.php`・`const_BK20230615.php`には、DBパスワード・APIキー等の実際の値が直接書かれているため、2026-10-23に**意図的に`.gitignore`で除外**した（`git clone`しても自動では出てこない）。

転勤時は、この2ファイルの中身を、**gitとは別の安全な方法**（パスワード管理ツール、暗号化したUSB等）で新しいPCに引き継ぐ必要がある。

### 過去に秘密情報が漏洩しかけた経緯

2026-10-23、初回push時にGitHubのpush protectionが`MAILGUN_API_KEY`の漏洩を検知してブロックした。調査の結果、`const.php`・`database.php`に複数の秘密情報（DBパスワード`u01654`、`GEO_API01`等）が実際の値のままコミットされていたことが判明し、`git filter-repo`で全履歴から除去した上でpushし直した（詳細はコミット `漏洩した秘密情報の対処（APIキー・DBパスワード）` を参照）。

今後、同様の事態を防ぐため、新しい設定ファイルを追加する際は秘密情報が含まれていないか確認すること。
