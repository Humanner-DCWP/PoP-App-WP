#!/bin/bash
# Output all commands
set -x

# Install PoP and WordPress through Composer:
composer create-project leoloso/pop-app-wp $FOLDER_NAME dev-master

# Install the must-use plugins:
cd $FOLDER_NAME
composer install

## Check if WordPress is installed. If not, install it
if ! $(wp core is-installed); then

    echo Installing WordPress
    
    # Configure wp-config.php through WP-CLI: (reference: https://developer.wordpress.org/cli/commands/config/set/)
    wp config set DB_NAME $DB_NAME #eg: database
    wp config set DB_USER $DB_USER #eg: admin
    wp config set DB_PASSWORD $DB_PASSWORD #eg: sADF!kl9diq@#Sjfk
    wp config set DB_HOST $DB_HOST #eg: 127.0.0.1

    # Generate random SALT keys through WP-CLI: (reference: https://developer.wordpress.org/cli/commands/config/shuffle-salts/)
    wp config shuffle-salts

    # Install WordPress: (reference: https://developer.wordpress.org/cli/commands/core/install/)
    wp core install --url=$SITE_URL_WITHOUT_HTTP --title="$SITE_NAME" --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASSWORD --admin_email=$ADMIN_EMAIL

    # Update the site URL, adding "/wp"
    wp option update siteurl $SITE_URL_WITH_HTTP/wp
fi
