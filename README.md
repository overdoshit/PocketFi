<div align="center">
  <img alt="Pocket Fi" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/logo.png">
</div>

# Pocket Fi
<p align="justify">
Pocket Fi is a website for portable WiFi lending services in Indonesia. Whether you are a foreign tourist in Indonesia or an Indonesian resident traveling abroad, Pocket Fi provides a seamless experience. The website features a responsive and user-friendly interface that showcases various rental packages, which can be picked up and returned via courier services. It is integrated with secure payment services, ensuring a safe and convenient transaction process.
</p>

## Table of Contents
- [Pocket Fi](#pocket-fi)
  - [Table of Contents](#table-of-contents)
  - [Key Features](#key-features)
  - [Screenshots](#screenshots)
  - [Design Pattern](#design-pattern)
  - [Technology Stack](#technology-stack)
  - [Setup](#setup)
    - [Runtime Environment](#runtime-environment)
    - [Prerequisites](#prerequisites)
      - [NGINX Installation](#nginx-installation)
      - [PHP Installation](#php-installation)
      - [Composer Installation](#composer-installation)
      - [MySQL Installation](#mysql-installation)
      - [Certbot Let's Encrypt Installation](#certbot-lets-encrypt-installation)
    - [Domain Setup](#domain-setup)
    - [Directory Setup](#directory-setup)
    - [Homepage Setup](#homepage-setup)
    - [Admin Dashboard Setup](#admin-dashboard-setup)
    - [Certbot Let's Encrypt Setup](#certbot-lets-encrypt-setup)
    - [NGINX Setup](#nginx-setup)
    - [PHP-FPM Setup](#php-fpm-setup)
  - [Analysis](#analysis)
  - [Contact](#contact)

## Key Features
1. **User-Friendly Interface**
    -  A responsive design that ensures a seamless experience on both desktop and mobile devices.
2. **Variety of Packages**
    - A range of rental packages tailored to different needs, whether for short trips or long-term use.
3. **Easy Booking Process**
    - Simple and easy-to-understand selection and ordering process.
4. **Courier Services**
    - Integrated with reliable courier services.
5. **Secure Payment Integration**
    - Integrated with trusted payment gateway for secure transactions.

## Screenshots
Homepage: 
<br>
<div align="center">
  <img width="412" alt="Homepage" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(01).png">
  <img width="412" alt="Products" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(05).png">
  <img width="412" alt="Profile" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(11).png">
  <img width="412" alt="Checkout" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(13).png">
  <img width="412" alt="Payment" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(14).png">
  <img width="412" alt="Orders" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(15).png">
</div>
<br>
Admin Dashboard: 
<br>
<div align="center">
  <img width="412" alt="Dashboard Light" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(16).png">
  <img width="412" alt="Dashboard Dark" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(17).png">
  <img width="412" alt="List Products" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(18).png">
  <img width="412" alt="Add Product" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(19).png">
  <img width="412" alt="Delete Product" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(21).png">
  <img width="412" alt="List Orders" src="https://raw.githubusercontent.com/overdoshit/PocketFi/master/public/assets/images/screenshots/Screenshot(22).png">
</div>
<br>
<div align="center">
  <a href="https://github.com/overdoshit/PocketFi/tree/master/public/assets/images/screenshots" target="_blank">
    <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Camera%20with%20Flash.png" alt="Camera with Flash" width="25" height="25">
    All Screenshots
    <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Camera%20with%20Flash.png" alt="Camera with Flash" width="25" height="25">
  </a>
</div>

## Design Pattern
<p align="justify">
The app follows the MVC (Model-View-Controller) architecture pattern, ensuring a clear separation of concerns and facilitating easier testing and maintenance of the codebase.
</p>

## Technology Stack
PocketFi is built using the following technologies:
- **PHP**
    - The core programming language.
- **CodeIgniter 4**
    - A PHP framework used for building the website, following the MVC pattern.
- **Google OAuth 2.0**
    -  Used for user authentication via Gmail.
- **Midtrans Payment Gateway**
    - Payment gateway integration for secure transactions.
- **MySQL**
    - The database management system used to store data.

## Setup
### Runtime Environment

| Component   | Version                                                  |
| ----------- | -------------------------------------------------------- |
| Ubuntu      | [22.04](https://ubuntu.com/download/server)              |
| NGINX       | [1.26.1](https://nginx.org/en/download.html)             |
| PHP         | [8.3.8](https://windows.php.net/download/)               |
| CodeIgniter | [4.5.2](https://codeigniter.com/user_guide/installation/installing_composer.html#installation) |
| Composer    | [2.7.7](https://getcomposer.org/download/)               |
| MySQL       | [8.0.37](https://dev.mysql.com/downloads/mysql/8.0.html) |

### Prerequisites

```bash
sudo apt update
sudo apt install software-properties-common apt-transport-https ca-certificates lsb-release unzip nano
```

#### NGINX Installation
1. Add the NGINX repository:
    ```bash
    sudo add-apt-repository ppa:ondrej/nginx
    sudo apt update
    ``` 

2. Install NGINX:
    ```bash
    sudo apt install nginx-full
    ```

3. Start and enable NGINX:
    ```bash
    sudo systemctl start nginx
    sudo systemctl enable nginx
    ```

#### PHP Installation
1. Add the PHP repository:
    ```bash
    sudo add-apt-repository ppa:ondrej/php
    sudo apt update
    ```

2. Install PHP:
    ```bash
    sudo apt install php php-cli php-fpm php-intl php-mbstring php-json php-mysql php-curl
    ```

3. Start and enable PHP-FPM:
    ```bash
    sudo systemctl start php-fpm
    sudo systemctl enable php-fpm
    ```

#### Composer Installation
1. Download and install Composer:
    ```bash
    cd ~
    curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
    HASH=`curl -sS https://composer.github.io/installer.sig`
    php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
    ```

#### MySQL Installation
1. Install MySQL:
    ```bash
    sudo apt install mysql-server
    ```

2. Secure the MySQL installation:
    ```bash
    sudo mysql_secure_installation
    ```
    2.1 Validate Password Component: `Y` <br>
    2.2 Select password strength level: `2` (Strong) <br>
    2.3 Set root password: [Enter your password] <br>
    2.4 Remove anonymous users: `Y` <br>
    2.5 Disallow root login remotely: `Y` <br>
    2.6 Remove test database and access to it: `Y` <br>
    2.7 Reload privilege tables: `Y` <br>

3. Start and enable MySQL:
    ```bash
    sudo systemctl start mysql
    sudo systemctl enable mysql
    ```

#### Certbot Let's Encrypt Installation
1. Install snapd: 
    ```bash
    sudo apt install snapd
    ```

2. Update snapd: 
    ```bash
    sudo snap install core
    sudo snap refresh core
    ```

3. Install Certbot using snapd: 
    ```bash
    sudo snap install --classic certbot
    ```

4. Create symlink for Certbot: 
    ```bash
    sudo ln -s /snap/bin/certbot /usr/bin/certbot
    ```

### Domain Setup
> [!WARNING]
> Replace all of `pocketfi.dev` with your actual domain name!

1. Go to your domain registrar's website.
2. Add DNS Record Sets for the following:
    - DNS Names: `pocketfi.dev`, `www.pocketfi.dev`, `admin.pocketfi.dev`, and `www.admin.pocketfi.dev`
    - Type: `A`
    - IP Address: The public IP address of your VM instance.
3. Save the changes.

### Directory Setup
```bash
cd /var/www/
sudo git clone https://github.com/overdoshit/PocketFi.git -b master pocketfi.dev
sudo git clone https://github.com/overdoshit/PocketFi.git -b admin admin.pocketfi.dev
```

### Homepage Setup
1. Navigate to the homepage directory: 
    ```bash
    cd /var/www/pocketfi.dev
    ```

2. Install dependencies: 
    ```bash
    sudo composer install
    ```

3. Setup `.env` file: 
    ```bash
    sudo cp env .env
    sudo nano .env
    ```
> [!NOTE]
> Edit the `.env` file according to your configuration.
    
4. Setup permissions: 
    ```bash
    sudo chown -R www-data:www-data writable
    sudo chown -R www-data:www-data public/assets/images/users
    ```

5. Database Migration and Seeding: 
    ```bash
    php spark migrate
    php spark db:seed DatabaseSeeder
    ```

### Admin Dashboard Setup
1. Navigate to the admin dashboard directory: 
    ```bash
    cd /var/www/admin.pocketfi.dev
    ```

2. Install dependencies: 
    ```bash
    sudo composer install
    ```

3. Setup `.env` file: 
    ```bash
    sudo cp env .env
    sudo nano .env
    ```
> [!NOTE]
> Edit the `.env` file according to your configuration.

4. Setup permissions: 
    ```bash
    sudo chown -R www-data:www-data writable
    ```

5. Create symlink for images: 
    ```bash
    cd /var/www/admin.pocketfi.dev/public/assets
    sudo ln -s /var/www/pocketfi.dev/public/assets/images /var/www/admin.pocketfi.dev/public/assets/images
    ```

### Certbot Let's Encrypt Setup
1. Get and install certificates for `pocketfi.dev` and `www.pocketfi.dev`:
    ```bash
    sudo certbot certonly --nginx -d pocketfi.dev -d www.pocketfi.dev
    ```

2. Get and install certificates for `admin.pocketfi.dev` and `www.admin.pocketfi.dev`:
    ```bash
    sudo certbot certonly --nginx -d admin.pocketfi.dev -d www.admin.pocketfi.dev
    ```

3. Test automatic renewal certificates:
    ```bash
    sudo certbot renew --dry-run
    ```

### NGINX Setup
1. Navigate to the sites-available directory: 
    ```bash
    cd /etc/nginx/sites-available
    ```

2. Default configuration (`/etc/nginx/sites-available/default`): 
    ```bash
    sudo nano default
    ```
    ```nginx
    # Redirect HTTP IP VM Instace to HTTPS pocketfi.dev
    server {
        listen 80 default_server;
        listen [::]:80 default_server;

        server_name _;

        return 301 https://pocketfi.dev$request_uri;
    }

    # Redirect HTTPS IP VM Instace to HTTPS pocketfi.dev
    server {
        listen 443 ssl default_server;
        listen [::]:443 ssl default_server;

        server_name _;

        ssl_certificate /etc/letsencrypt/live/pocketfi.dev/fullchain.pem; # managed by Certbot
        ssl_certificate_key /etc/letsencrypt/live/pocketfi.dev/privkey.pem; # managed by Certbot
        include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
        ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot

        return 301 https://pocketfi.dev$request_uri;
    }
    ```

3. Create configuration for `pocketfi.dev` (`/etc/nginx/sites-available/pocketfi.dev`): 
    ```bash
    sudo nano pocketfi.dev
    ```
    ```nginx
    # Redirect HTTP to HTTPS for pocketfi.dev
    server {
        listen 80;
        listen [::]:80;

        server_name pocketfi.dev www.pocketfi.dev;

        return 301 https://$host$request_uri;
    }

    # Main server configuration for pocketfi.dev
    server {
        listen 443 ssl;
        listen [::]:443 ssl;

        server_name pocketfi.dev www.pocketfi.dev;

        ssl_certificate /etc/letsencrypt/live/pocketfi.dev/fullchain.pem; # managed by Certbot
        ssl_certificate_key /etc/letsencrypt/live/pocketfi.dev/privkey.pem; # managed by Certbot
        include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
        ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot

        root /var/www/pocketfi.dev/public;

        index index.php index.html index.htm index.nginx-debian.html;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location ~ \.php$ {
            include snippets/fastcgi-php.conf;

            fastcgi_pass unix:/run/php/php8.3-fpm.sock;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            include fastcgi_params;
        }

        location ~ /\.ht {
            deny all;
        }
    }
    ```

4. Create configuration for `admin.pocketfi.dev` (`/etc/nginx/sites-available/admin.pocketfi.dev`): 
    ```bash
    sudo nano admin.pocketfi.dev
    ```
    ```nginx
    # Redirect HTTP to HTTPS for admin.pocketfi.dev
    server {
        listen 80;
        listen [::]:80;

        server_name admin.pocketfi.dev www.admin.pocketfi.com;

        return 301 https://$host$request_uri;
    }

    # Main server configuration for admin.pocketfi.dev
    server {
        listen 443 ssl;
        listen [::]:443 ssl;

        server_name admin.pocketfi.dev www.admin.pocketfi.com;

        ssl_certificate /etc/letsencrypt/live/admin.pocketfi.dev/fullchain.pem; # managed by Certbot
        ssl_certificate_key /etc/letsencrypt/live/admin.pocketfi.dev/privkey.pem; # managed by Certbot
        include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
        ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot

        root /var/www/admin.pocketfi.dev/public;

        index index.php index.html index.htm index.nginx-debian.html;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location ~ \.php$ {
            include snippets/fastcgi-php.conf;

            fastcgi_pass unix:/run/php/php8.3-fpm.sock;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            include fastcgi_params;
        }

        location ~ /\.ht {
            deny all;
        }
    }
    ```

5. Enable the sites: 
    ```bash
    sudo ln -s /etc/nginx/sites-available/pocketfi.dev /etc/nginx/sites-enabled/
    sudo ln -s /etc/nginx/sites-available/admin.pocketfi.dev /etc/nginx/sites-enabled/
    ```

6. Test the NGINX configuration: 
    ```bash
    sudo nginx -t
    ```

> [!NOTE]
> If the output shows:
> ```
> nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
> nginx: configuration file /etc/nginx/nginx.conf test is successful
> ```
> you can proceed to the next step.

1. Restart NGINX to apply changes: 
    ```bash
    sudo systemctl restart nginx
    ```

### PHP-FPM Setup
1. Check the PHP-FPM version: 
    ```bash
    ps aux | grep php-fpm
    ```

2. Open the PHP-FPM configuration file: 
    ```bash
    sudo nano /etc/php/<version>/fpm/php.ini
    ```
> [!NOTE]
> Replace `<version>` according to your php-fpm version. <br>
> Example: `sudo nano /etc/php/8.3/fpm/php.ini`

3. Find and update the following settings: 
    ```ini
    post_max_size = 100M
    ```

    ```ini
    upload_max_filesize = 100M
    ```

4. Restart PHP-FPM to apply the changes:
    ```bash
    sudo systemctl restart php<version>-fpm
    ```
> [!NOTE]
> Replace `<version>` according to your php-fpm version. <br>
> Example `sudo systemctl restart php8.3-fpm`

## Analysis
<a href="https://www.ssllabs.com/ssltest/analyze.html?d=pocketfi.dev" target="_blank">
  <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Telegram-Animated-Emojis/main/Objects/Locked%20With%20Key.webp" alt="Locked With Key" width="25" height="25"/>SSL Labs Report
</a>
<br>
<a href="https://pagespeed.web.dev/analysis/https-pocketfi-dev/9f8256vqc9?form_factor=desktop" target="_blank">
  <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Telegram-Animated-Emojis/main/Objects/Bar%20Chart.webp" alt="Bar Chart" width="25" height="25"/>Google PageSpeed Insights
</a>
<br>
<a href="https://stats.uptimerobot.com/pocketfi" target="_blank">
  <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Telegram-Animated-Emojis/main/Objects/Chart%20Increasing.webp" alt="Chart Increasing" width="25" height="25"/>UptimeRobot
</a>
<br>

## Contact
For any inquiries or issues, please contact at <a href="mailto:faiz.kurnicloud@gmail.com" target="_blank">Faiz Kurniawan<img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Telegram-Animated-Emojis/main/Objects/Inbox%20Tray.webp" alt="Inbox Tray" width="25" height="25"/></a>
