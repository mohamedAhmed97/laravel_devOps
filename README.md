
# Docker Compose Setup for Laravel Development

This project provides a Docker Compose setup for building a Laravel application development environment. It includes services for PHP, Apache, Composer, MySQL, and phpMyAdmin, making it easy to get started with Laravel development.

## Table of Contents

- [Docker Compose Setup for Laravel Development](#docker-compose-setup-for-laravel-development)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Prerequisites](#prerequisites)
  - [Project Structure](#project-structure)
  - [Usage](#usage)
    - [Building the Docker Containers](#building-the-docker-containers)
    - [Starting the Development Environment](#starting-the-development-environment)
    - [Accessing phpMyAdmin](#accessing-phpmyadmin)
  - [Customization](#customization)
  - [Contributing](#contributing)

## Introduction

This project simplifies Laravel application development by providing a Docker Compose setup that includes the following services:

- PHP: Running Laravel applications.
- Apache: Serving web content.
- Composer: Dependency management for Laravel.
- MySQL: Database server.
- phpMyAdmin: Web-based database management tool.

## Prerequisites

Before using this Docker Compose setup, ensure you have the following prerequisites installed on your system:

- Docker: [Installation Guide](https://docs.docker.com/get-docker/)
- Docker Compose: [Installation Guide](https://docs.docker.com/compose/install/)

## Project Structure

The project directory structure is organized as follows:

```plaintext
laravel-docker/
├── app/
│   ├── Dockerfile
    ├── .env.example
│   └── ... (Laravel application files)
├── docker-compose.yml
├── .gitignore
├── README.md
└── ...
```

- `app/`: Directory containing your Laravel application files and a `Dockerfile` for building the PHP container.
- `docker-compose.yml`: Docker Compose configuration file.
- `app/.env.example`: Example environment file for Laravel.
- `.gitignore`: Git ignore file.
- `README.md`: This documentation.

## Usage

Follow these steps to set up and use the Docker Compose environment:

### Building the Docker Containers

1. Clone the repository:

   ```bash
   git clone https://github.com/mohamedAhmed97/laravel_devOps
   cd laravel_devOps
   ```

2. Create a copy of the `app/.env.example` file as `app/.env` and configure it according to your Laravel application's needs.

3. Build the Docker containers:

   ```bash
   docker-compose build
   ```

### Starting the Development Environment

1. Start the Docker containers:

   ```bash
   docker-compose up -d
   ```

2. Access your Laravel application at `http://localhost:5000`.

### Accessing phpMyAdmin

- phpMyAdmin is accessible at `http://localhost:4000`. Use the MySQL credentials from your `.env` file to log in.

## Customization

You can customize this setup by modifying the Dockerfiles, `docker-compose.yml`, and environment variables in the `.env` file.

## Contributing

Contributions are welcome! If you have suggestions, improvements, or bug fixes, please open an issue or create a pull request.

