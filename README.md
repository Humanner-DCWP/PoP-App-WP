# Bootstrap a PoP Application for WordPress

Project to install a PoP application running on WordPress.

## Install

**1. Download WordPress and all PoP components via Composer**

```bash
$ composer create-project leoloso/pop-app-wp yoursitename
```

**2. Install the WordPress instance**

- [Install the WordPress database](https://wordpress.org/support/article/how-to-install-wordpress/#step-2-create-the-database-and-a-user)
- [Configure `wp-config.php`](https://wordpress.org/support/article/how-to-install-wordpress/#step-3-set-up-wp-config-php)
- [Run the install script](https://wordpress.org/support/article/how-to-install-wordpress/#step-5-run-the-install-script)

**3. Modify the Site Address (URL)**

Log in to the WordPress admin panel and go to Settings => General (`wp-admin/options-general.php`). There, remove the `/wp` bit from the Site Address (URL) input and save.

<!--
## Setting-up environment variables

If needed, create file `config/.env` (and other more specific files, following [Symfony's Dotenv component](https://symfony.com/doc/current/components/dotenv.html)'s instructions) including all required environment variables for the application. These files, containing environment information, must not be saved under version control.
-->
## Credits

- [Leonardo Losoviz][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/leoloso
