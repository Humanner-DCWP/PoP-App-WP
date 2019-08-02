# Bootstrap a PoP Application for WordPress

Project to install a PoP application running on WordPress.

## Install

Via [Composer](https://getcomposer.org) and [WP-CLI](https://wp-cli.org/):

1. Create the [WordPress database and user](https://wordpress.org/support/article/how-to-install-wordpress/#step-2-create-the-database-and-a-user)
2. Set environment variables: Copy the code below to an editor, replace all values (such as `{YOUR_SITE_FOLDER_NAME}`) with your own values, and then paste it on the terminal to execute.

a. Folder name where to install the site:

```bash
export FOLDER_NAME={YOUR_SITE_FOLDER_NAME} #eg: MyAwesomeSite
```

b. `wp-config.php` constants:

```bash
export DB_NAME={YOUR_SITE_DB_NAME} #eg: database
export DB_USER={YOUR_SITE_DB_USER} #eg: admin
export DB_PASSWORD={YOUR_SITE_DB_PASSWORD} #eg: sADF!kl9diq@#Sjfk
export DB_HOST={YOUR_SITE_DB_HOST} #eg: 127.0.0.1
export SITE_URL_WITHOUT_HTTP={YOUR_SITE_URL_WITHOUT_HTTP} #eg: localhost
export SITE_URL_WITH_HTTP={YOUR_SITE_URL_WITH_HTTP} #eg: http://localhost
export SITE_NAME="{YOUR_SITE_NAME}" #eg: "My awesome website"
export ADMIN_USER={ADMIN_USER} #eg: admin
export ADMIN_PASSWORD={ADMIN_PASSWORD} #eg: JKo$@sfjASD00w
export ADMIN_EMAIL={ADMIN_EMAIL} #eg: pedro@example.com
```

To set the SALT keys there are two alternatives:

I. Set random values through environment variable `SHUFFLE_SALT_KEYS`:

```bash
export SHUFFLE_SALT_KEYS=true
```

II. Set the corresponding values directly:

```bash
# Obtain random values from https://api.wordpress.org/secret-key/1.1/salt
export AUTH_KEY={YOUR_AUTH_KEY}
export SECURE_AUTH_KEY={YOUR_SECURE_AUTH_KEY}
export LOGGED_IN_KEY={YOUR_LOGGED_IN_KEY}
export NONCE_KEY={YOUR_NONCE_KEY}
export AUTH_SALT={YOUR_AUTH_SALT}
export SECURE_AUTH_SALT={YOUR_SECURE_AUTH_SALT}
export LOGGED_IN_SALT={YOUR_LOGGED_IN_SALT}
export NONCE_SALT={YOUR_NONCE_SALT}
```

3. In the terminal, `cd` to the folder where to install the site, and execute script:

```bash
wget -O - https://raw.githubusercontent.com/leoloso/pop-app-wp/master/install/install.sh | bash
```

(Or copy/paste the contents of [install.sh](https://github.com/leoloso/pop-app-wp/blob/master/install/install.sh) in the terminal, eg: for Windows users)

4. Wait for a few minutes ☕️😁
5. Check that WordPress and PoP were successfully installed:
    - WordPress site: {YOUR_SITE_URL_WITH_HTTP}
    - WordPress admin: {YOUR_SITE_URL_WITH_HTTP}/wp/wp-admin/
    - PoP API (REST for posts): {YOUR_SITE_URL_WITH_HTTP}/posts/?action=api&datastructure=rest

### Configure application options (optional)

Upon installation, the Composer script will create file `config/.env` including default values for application options (passed as environment variables). You can further edit this file, or even create more specific ones (following [Symfony's Dotenv component](https://symfony.com/doc/current/components/dotenv.html)'s file hierarchy).

## Installed Components

This bootstrapper will install the following components (for WordPress):

Coming soon...

## Usage

Coming soon...

## Credits

- [Leonardo Losoviz][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/leoloso
