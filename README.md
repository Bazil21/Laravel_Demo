<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD with Soft Deletes in Laravel

This repository contains a CRUD (Create, Read, Update, Delete) application built using Laravel, a powerful PHP framework. In addition to the basic CRUD functionality, this application also utilizes the Soft Delete feature provided by Laravel.

## Features

- **Create**: Add new records to the database easily.
- **Read**: Retrieve and view existing data from the database.
- **Update**: Modify and update information in the database seamlessly.
- **Delete**: Soft delete unwanted records, allowing for easy recovery if needed.

## Soft Delete in Laravel

Laravel provides a convenient way to handle soft deletes, allowing you to "delete" records without permanently removing them from the database. Soft deleted records are marked as deleted but remain in the database, making it possible to restore or permanently delete them as required.

## Technologies Used

- Laravel: A popular PHP framework known for its expressive syntax and robust features.
- MySQL: The database management system used to store and retrieve data.
- Blade Templating Engine: Laravel's built-in templating engine for creating dynamic views.

## Installation

1. Clone the repository to your local machine.
2. Install the necessary dependencies using Composer: `composer install`.
3. Create a new MySQL database for the application.
4. Rename the `.env.example` file to `.env` and update the database configuration.
5. Generate a new application key: `php artisan key:generate`.
6. Run the database migrations: `php artisan migrate`.
7. Start the development server: `php artisan serve`.

## Usage

1. Access the application in your web browser.
2. Create new records by filling out the necessary information in the provided form.
3. View the existing data in a user-friendly interface.
4. Update the records by making changes and saving the modifications.
5. Soft delete unwanted records, marking them as deleted but keeping them in the database.
6. Optionally, restore or permanently delete soft deleted records as needed.

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, feel free to open an issue or submit a pull request. Let's collaborate and make this CRUD app even better!

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

I would like to express my gratitude to the Laravel community for their continuous support and the amazing developers who have contributed to the Laravel framework. Their hard work and dedication have made projects like this possible.

---

Thank you for exploring this CRUD application with Soft Deletes in Laravel. I hope it proves to be a valuable resource for your development endeavors. If you find it useful, don't forget to give it a ⭐️!
