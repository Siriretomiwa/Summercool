#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "$0")" && pwd)"
THEME_DIR="$ROOT_DIR/wp-content/themes/summercool-onepage"
DIST_DIR="$ROOT_DIR/dist"
ZIP_PATH="$DIST_DIR/summercool-onepage-theme.zip"

mkdir -p "$DIST_DIR"
rm -f "$ZIP_PATH" "$ZIP_PATH.sha256"

(
  cd "$ROOT_DIR/wp-content/themes"
  zip -r "$ZIP_PATH" summercool-onepage -x '*.DS_Store'
)

sha256sum "$ZIP_PATH" > "$ZIP_PATH.sha256"
echo "Created: $ZIP_PATH"
echo "Checksum: $ZIP_PATH.sha256"
