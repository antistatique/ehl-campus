ehl-campus
==========

EHL Campus Developement Forum - Drupal

Functional wireframe:  http://dev.antistatique.net/ehl/

## Quick install
    $ cd drupal
    $ drush site-install minimal --db-url=mysql://ehlcampus:ehlcampus@localhost/ehlcampus --db-su=root --db-su-pw= --site-name=ehl Campus
    $ drush en ehl_site
    $ drush cc all
    $ drush fra

    // enable the theme
    $ drush en ehl

    // add extra module for dev

    $ drush en views_ui devel_generate


## After a git pull/merge
    $ drush cc all
    $ drush fra
    $ drush cc all
    $ drush updb

## After updating a feature component
    $ drush fd
    $ drush fu [feature_name]
    $ git commit ...


## Generate make file
    $ cd drupal
    $ drush generate-makefile ../ehl-dev-camp.make


# Deploy with capistrano

gem install capistrano-drupal

After installation overwrite the script with https://github.com/antistatique/capistrano-drupal

## Documentations

http://drush.ws/
http://drupal.org/theme-guide/6-7
http://api.drupal.org/api/drupal/7


## Style d'image

