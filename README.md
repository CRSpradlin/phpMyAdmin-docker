# phpMyAdmin Playground Repository

This repository was built to play around with using php to interact with a mysql database which also has phpMyAdmin for easy maintainace of the mysql database.

## Requirments

 - docker-compose
 - familiarity of php

> Note: By installing the [Docker Desktop Application](https://www.docker.com/products/docker-desktop), docker as well as docker-compose are automatically installed with a nice user interface.

## Usage and Installation

Run `docker-compose up` within the repository directory after cloning and installing docker-compose.

Both a mysql database as well as a phpMyAdmin webserver container is created. The phpMyAdmin can be accessed through your `localhost` on your browser. The username and password for the phpMyAdmin are the specified username and password defined in the environment varibles of the `mysqldatabase` container (defined in the `docker-compose.yml` file). 

The `./site` folder is linked to `/var/www/html/site` of the `phpmyadmin` container. Any scripts within the `./site` directory of the cloned down repository can be ran and tested by going to `localhost/site/[filename]`.
