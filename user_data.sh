#!/bin/bash
sudo yum update -y
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
sudo yum install -y httpd mariadb-server git
sudo systemctl start httpd
sudo systemctl enable httpd
sudo echo SetEnv DB_HOST ${module.rds.rds_endpoint} >> /tmp/env.conf
sudo echo SetEnv DB_NAME ${var.db_name} >> /tmp/env.conf
sudo echo SetEnv DB_USERNAME ${var.db_username} >> /tmp/env.conf
sudo echo SetEnv DB_PASSWORD ${var.db_password} >> /tmp/env.conf
sudo mv /tmp/env.conf /etc/httpd/conf.d/env.conf
git clone https://github.com/vipin0/php-db-connection.git /tmp/code
sudo mv /tmp/code/*  /var/www/html
sudo systemctl restart httpd
