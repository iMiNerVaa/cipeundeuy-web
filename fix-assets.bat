@echo off
echo Starting asset fix process...

REM Create necessary directories
if not exist "public\build\css\plugins\fonts" mkdir "public\build\css\plugins\fonts"
if not exist "public\build\css\fonts" mkdir "public\build\css\fonts"
if not exist "public\build\css\images\landing" mkdir "public\build\css\images\landing"
if not exist "public\build\css\images\sidebar" mkdir "public\build\css\images\sidebar"
if not exist "public\build\css\images\flags" mkdir "public\build\css\images\flags"
if not exist "public\build\css\images\nft" mkdir "public\build\css\images\nft"

REM Copy font files to plugins directory (required by icons.min.css)
echo Copying font files to plugins directory...
copy "public\build\fonts\materialdesignicons-webfont.*" "public\build\css\plugins\fonts\" >nul 2>&1
copy "public\build\fonts\remixicon.*" "public\build\css\plugins\fonts\" >nul 2>&1
copy "public\build\fonts\boxicons.*" "public\build\css\plugins\fonts\" >nul 2>&1
copy "public\build\fonts\la-*.*" "public\build\css\plugins\fonts\" >nul 2>&1

REM Copy font files to css/fonts directory
echo Copying HK Grotesk fonts...
copy "public\build\fonts\hkgrotesk-*.*" "public\build\css\fonts\" >nul 2>&1

REM Copy image files to expected locations
echo Copying image files...
copy "public\build\images\landing\bg-pattern.png" "public\build\css\images\landing\" >nul 2>&1
copy "public\build\images\chat-bg-pattern.png" "public\build\css\images\" >nul 2>&1
copy "public\build\images\modal-bg.png" "public\build\css\images\" >nul 2>&1
copy "public\build\images\cover-pattern.png" "public\build\css\images\" >nul 2>&1
copy "public\build\images\file.png" "public\build\css\images\" >nul 2>&1
copy "public\build\images\new.png" "public\build\css\images\" >nul 2>&1
copy "public\build\images\auth-one-bg.jpg" "public\build\css\images\" >nul 2>&1

REM Copy flags
copy "public\build\images\flags\us.svg" "public\build\css\images\flags\" >nul 2>&1

REM Copy sidebar and nft images
xcopy "public\build\images\sidebar\*" "public\build\css\images\sidebar\" /E /Y >nul 2>&1
xcopy "public\build\images\nft\*" "public\build\css\images\nft\" /E /Y >nul 2>&1

echo Asset fix completed successfully!
echo All font and image files have been copied to their expected locations.
