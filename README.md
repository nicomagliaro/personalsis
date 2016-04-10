personalsis
===========

Sistema de Gestion hecho en un Framework MVC y php

version 0.7.1

Installation's steps:

1) Enable Apache Mod-Rewrite

	a2enmod rewrite

2) Clone repo
	
	$ cd /var/www
	$ git clone https://github.com/nicomagliaro/personalsis.git

3) Add this entry to /etc/hosts
	
	127.0.0.1	portalicm.local

4) Paste this on apache vhost file
<<<<<<< HEAD
	
	<VirtualHost *:80>
    	DocumentRoot "/var/www/personalsis"
    	ServerName portalicm.local
		ServerAlias portalicm.local
    	ErrorLog "/var/log/apache2/mesa.local.local-error_log"
    	CustomLog "/var/log/apache2/mesa.local.local-access_log" common
		ServerAdmin localadmin@localhost.com
    	<Directory /var/www/portalsis>
        	Options all
        	AllowOverride All
    		Require all granted	
        </Directory>
	</VirtualHost>
=======
	-
	- <VirtualHost *:80>
	- DocumentRoot "/var/www/personalsis"
	- ServerName portalicm.local
	- ServerAlias portalicm.local
	- ErrorLog "/var/log/apache2/mesa.local.local-error_log"
	- CustomLog "/var/log/apache2/mesa.local.local-access_log" common
	- ServerAdmin localadmin@localhost.com
	- <Directory /var/www/portalsis>
	- Options all
	- AllowOverride All
	- Require all granted	
	- </Directory>
	- </VirtualHost>
>>>>>>> 33715e5385745c8cf070ac62e5346144a4aef857
