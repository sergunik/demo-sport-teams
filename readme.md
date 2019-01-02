## Demo code "Sports team"

##Requirements:

Include the following elements:
- migration for adding the teams table
- migration for adding the players table
- seed script to fill the tables with some data
- API endpoint to add a team
- API endpoint to add a player
- API endpoint to update a player
- API endpoint to get a team and its players
- Bonus: authentication method so only trusted entities may call the APIs

Schema for teams table (you may add additional fields as needed):

- id
- name
- created_at
- updated_at

Schema for players table (you may add additional fields as needed):

- id
- first_name
- last_name
- created_at
- updated_at

## Used:

- [Laravel](https://laravel.com/) - framework
- [Laradock](https://laradock.io/) - Laravel-ready docker container
- [Composer](https://getcomposer.org/) - Dependency Manager for PHP

## How to run?

1. Checkout this repo: `git clone ...`

1. Run docker container: `docker-compose up -d nginx mysql workspace`

1. Go inside container: `docker-compose exec workspace bash`

1. Change directory: `cd /var/www`

1. Download vendors: `...`

1. Open demo in browser. Url: `http://localhost/`