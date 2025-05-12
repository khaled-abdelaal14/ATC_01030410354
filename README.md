Make sure you have the following installed on your machine:

- PHP >= 8.1  
- Composer  
- MySQL (or another supported database)  
- Node.js and npm (for frontend dependencies like Vite)


## Installation Steps

Follow the steps below to install and run the project locally:

### 1. Clone the project:

```bash
https://github.com/khaled-abdelaal14/ATC_01030410354.git
cd ATC_01030410354
composer install
cp .env.example .env
Edit the .env file and update your database credentials:
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

php artisan key:generate
php artisan migrate --seed

npm install
npm run dev
php artisan serve
afetr server run go to this link
http://127.0.0.1:8000




