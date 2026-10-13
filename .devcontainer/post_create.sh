#!/bin/bash
set -e
sudo apt-get update
sudo apt-get install -y python3-pip python3.11-venv tesseract-ocr tesseract-ocr-jpn poppler-utils
python3 -m venv .venv
.venv/bin/pip install pdfplumber pdf2image pytesseract Pillow
