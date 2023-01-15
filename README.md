## This project is a simple API interface with 5 routes, 2 of which are authenticated.
### Need to run the commands:
- composer install
- php artisan migrate
- php artisan serve

## Technologies used:
- Laravel 7.30.6
- PHP 8.0.13
- MySQL 5.7.36

## Routes:
- /api/auth/register        - *POST*
- /api/auth/login           - *POST*
- /api/auth/logout          POST
- /api/bookstore            - *POST GET PUT DELETE*
- /api/user                 - *POST GET PUT DELETE*

## Created tables:
- User
- book_stores

The /api/auth/register route does not need authentication, it contains the POST method that receives parameters to persist the records in the database:
- 'name' => minimum 3 characters
- 'email' => email format
- 'password' => minimum 8 characters

The /api/auth/login route does not need authentication, it contains the POST method that receives parameters to authenticate the user and returns the access token
- 'email' => email format
- 'password' => minimum 8 characters

The /api/auth/logout route needs authentication, it contains the POST method that logs out the user by destroying his access token

The /api/bookstore route does not need authentication, it has the following methods:
- GET -> Returns all records
- Post -> Save records with the following parameters:
    - name : string, greater than 3 digits
    - ISBN : integer, greater than 5 digits
    - value : decimal, greater than 3 digits
    
- PUT -> With record id reference updates record
- Delete -> With the record id reference deletes the record

the /api/user route needs authentication, it has the following methods:
GET -> Returns all users
Post -> Save records with the following parameters:
    - name : string, greater than 3 digits
    - email : string, email format
    - password : string, greater than 8 digits
    
PUT -> With the userid reference update the user
Delete -> With the user id reference deletes the user
