# Session Helper

**Session Helper** is a simple PHP class that provides easy methods to manage sessions, including flash messages, session destruction, and more.

## Installation

To install via Composer, run the following command:

```bash
composer require birkanoruc/session-helper
```

## Usage

### Starting a Session

Make sure to start the session in your application before using the session helper:

```php
Birkanoruc\SessionHelper\Session::start();
```

or

```php
session_start();
```

### Check if a Session Key Exists

```php
use Birkanoruc\SessionHelper\Session;

if (Session::has('user_id')) {
    // Do something
}
```

### Store a Session Value

```php
Session::put('user_id', 123);
```

### Retrieve a Session Value

```php
$userId = Session::get('user_id');
```

### Flash Data (temporary session data)

```php
Session::flash('message', 'User created successfully!');
```

### Clear Flash Data

```php
Session::unflash();
```

### Destroy a Session

```php
Session::destroy();
```

## Testing

To run the tests for this library, you need to have PHPUnit installed. Follow these steps:

1. Make sure you have installed the required dependencies:

   ```bash
   composer install
   ```

2. Run the tests using PHPUnit:

   ```bash
   vendor/bin/phpunit tests
   ```

## License

This project is licensed under the MIT License.
