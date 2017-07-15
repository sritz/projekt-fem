# :us: :jp: :gb: :es: :de: :kr: Projekt Fem :us: :jp: :gb: :es: :de: :kr: 

## Installation
Below are the instructions for installing the game locally for development. I've only ever done this on Linux...so to be honest I don't know if all of these commands work the same way on Windows. If it doesn't, then I'm sure there are guides online that explain how to get an existing Laravel project working after you clone the repository.

#### Requirements
* [Laravel](https://laravel.com/docs/5.4)

#### Instructions
First you'll need to clone the git repository:

    git clone https://github.com/sritz/projekt-fem.git
    
Then change directories into the newly created directory for the project. Now you can install any dependencies with composer:

    composer install
    
Copy the .env.example file and name it .env, you'll also need to edit the file with your local database settings:

    cp .env.example .env
    
Run the migrations: 

    php artisan migrate
    
Generate a key for the project:

    php artisan key:generate
    
After this you should be good to go with a local copy of the game.
    
