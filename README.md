# SeoTitles
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Space48/SeoTitles/badges/quality-score.png?b=master&s=f13485e424f50da6599321152195ef4d60e4a456)](https://scrutinizer-ci.com/g/Space48/SeoTitles/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Space48/SeoTitles/badges/build.png?b=master&s=48100e53b59c43fb14b14de8039d728546f5ee6d)](https://scrutinizer-ci.com/g/Space48/SeoTitles/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/Space48/SeoTitles/badges/coverage.png?b=master&s=ad73aed196c7f8fbf95cf7a1d8da28f33a8a3f58)](https://scrutinizer-ci.com/g/Space48/SeoTitles/?branch=master)

SeoTitles module for Magento 2

<img width="1249" alt="indoor_living___categories___inventory___products___magento_admin" src="https://cloud.githubusercontent.com/assets/1080386/25120747/37ce3e1a-2417-11e7-9835-a748f7fb5165.png">
This module adds and extra leyer to override H1 values for categories and products.

## Installation

**Manually** 

To install this module copy the code from this repo to `app/code/Space48/SeoTitles` folder of your Magento 2 instance, then you need to run php `bin/magento setup:upgrade`

**Via composer**:

From the terminal execute the following:

`composer config repositories.space48-seo-titles vcs git@github.com:Space48/SeoTitles.git`

then

`composer require "space48/SeoTitles:{module-version}"` for a specific [version](https://github.com/Space48/SeoTitles/releases)

or

`composer require "space48/SeoTitles"` to install the latest version

## How to use it
Once installed, go to the `Admin Penel -> Products -> Categories -> Select a category, 
and under Search Engine Optimization section you will see a field called `H1 Override`.


## How to uninstall
`bin/magento module:uninstall Space48_SeoTitles`
