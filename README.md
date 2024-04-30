# CodeIgniter Todo Application with Vue.js Frontend

This application is built using the PHP framework CodeIgniter for the backend and Vue.js for the frontend. It provides a simple Todo List management system with basic CRUD functionalities.

## Features

- Token-based authentication for API requests.
- CRUD operations for Todo items, including authorization checks to ensure only the owner or the assigned user can update or delete Todos.
- Vue.js frontend for interacting with the Todo List.
- PHPUnit tests for backend validation, including tests for authorization during todo updates, and tests for updating and deleting todos with authorization checks.
- GitHub Actions for CI/CD.
- SonarQube integration for code quality and security analysis.
- Users and Organizations tables for enhanced data management.
- Email notifications using AWS SNS when a todo is assigned or updated.
- OpenAPI documentation updated to reflect the latest functionality, including authorization checks for updating and deleting todos.
- Docker containers setup for local development with PHP, Nginx, and MySQL.

## Setup

### Dependencies

- PHP 7.4 or higher
- Composer for PHP dependency management.
- npm for managing frontend assets.
- Docker for containerization of PHP, Nginx, and MySQL services.

### Installing PHP Dependencies

Run `composer install` to install the required PHP dependencies.

### Setting Up Frontend Assets

Run `npm install` to set up the necessary frontend assets.

### Running the Application with Docker

Ensure Docker is installed on your system. Navigate to the project directory and run `docker-compose up` to start the PHP, Nginx, and MySQL services. The application's entry point is the `index.php` file located in the root directory.

### Testing

Run `./vendor/bin/phpunit` to execute the PHPUnit tests and ensure your setup is correct.

## API Endpoints

- `GET /todo`: List all todos or search by name/description.
- `POST /todo`: Create a new todo item.
- `PATCH /todo/{id}`: Update an existing todo item.
- `DELETE /todo/{id}`: Delete a todo item.

## Frontend

The Vue.js frontend can be accessed by navigating to the root URL of the application. It interacts with the backend through the defined API endpoints.

## Security

Ensure you set up environment variables for sensitive information such as database credentials and API keys.

## Contributions

Contributions are welcome. Please make sure to update tests as appropriate.

## License

This project is open-sourced under the MIT License.