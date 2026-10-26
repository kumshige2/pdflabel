#!/bin/bash
set -e
sudo apt-get update
sudo apt-get install -y python3-pip python3.11-venv tesseract-ocr tesseract-ocr-jpn poppler-utils
python3 -m venv .venv
.venv/bin/pip install pdfplumber pdf2image pytesseract Pillow

# PHP/Laravel関連の検証用（Windows側Laravelプロジェクトへの統合コードの構文チェック・簡易動作確認に使う）
sudo apt-get install -y php-cli php-mbstring php-xml php-gd php-curl php-zip unzip

# Composerのインストール
curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
rm /tmp/composer-setup.php

# PostgreSQL（Windows側の本番相当DBがversion 17系のため合わせる。2026-10-19に16→17へ移行済み）
# Debian標準リポジトリには古いバージョンしかないため、公式PGDGリポジトリを追加する
sudo install -d /usr/share/postgresql-common/pgdg
sudo curl -o /usr/share/postgresql-common/pgdg/apt.postgresql.org.asc --fail https://www.postgresql.org/media/keys/ACCC4CF8.asc
echo "deb [signed-by=/usr/share/postgresql-common/pgdg/apt.postgresql.org.asc] https://apt.postgresql.org/pub/repos/apt bookworm-pgdg main" | sudo tee /etc/apt/sources.list.d/pgdg.list
sudo apt-get update
sudo apt-get install -y postgresql-17
# 個人情報を含む実データは投入しないこと。テスト用にはWindows側のLaravel Factory/Seeder（合成データ）を使う
sudo pg_ctlcluster 17 main start

# MCPサーバー（Claude CodeからPostgreSQL操作・ブラウザ操作を直接行うため。2026-10-26導入）
curl -LsSf https://astral.sh/uv/install.sh | sh
export PATH="$HOME/.local/bin:$PATH"

# postgres-mcp（crystaldba/postgres-mcp）
# PyPI公開版（0.1.0）は古いテンプレートのままで動作しないため、GitHubの最新ソースからインストールする
# pyproject.tomlがPyPIに存在しないpglast==7.11を厳密指定しているため、利用可能な最新版に緩めてからインストールする
git clone --depth 1 https://github.com/crystaldba/postgres-mcp /tmp/postgres-mcp-src
sed -i 's/pglast==7.11/pglast>=7.20/' /tmp/postgres-mcp-src/pyproject.toml
uv tool install /tmp/postgres-mcp-src --python 3.13
rm -rf /tmp/postgres-mcp-src
# 接続先（DATABASE_URI）・--access-modeはリポジトリにコミットしない設定で登録するため、
# `claude mcp add postgres -s local -e DATABASE_URI=... -- postgres-mcp --access-mode=unrestricted` をコンテナ作成後に別途実行する

# Playwright MCP（@playwright/mcp）用のブラウザ本体
npx -y playwright install --with-deps chromium
