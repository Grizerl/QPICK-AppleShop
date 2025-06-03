## QPICK

QPICK is a modern and responsive online tech store where users can browse, compare, and purchase the latest gadgets, smartphones, accessories, and other electronic devices.

## Technologies Used

- **Laravel**: Backend framework for routing, models, controllers, and database management.
- **Blade**: Templating engine used for rendering views.
- **MySQL**: Database system for storing user and card-related data.

## Launch instructions

1. Clone the repository: `git clone https://github.com/Grizerl/QPICK-AppleShop.git`.
2. Change to the project folder: `cd shop`.
3. Install the dependencies: `composer install`.
4. Set up the .env file by copying from the example: `cp .env.example .env`.
5. Configure the database connection in your .env file:
DB_CONNECTION=mysql  
DB_HOST=your_database_host  
DB_PORT=your_database_port  
DB_DATABASE=your_database_name  
DB_USERNAME=your_database_user  
DB_PASSWORD=your_database_password
6. Generate the application key: `php artisan key:generate`.
7. Run the database migrations: `php artisan migrate`.
8. Start the Laravel development server: `php artisan serve`.