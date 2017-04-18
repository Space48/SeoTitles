# SeoTitles
Product SeoTitles Magento 2 Module

## Installation

**Manually** 

To install this module copy the code from this repo to `app/code/Space48/SeoTitles` folder of your Magento 2 instance, then you need to run php `bin/magento setup:upgrade`

**Via composer**:

From the terminal execute the following:

`composer config repositories.space48-quick-view vcs git@github.com:Space48/SeoTitles.git`

then

`composer require "space48/SeoTitles:{module-version}"`

## How to use it
Once installed, go to the `Admin Penel -> Products -> Categories -> Select a category, 
and under Search Engine Optimization section you will see a field called `H1 Override`.


## How to uninstall
`bin/magento module:uninstall Space48_SeoTitle`