#  Overview C500 Site & Features
 This is an interesting and useful landing page to promote and showcase the internal security guidelines and rules for intranet usage at PSA. I try to build the home page more beautiful, more convenient on  Wordpress 5.5 platform.
 I believe it will be better and better. If you are interested in this, you can join and enjoy it.



# Server Requirements 
* PHP version 5.6.20 or greater, PHP 7 is highly recommended
* Web Server: Apache or Nginx
* Database: MySQL version 5.0. 15 or greater or any    version of MariaDB.
* (Optional) (Required for Multisite) Apache mod_rewrite module (for clean URIs known as Permalinks)
***all of the above can be replaced with Xampp (https://www.apachefriends.org/download.html)***
* Disk Space: 1GB+
* RAM: 512MB+
* Processor: 1.0GHz+



# Install
## 1. Clone the source code or create new project in folder your web server.
```shell
git clone https://gitlab.com/ngoctoan/wific500-website.git
```

## 2. Import .SQL file into new database 
Create new database with 'database name'

Import file hvan.sql into database 

## 3. Set the basic config
Go to your root directory project

Open wp-config.php file

Replate 
```
define( 'DB_NAME', 'database_name' );
define( 'DB_USER', 'database username' );
define( 'DB_PASSWORD', 'database password' );
define( 'DB_HOST', 'MySQL hostname' );
```
## 4.Administration
1. Go to URL your site + '/wp-admin'

Example: http://192.168.1.20/hvan/wp-admin/

2. Enter username: shishi and password: @Vip113hb

3. 
* Go to 'Bảng tin' or 'Nội Quy' or 'Hướng Dẫn' to edit 
![ảnh 0](https://i.ibb.co/bRrM1c9/Selection-050.png)

* Edit image in every post of 'Bảng tin' , Nội Quy' or Hướng Dẫn'
![ảnh2](https://i.ibb.co/MPJq3rM/Selection-051.png)

* Customize text in HomePage: Go to Page->Trang chủ
![ảnh2](https://i.ibb.co/vZpWBdW/Selection-053.png)

* Replace the text you want
![ảnh 1](https://i.ibb.co/bJtT32P/Selection-054.png)

*Result 
![result](https://i.ibb.co/pz46PN3/screencapture-192-168-1-20-hvan-2020-11-05-19-01-33.png)

###### Thank you! ^^







