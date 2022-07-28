#!/bin/bash

# check dependencies (composer)
commandToCheck="composer"
if [ `command -v $commandToCheck | grep $commandToCheck | wc -l` -eq 0 ]
then
    echo Please install \"$commandToCheck\" before proceeding further
    exit 1
fi

# build module
echo "Building package"
if [ ! -d 'vendor' ]
then
    composer install
fi
if [ -d 'releases' ]
then
    rm -rf releases/
fi
./vendor/bin/package `cat version`
echo "Building package completed!"
