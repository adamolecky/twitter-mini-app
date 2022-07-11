# Docker + Symfony Stack

![PHP 8.0](https://img.shields.io/badge/PHP-8.0-8892BF.svg)
![MariaDB](https://img.shields.io/badge/Database_Server-MariaDB_10.5-c0765a.svg)
![nginx](https://img.shields.io/badge/Webserver-nginx_1.19-009447.svg)
![Redis](https://img.shields.io/badge/Cache_Engine-Redis_6-D92A2A.svg)


## Basics

This repo contains basic docker images to run Symfony app. If you want to run this repo just: 

1. Download contents
2. Go into a directory with docker-compose.yml
3. Add .env file with at least `DATABASE_URL=mysql://user:password@db:3306/database` row
4. Run ``docker-compose up`` in your terminal 
5. Connect to php pod using ``docker-compose exec php bash``
6. Install vendor using ``composer install`` in app folder
7. Now you can access Symfony app on localhost.
8. Inside in php container bash run migrations and fixtures: 
```
bin/console doctrine:migrations:migrate
bin/console doctrine:fixtures:load
```

Note: Be aware, that this is only <strong>mere example</strong> thus there is set only this paths: 

URIs for services: 

```
/api/login
api/user/new
api/user/{id}
api/user/{id}
api/user/followers
api/user/list/{page}/{sort}
api/follow/{id}
```

<strong>Working ids for elastic after 8th step: 1, 2, 3</strong>

FAQ: 

<b>I have problems with "permission rule 13" inside docker-compose logs when accessing index page, also favicon is not loading what to do?</b>
 
Problems you have is depended on rules of sharing files between machine and virtual instance. Simple solution is going to root app folder and as a root executing chmod 0777 ./* -R, which is not ideal, but it solves problem quickly. Second option is doing so for only files which are meant to be executed. (And with correct user not super admin).

How to connect as user/admin? 

If you run fixes, there are two users in DB, both with <b><i> very strong password 1234</b><i>, IDs could be obtained from DB, because only logged users are allowed into the app.


Thank you for feedback.