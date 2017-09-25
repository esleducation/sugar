#!/bin/bash

if [[ $PWD == *"/node_modules/sugarcss/scripts"* ]]
then
	cd ../
fi

if [[ $PWD == *"/node_modules/sugarcss"* ]]
then
	# move src
	mv src/js/ js/
	mv src/sass/ sass/
	mv src/components/ components/
	mv src/webcomponents/ webcomponents/

	# clean repo
	rm -rf src
	rm -rf *.html
	rm -rf *.php
	rm -rf pages
	rm -rf .sass-cache
	rm -rf assets
	rm -rf config.rb
	rm -rf favicon.ico
	rm -rf .DS_Store
	rm -rf *.coffee
	rm -rf scripts
fi
