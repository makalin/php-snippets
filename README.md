# PHP Snippets: Modern Web Application Components

## Overview

Modern PHP development practices, including array manipulation, file processing, routing, authentication, and database connectivity.

## Features

### 1. Array Manipulation (`arrays.php`)
Showcase of PHP's powerful array functions:
- `array_filter()`: Filter even numbers from an array
- `array_map()`: Transform arrays (e.g., squaring numbers)
- `array_reduce()`: Aggregate array values (sum calculation)

### 2. File Processing (`file-processing.php`)
Flexible file reading and line processing utility:
- Generic file processor function
- Supports line transformations (uppercase, length calculation)
- Easily extensible processing of text files

### 3. REST Router (`rest-router.php`)
Custom routing implementation for RESTful API:
- Dynamic route registration
- Method-based routing
- JSON response handling
- 404 error management
- Example routes for users (GET and POST)

### 4. User Authentication (`authentication.php`)
Secure user management system:
- Password hashing with bcrypt
- User registration
- Secure login mechanism
- Session management
- Logout functionality

### 5. Database Connector (`database-connection.php`)
PDO-based database interaction:
- Centralized database connection
- Error handling
- Prepared statement usage
- User retrieval and insertion methods

## Requirements

- PHP 7.4+
- PDO Extension
- MySQL Database

## Setup

1. Configure database credentials in `database-connection.php`
2. Create necessary database tables
3. Install dependencies (if any)

## Security Features

- Password hashing
- Prepared statements to prevent SQL injection
- Session-based authentication
- Error mode set to exception for robust error handling

## Recommended Improvements

- Add input validation
- Implement more comprehensive error handling
- Create configuration files for environment-specific settings
- Add logging mechanisms
