Credits 2.0

phpVMS module to create a credits page for your phpVMS based virtual airline.

Released under the following license:
Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported License

Developed by:
simpilot - David Clark
www.simpilotgroup.com
www.david-clark.net

Developed on:
phpVMS v-dev
php 5.3.13
mysql 5.5.24
apache 2.2.22

Install Using Simpilotgroup Plugin Manager

-Download the package
-Upload the package to your site using the plugin manager
-Use the auto-install from the plugin manager

Install Manually:

-Download the package.
-Unzip the package and place the files as structured in your root phpVMS install.
-Use the credits.sql file to create the tables needed in your sql database using phpmyadmin or similar.

-Create a link on your site to access the credits page.

<a href="<?php echo url('/credits'); ?>">Credits</a>