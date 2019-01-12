# quick-server
This is a symfony server setup. A check-out and go solution for quickly developing new environments.

How to install a new symfony or laravel project:
1) Create a symfony/laravel project on your computer
2) drag-and-drop the created folder into the apps folder.
3) Either create a new file in sites-available or adjust an existing one to point to the public folder.
5) create a database volume with `docker volume create --name=database-volume`
4) run `docker-compose run --workdir="your_project_folder>"  --rm php composer install`
5) run `docker-compose up -d`
6) have fun!
