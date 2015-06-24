# Test blog
Test task for sibers.

environment:
-- phpMyAdmin SQL Dump

-- version 4.0.10deb1
--
-- Хост: localhost

-- Время создания: Июн 23 2015 г., 14:05

-- Версия сервера: 5.5.43-0ubuntu0.14.04.1

-- Версия PHP: 5.5.9-1ubuntu4.9

Настройки: 

  путь до файла с настройками к бд:/application/models/DB_connect.php
  
  насторойки виртульного хоста:
  
          <VirtualHost *:80>
        	ServerName test.local
        	DocumentRoot /var/www/html/test-blog/
        
        	<Directory /var/www/html/test-blog/>
        	    Options Indexes FollowSymLinks MultiViews
        	    AllowOverride All
        	    Order Allow,Deny
        	    Allow from all
        	</Directory>
        </VirtualHost>
