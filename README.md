# Magento2 slideshow

Magento2 Slideshow - based on liteaccordion Jquery plugin with magento2 system configuration and block code

How to Install the module 
--------------------------
copy Webkul folder in app/code

Run Following Command via terminal
-----------------------------------
php bin/magento setup:upgrade

now module is properly installed

How to call the Block code 
--------------------------
You can call the block code as described in any of your CMS or Static block and it will display beautiful slideshow (Thanks to liteaccordion  as we are using liteaccordion jquery plugin )

{{block class="Webkul\Sleekaccordian\Block\Sleekaccordian" name="sleekaccordian1" template="sleekaccordian/view.phtml"}}


