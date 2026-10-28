# Laravel POS — From Arrays to Eloquent

This is the IT0049 TFA6 POS data layer activity. Customer and user records are stored in SQLite or another Laravel supported database, created with migrations, populated with seeders, retrieved by Eloquent models, and displayed in Blade views.

## Requirements

- PHP 8.2 or newer with `pdo_sqlite` enabled, or a configured MySQL database
- Composer 2

## Run locally

```bash
composer install
cp .env.example .env
php artisan key:generate
```

The default `.env.example` uses SQLite. Create an empty `database/database.sqlite` file if it does not already exist. On Windows PowerShell, use `Copy-Item .env.example .env` and `New-Item database/database.sqlite -ItemType File` in place of the corresponding Unix commands.

```bash
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`. The navigation includes the overview, customer directory, and user directory. To refresh sample records later, run `php artisan db:seed`; seeders use `updateOrCreate` so rerunning them does not duplicate records.

## Data flow

| Table | Migration fields | Seeder | Eloquent model | Page |
| --- | --- | --- | --- | --- |
| `customers` | `id`, `full_name`, `email`, `phone`, timestamps | `CustomerSeeder` | `Customer` | `/customers` |
| `users` | `id`, unique `username`, `full_name`, timestamps | `UserSeeder` | `User` | `/users` |

`CustomerController` and `UserController` query their models and pass the results to Blade. Five sample records are provided for each table. Sample contact details are fictional.

## Checks

```bash
php artisan test
```

For a hosted deployment, point the web server at `public/`, provide an application key and database connection through environment variables, and run `php artisan migrate --seed --force`. The `users` table here stores POS directory records; this exercise does not implement authentication.
