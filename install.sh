sudo apt install apache2 -y
sudo apt install php8.3-cli -y
sudo apt-get install composer -y
composer install
sudo apt install mysql-server -y
sudo systemctl start mysql.service
sudo apt install adminer -y
sudo a2enconf adminer
sudo systemctl reload apache2