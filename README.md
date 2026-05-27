# Travel Planner

Travel Planner is a CakePHP web application for a local travel agency. It helps users browse and search travel services such as flights, hotels, and travel packages.

## Main Features

- Public travel landing page
- User login and registration
- Flight search and flight records
- Hotel search and hotel records
- Travel package search and package records
- Booking and payment-related pages
- Customer enquiry form
- Admin area for managing data
- Database export included for local setup

## Technology Stack

- PHP 8.3 recommended
- CakePHP 4.4
- MySQL-compatible local database
- Composer

## Project Structure

```text
.
├── config/          # CakePHP configuration
├── database/        # SQL database export
├── src/             # Controllers, models, entities, table classes
├── templates/       # Page templates
├── tests/           # PHPUnit test files
├── vendor/          # Composer dependencies, ignored by Git
└── webroot/         # Public CSS, JS, images, and index.php
```

## Database

The database export is stored at:

```text
database/3047travelplannerproj.sql
```

Main tables:

- `users`: registered users
- `flights`: flight records
- `hotels`: hotel records
- `packages`: travel package records
- `enquiries`: customer enquiry messages
- `payments`: payment records
- `reservations`: booking records
- `reservation_results`: booking result records
- `flight_data`, `hotel_data`, `package_data`: supporting search/result data
- `services`: service records

To import the database:

```bash
mysql -u 3047travelplannerproj -p < database/3047travelplannerproj.sql
```

The local configuration file is:

```text
config/app_local.php
```

For this machine, the database connection uses:

```text
host: 127.0.0.1
database: 3047travelplannerproj
username: 3047travelplannerproj
password: password
```

`config/app_local.php` is ignored by Git because it contains local database settings.

## Run Locally

Install dependencies if `vendor/` is missing:

```bash
composer install
```

Run the project with PHP 8.3:

```bash
/opt/homebrew/opt/php@8.3/bin/php -S 127.0.0.1:8766 -t webroot webroot/index.php
```

Open:

```text
http://127.0.0.1:8766
```

## Useful Pages

```text
/
/users/login
/flights
/hotels
/packages
/enquiries/add
```

Some pages redirect to the login page when the user is not logged in. This is expected for protected booking and admin functions.

## Notes

- PHP 8.3 is recommended for this project.
- PHP 8.5 may cause compatibility errors with older CakePHP dependencies.
- If the database connection fails with `localhost`, use `127.0.0.1` in `config/app_local.php`.
- PHPUnit tests currently depend on test database tables. The included `tests/schema.sql` is still a template, so the full test suite may fail until test schema setup is completed.
