# Craft CMS Boilerplate

Start your next project faster with some sensible defaults. This boilerplate is our standard for creating new Craft CMS projects.

## Requirements

- [Composer](https://getcomposer.org)
- [NPM](https://www.npmjs.com)
- [PHP 7.0+](http://php.net)

## Whats Included

- Exploded directory structure
- PHPDotEnv
- Laravel Elixir
- Heroku configuration
- Docker Environment

## TL;DR

Install this as your starting point with the following command:

```
composer create-project venveo/craft-boilerplate --ignore-platform-reqs new-project-name
```

> _Note_: When using `composer` to install dependencies, you may run into the following error: "Your requirements could not be resolved to an installable set of packages." Run `composer install --ignore-platform-reqs` to install regardless of your platforms PHP version.


### Structure

Out of the box, this project comes prepared with an expanded folder structure, which simply means not the `craft/{subfolders}` and `public/index.php`.

Instead the structure looks like this:

- `app`
- `config`
- `plugins`
- `public`
- `resources`
- `storage`

> _Note_: the `templates` directory is located under `resources`.

### PHPDotEnv Support

While we love how easy [Craft can support multiple environments](TODO link), we still find ourselves reaching into the project to `composer require vlucas/phpdotenv` _(honestly, we have that committed to memory...)_. So we thought it best to include this in our setup with the bare minimum configuration options.

The following environment variables are set:

- `APP_ENV=local`
- `APP_URL=http://localhost`
- `APP_NAME=Application Name`
- `APP_CPTRIGGER=admin`
- `APP_KEY=64charstring`

- `DB_HOST=localhost`
- `DB_NAME=dev_projectname`
- `DB_USER=homestead`
- `DB_PASSWORD=secret`
- `DB_PREFIX=craft`

> _Note_: The `DB_*` environment variables are only required when developing locally. The `APP_*` variables should be set on all environments.

### Laravel Elixir/Gulp

Part of our workflow includes setting up a [`gulpfile.js`](https://github.com/venveo/craft-boilerplate/gulpfile.js) so this project has a simple Laravel Elixir configuration ready to rock.

> _Note_: That also means that we need a smart way to use Laravel Elixir in Craft templates. So we also `composer install` our Craft [Elixir](https://github.com/venveo/craft-elixir) plugin to speed things up.

### Heroku Ready!

Heroku is our platform of choice, so the project ships with a [`Procfile`](https://github.com/venveo/craft-boilerplate/Procfile) that suits most projects.


> _Note_: We understand that not all projects may choose Heroku over something like Digital Ocean and ServerPilot (we heart that option as well) so you can simply remove or ignore those two files.

## Installation and Setup

The most convenient way to install is using our [Craft CMS Installer](https://github.com/venveo/craft-installer) (WIP) which will allow you to install Craft from the command line using our boilerplate or a plain Craft installation.

### Craft Installer

Open terminal and enter the following command:

`craft new my-cool-website`

[Magic...](http://i.giphy.com/qJxFuXXWpkdEI.gif) Now go build something awesome!

> _Note_: Detailed documentation on the Craft Installer can be found [here](https://github.com/venveo/craft-installer/README.md). Which is still a work in progress, for now.

### Manual Installation

If you prefer not to use the command line installer but wish to use this boilerplate, follow these simple instructions:

1. Download the zip of this project from the master branch
2. Rename/move the directory to match your project name (e.g `my-cool-website`) and location
3. Download the latest version of [Craft CMS](https://craftcms.com) using the `install.sh` shell script
5. Copy `.env.example` to `.env` and update to meet your system configuration
6. *Optional:* If you plan to use Elixir, download our Craft [Elixir](https://github.com/venveo/craft-elixir) plugin

## Credits

* [Jason McCallister](https://github.com/themccallister)
* [Carlo Latiano](https://github.com/carlolaitano)

## About Venveo

Venveo is a Digital Marketing Agency for Building Materials Companies in Blacksburg, VA. Learn more about us on [our website](https://www.venveo.com).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
