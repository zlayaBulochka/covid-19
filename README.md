# project

 (https://app.buddy.works/mariann09012000/covid-19/pipelines/pipeline/263387/trigger-webhook?token=1002c2ac5ed82ba00029f8115165cc1cead1bf65ba34ac6359041558ec5f8f25c06b6c9d76e11fc1f0268d8e4985697f)
  ---
### Последние изменения ###

[Release](https://github.com/zlayaBulochka/covid-19/releases)

  ---

### Установка на Ubuntu ###
* Установить Lamp 
>sudo apt update
>sudo apt upgrade

Установка apache2

>sudo apt install apache2 

Установка mysql

>sudo apt install mysql-server

>sudo apt install php libapache2-mod-php php-mysql

перезапуск apache2

>sudo systemctl restart apache2

* Установка phpMyAdmin
>sudo apt-get install phpmyadmin php-mbstring php-gettext

>sudo phpenmod mcrypt

>sudo phpenmod mbstring

>sudo systemctl restart apache2

* Cоздание пользователя Mysql
>mysql

>CREATE USER 'User'@'localhost' IDENTIFIED BY '123456789';

Установка всех прав на полный доступ

>GRANT ALL PRIVILEGES ON * . * TO 'non-root'@'localhost';

>FLUSH PRIVILEGES;

* Импортировать базу данных из дампа
[Album](https://github.com/zlayaBulochka/covid-19/pig.sql)

* Установить git
>sudo apt install git

* Установит Composer 
>udo apt install curl php-cli php-mbstring git unzip

>cd ~

>sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

* Клонирование репозитория

 В папке, в которой хотите расположить проект выполните команду
 
>git clone https://github.com/zlayaBulochka/covid-19.git

* Установить необходимые зависимости 
>composer install
