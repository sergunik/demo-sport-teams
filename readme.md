# Demo code "Sports team"

## Requirements:

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

## In demo used:

- [Laravel](https://laravel.com/) - framework
- [Laradock](https://laradock.io/) - Laravel-ready docker container
- [Composer](https://getcomposer.org/) - Dependency Manager for PHP
- [Passport](https://laravel.com/docs/5.7/passport) - API Authentication 

## How to run?

1. Checkout this repo: `git clone https://github.com/sergunik/demo-sport-teams.git`

1. Go inside dir: `cd demo-sport-teams`

1. Run docker container (Laradock): `docker-compose up -d nginx mysql workspace`

1. Go inside container: `docker-compose exec workspace bash`

1. Change directory: `cd /var/www`

1. Run composer update with bonus (migrations, seeds, etc): `composer quick-prepare`

1. Open demo in browser. Url: `http://localhost/`

## REST API
### Available methods:
- `GET` Retrieve resources _(without authentications)_
- `POST` Create resource _(protected)_
- `PATCH` Update resource _(protected)_
- `DELETE` Delete resource _(protected)_

### Request headers:
Do not forget about `Accept` header in each request.

`Accept: application/json`

### Play with players:

- GET: `http://localhost/api/players` - Display a listing of the resources.
- GET: `http://localhost/api/players/{player_id}` - Display the specified resource.
- POST: `http://localhost/api/players` - Create new resource.
- PATCH: `http://localhost/api/players/{player_id}` - Update the specified resource.
- DELETE: `http://localhost/api/players/{player_id}` - Remove the specified resource.

### Play with teams:

- GET: `http://localhost/api/teams` - Display a listing of the resources.
- GET: `http://localhost/api/teams/{team_id}` - Display the specified resource.
- POST: `http://localhost/api/teams` - Create new resource.
- PATCH: `http://localhost/api/teams/{team_id}` - Update the specified resource.
- DELETE: `http://localhost/api/teams/{team_id}` - Remove the specified resource.

### HTTP Status Codes of response

- `200` OK. The standard success code and default option.
- `201` Object created. Useful for the store actions.
- `204` No content. When an action was executed successfully, but there is no content to return.
- `206` Partial content. Useful when you have to return a paginated list of resources.
- `400` Bad request. The standard option for requests that fail to pass validation.
- `401` Unauthorized. The user needs to be authenticated.
- `403` Forbidden. The user is authenticated, but does not have the permissions to perform an action.
- `404` Not found. This will be returned automatically by Laravel when the resource is not found.
- `500` Internal server error. Ideally you're not going to be explicitly returning this, but if something unexpected breaks, this is what your user is going to receive.
- `503` Service unavailable. Pretty self explanatory, but also another code that is not going to be returned explicitly by the application.

### Authentication method
- Go to Database and select any email. Password default for all account (`secret`).
- Open your [favorite rest-client](https://chrome.google.com/webstore/detail/restlet-client-rest-api-t/aejoelaoggembcahagimdiliamlcdmfm) and send POST-request to  `http://localhost/api/login`

    Headers:
    ```
    Accept: application/json
    ```
    Body:
    ```
    email = some-email-from-database@foo.bar
    password = secret
    ```
    
    ![Get token](https://raw.githubusercontent.com/sergunik/demo-sport-teams/master/screenshot_1.png)

- Use protected API calls with token. Need only put token into headers with special word `Bearer`. 
    
    Headers:
    ```
    Accept: application/json
    Authorization: Bearer eyJ0eXAiOiJKDFHRCXCSV1Q...NuWU
    ```
    
    ![Drop player](https://raw.githubusercontent.com/sergunik/demo-sport-teams/master/screenshot_2.png)
    
## ToDo (future improvements)
- Create relation in Database between Team and Players
- Improve Create and Update API calls according to relations (Team and Players)
- Implement registration  