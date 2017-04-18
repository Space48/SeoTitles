# SeoTitles
Category SeoTitles module for Magento 2

<img width="1249" alt="indoor_living___categories___inventory___products___magento_admin" src="https://cloud.githubusercontent.com/assets/1080386/25120747/37ce3e1a-2417-11e7-9835-a748f7fb5165.png">


## Installation

**Manually** 

To install this module copy the code from this repo to `app/code/Space48/SeoTitles` folder of your Magento 2 instance, then you need to run php `bin/magento setup:upgrade`

**Via composer**:

From the terminal execute the following:

`composer config repositories.space48-quick-view vcs git@github.com:Space48/SeoTitles.git`

then

`composer require "space48/SeoTitles:{module-version}"`

## How to use it
Once installed, go to the `Admin Panel -> Products -> Categories -> Select a category, 
and under Search Engine Optimization section you will see a field called `H1 Override`.


## How to uninstall
`bin/magento module:uninstall Space48_SeoTitles`
