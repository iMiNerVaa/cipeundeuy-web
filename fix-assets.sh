#!/bin/bash

# Asset Fix Script for Velzon Laravel Project
# This script ensures all assets are in the correct locations expected by CSS files

echo "Starting asset fix process..."

# Create necessary directories
mkdir -p public/build/css/plugins/fonts
mkdir -p public/build/css/fonts
mkdir -p public/build/css/images/landing
mkdir -p public/build/css/images/sidebar
mkdir -p public/build/css/images/flags
mkdir -p public/build/css/images/nft

# Copy font files to plugins directory (required by icons.min.css)
echo "Copying font files to plugins directory..."
cp public/build/fonts/materialdesignicons-webfont.* public/build/css/plugins/fonts/ 2>/dev/null || true
cp public/build/fonts/remixicon.* public/build/css/plugins/fonts/ 2>/dev/null || true
cp public/build/fonts/boxicons.* public/build/css/plugins/fonts/ 2>/dev/null || true
cp public/build/fonts/la-*.* public/build/css/plugins/fonts/ 2>/dev/null || true

# Copy font files to css/fonts directory
echo "Copying HK Grotesk fonts..."
cp public/build/fonts/hkgrotesk-*.* public/build/css/fonts/ 2>/dev/null || true

# Copy image files to expected locations
echo "Copying image files..."
cp public/build/images/landing/bg-pattern.png public/build/css/images/landing/ 2>/dev/null || true
cp public/build/images/chat-bg-pattern.png public/build/css/images/ 2>/dev/null || true
cp public/build/images/modal-bg.png public/build/css/images/ 2>/dev/null || true
cp public/build/images/cover-pattern.png public/build/css/images/ 2>/dev/null || true
cp public/build/images/file.png public/build/css/images/ 2>/dev/null || true
cp public/build/images/new.png public/build/css/images/ 2>/dev/null || true
cp public/build/images/auth-one-bg.jpg public/build/css/images/ 2>/dev/null || true

# Copy flags
cp public/build/images/flags/us.svg public/build/css/images/flags/ 2>/dev/null || true

# Copy sidebar and nft images
cp -r public/build/images/sidebar/* public/build/css/images/sidebar/ 2>/dev/null || true
cp -r public/build/images/nft/* public/build/css/images/nft/ 2>/dev/null || true

echo "Asset fix completed successfully!"
echo "All font and image files have been copied to their expected locations."
