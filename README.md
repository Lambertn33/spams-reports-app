# Report spam App

A simple Laravel, Vue and inertia application to help in blocking and resolving spams in a certain web app

# Users
users can view all spam reports which are not blocked by the Team protectors (isBlocked: true)

# Protectors
Protectors can view all spam reports and can block or resolve them
once a report is resolved, its state becomes closed and it is no longer visible to Team protectors

# Project requirements
The project requires PHP v8~ and composer

# Project structure
the project has two views: users and protectors views (protectors view is considered as admins)

# Project setup
after cloning the project:
1. composer install
2. cp .env.example .env (add DB host, port, username and password)
3. php artisan key:generate
4. php artisan migrate
5. php artisan db:seed (to insert the reports in the DB from /data/reports.json)
6. npm install

# Running the project
1. php artisan serve
2. npm run dev

the project is ready on port 8000
