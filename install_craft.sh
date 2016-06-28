#!/usr/bin/env bash

# download latest Craft
curl -kLo ./craft.zip "https://craftcms.com/latest.zip?accept_license=yes"

# unzip Craft
unzip craft.zip -d tmp

# move the craft/app folder to app
mv tmp/craft/app app

# remove the craft folder and cleanup
rm -rf tmp && rm craft.zip
