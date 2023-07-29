# Blog

Anyone can share anywhere.

## Table of Contents

- [Introduction](#introduction)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Running the Application](#running-the-application)

## Introduction

Provide a more detailed introduction to your project, including its purpose, features, and any other relevant information.

## Getting Started

### Prerequisites

Make sure you have the following software installed on your machine:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Installation

1. Clone the repository:

    ```bash
   git clone https://github.com/Long6695/blog-api.git
   cd blog-api
   ```

2. Build the Docker containers:

   ```bash
   docker-compose build
   ```

### Running the Application

To start the application, run the following command:

```bash
docker-compose up -d
```

Wait for the containers to start up. Once the containers are up and running, you can access the application at [http://127.0.0.1:8080/](http://127.0.0.1:8080/).

### Migrate the Database

To run the database migrations, execute the following command:

```bash
docker exec -it blog-php-1 php artisan migrate
```

This will set up the database schema required for the application to function correctly.
