# Todos App

Test app for creating tasks. Built with [Svelte](https://svelte.dev/)

## Getting Started
These instructions will give you a copy of the project and running on your local machine for development and testing purposes. 

### Prerequisites
To run this project locally, you need:

- **PHP** >= 8.2.10
- **Laravel** >= 10.25.2
- **Composer** >= 2.6.3

*You can find the installation instructions for these dependencies on their respective websites.*

## Installing
**Clone the repo**
```
git clone https://github.com/k-karina-n/todos-app.git
```

**Go to a project root directory**
```
cd todos
```

**Create dependencies**
```
composer install
```

**Rename the environment file** 
```
mv .env.example .env 
```

**Generate application key**
```
php artisan key:generate
```

**Configure your database connection by editing the .env file using the Vim text editor** 
```
vim .env
```

**Run migrations** 
```
php artisan migrate
```

**Install packages and bundle application's assets**
```
npm i
npm run dev
```

**Run project**
```
php artisan serve
```
