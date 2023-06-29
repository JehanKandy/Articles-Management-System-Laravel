# Laravel Products Management

- This Project is develop for educational purposes only
- In this Project has 3 user levels
- - Admin
- - Staff
- - Client

- Features of this project
- - User Management
- - Articles Management

- Access Control of the Project
- - in User Management
- - - Admin can only edit and Delete any users (admin, Staff, Client)
- - - Admin can only change the role of the user (eg :- client -> admin)
- - - Staff and Client can read only

- - in Article Management
- - - Admin and the article added user can only Update and Delete the Article
- - - others can read only

# How to Start the Project

- First Download this Project
- and open the Project in VS Code or any code Editer

- Update .env file
- - find and replace follwing

        DB_DATABASE=articles_management
    
- type following code for migrate the all tables

        php artisan migrate

- and open a new Terminal 

- type following commands
        
        composer require laravel/ui

<br>
 
        php artisan ui bootstrap --auth
        
<br>
 
        npm install
        
<br>
 
        npm run dev
        
<br>
 
- after you hit enter the `npm run dev` you can see following codes 

> dev 
> vite


  VITE v4.3.9  ready in 2543 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h to show help

  LARAVEL v10.13.5  plugin v0.7.8

  ➜  APP_URL: http://localhost