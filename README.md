## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

- Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.
- Add PHP to environment variables [(Add XAMPP PHP to Environment Variables in Windows 10)](https://dinocajic.medium.com/add-xampp-php-to-environment-variables-in-windows-10-af20a765b0ce).
- Serve project `php spark serve`.

## Migration & Seeder
- Create database named `web_hmif`.
- Run migrations `php spark migrate`.
- Seed user data `php spark db:seed UsersSeeder`.

## Env Configuration
```
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
app.CSRFProtection  = true
database.default.hostname = localhost
database.default.database = web_hmif
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](https://php.net/manual/en/intl.requirements.php)
- [libcurl](https://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](https://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](https://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)