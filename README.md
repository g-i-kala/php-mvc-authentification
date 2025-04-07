
# Authentication Project

This project is a basic authentication system built using PHP and the MVC architecture. It is designed to showcase my understanding of the login and authentication process, similar to how frameworks like Laravel handle it.

## Features

- **User Login**: Basic structure for user login functionality.
- **User Authentication**: Framework to authenticate users and manage sessions.
- **MVC Architecture**: Separation of concerns for better maintainability.
- **Styling**: Tailwind CSS for modern and responsive design.
- **Unit Testing**: (Planned) Implement unit tests to ensure code quality.

## Installation

To set up the project locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/g-i-kala/php-mvc-authentification.git
   cd authentication-project
   ```

2. **Install Dependencies**:
   Ensure you have [Composer](https://getcomposer.org/) installed, then run:
   ```bash
   composer install
   ```

3. **Environment Setup**:
   Copy the `.env.example` file to `.env` and configure your environment settings, such as database connection details.

4. **Database Migration**:
   Run the database migrations to set up the necessary tables:
   ```bash
   php artisan migrate
   ```

5. **Serve the Application**:
   Use the built-in PHP server to run the application:
   ```bash
   php -S localhost:8000 -t public
   ```

## Usage

After setting up, you can access the application by navigating to `http://localhost:8000` in your web browser. The project includes a basic login form and structure for authentication.

## Project Structure

- **app/**: Contains the core application files, including controllers, models, and views.
- **public/**: The entry point for the application; contains the `index.php` file.
- **routes/**: Defines the application routes.
- **src/**: Contains view templates styled with Tailwind CSS.
- **tests/**: Contains tests.
- **config/**: Configuration files for the application.

## Contributing

Contributions are welcome! If you have suggestions or improvements, feel free to create an issue or submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

For any inquiries, please reach out via [your email] or open an issue on GitHub.
