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
