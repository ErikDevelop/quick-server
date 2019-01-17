# quick-server
This is a symfony server setup. A check-out and go solution for quickly developing new environments.

# prerequisites
development certificates are required. You should be able to test SSL functionality properly, after all. Security should not be an afterthought after deploying to production! This is a very painless process, however, when using mkcert (https://github.com/FiloSottile/mkcert). Simply install the tool. I will cover certificate creation in the 'creating a new project' section.

# installation
Simply run `docker-compose build`, that's it. You're good to turn up the docker!

# creating a new project
1) Create a symfony/laravel project on your computer
2) drag-and-drop the created folder into the apps folder.
3) Either create a new file in sites-available or adjust an existing one to point to the public folder.
4) navigate your CMD to `./docker/nginx/certs/development/` folder and run the `mkcert dev.local "*.dev.local"localhost 127.0.0.1 ::1` command to create your certs.
5) Adjust your configuration file to point to the right certificate names, domain names, root folder, andsoforth.
6) create a database volume with `docker volume create --name=database-volume`
7) run `docker-compose run --workdir="your_project_folder>"  --rm php composer install` if you have chosen a project that requires composer installation.
8) add your chosen development domain to your `hosts.conf` file.
9) run `docker-compose up -d`
10) have fun!
