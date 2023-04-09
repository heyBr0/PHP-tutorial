# PHP-tutorial

Installation Linux:
https://www.apachefriends.org/faq_linux.html

### Change the permissions to the installer
chmod 755 xampp-linux-*-installer.run
### Run the installer
sudo ./xampp-linux-*-installer.run

That's all. XAMPP is now installed below the /opt/lampp directory.

Port 8080

### Permission:

sudo chmod -R 777 /opt/lampp/htdocs/php-crash/

### Extention:

PHP -All-in-One PHP support 

### Projects Directory: 

htdocs

--------------------------------------------------------------------

### To start XAMPP simply call this command:
sudo /opt/lampp/lampp start

### Also, note that there is a graphical tool that you can use to manage your servers easily. You can start this tool with the following commands:

cd /opt/lampp

sudo ./manager-linux-x64.run

--------------------------------------------------------------------

### display errors:
##### etc/php.ini: display_errors:On
##### restart Apache Server
--------------------------------------------------------------------

### Permission for file upload in to the “uploads” folder (CLI into directory):

chmod 777 uploads

--------------------------------------------------------------------
### phpMyAdmin → database → create database

http://localhost/phpmyadmin/index.php?lang=en