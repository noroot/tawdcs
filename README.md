
TAWDCS.ORG
=============

TAWDCS - a community of combat simulator pilots, dedicated to having loads of fun while trying to simulate being a combat pilot at an extremely high level. We fly as a team, train as a team and improve our skills on a daily basis to be ready for the most realistic air combat experience a simulator pilot can achieve.

This is Wordpress based site of TAWDCS community.


REQUIREMENTS
---------------
* Linux based OS
* nodejs with npm
* rvm with ruby
* php > 5.5
* php-fpm
* nginx
* mysql > 5

SETUP FOR DEVELOPMENT
--------------------------
* `git checkout` 
* `bundle install`
* `npm install`

Add "127.0.0.1 local.tawdcs.net" to /etc/hosts

Start local php server
* `export WP_ENV=local`
* `./runserver.sh dev`

Start gulp with SASS watchdog
* `cd public/wp-content/tawdcs/`
* `gulp watch`


DEPLOYMENT
------------

Capistrano is used to deploy this Wordpress project. 
See capistrano manual to understand how it works.

```bundle exec cap production deploy```







