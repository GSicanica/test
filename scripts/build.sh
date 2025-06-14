#!/bin/sh
set -e

# Build and minify PHP sources from src/ into public_html/sitepro/src
DEST="public_html/sitepro/src"

rm -rf "$DEST"
mkdir -p "$DEST/forms"

# Copy and minify top level PHP files
for file in SiteInfo.php SiteModule.php; do
    php -w "src/$file" > "$DEST/$file"
done

# Copy and minify form files
for file in FormInquiriesApi.php FormModule.php FormModuleInquiries.php FormModuleInquiriesField.php FormNavigation.php; do
    php -w "src/forms/$file" > "$DEST/forms/$file"
done

# Preserve file permissions
chmod -R 644 "$DEST"/*.php "$DEST/forms"/*.php
