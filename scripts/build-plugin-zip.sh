#!/usr/bin/env bash
set -euo pipefail

plugin_directory="ky-vibe-enhancements"
distribution_directory="dist"
zip_file_path="${distribution_directory}/${plugin_directory}.zip"

if [ ! -d "${plugin_directory}" ]; then
	echo "Missing plugin directory: ${plugin_directory}" >&2
	exit 1
fi

mkdir -p "${distribution_directory}"
rm -f "${zip_file_path}"

zip -r "${zip_file_path}" "${plugin_directory}" -x "*.DS_Store" >/dev/null

echo "${zip_file_path}"

