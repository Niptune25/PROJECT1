#!/bin/bash
#Installing the files and Creating files
cd /var/www
sudo mkdir adminsweb.com Complaint.com
sudo mv /home/user/Downloads/Login.php /var/www/adminsweb.com
sudo mv /home/user/Downloads/complaint.php /var/www/Complaint.com
sudo mv /home/user/Downloads/complaint.txt /var/www/Complaint.com
sudo chmod 777 /var/www/Complaint.com/complaint.txt
#Creating vitual host
sudo mv /home/user/Downloads/adminsweb.com.conf /etc/apache2/sites-available
sudo mv /home/user/Downloads/Complaint.com.conf /etc/apache2/sites-available
sudo sh -c 'echo "127.0.0.1   adminsweb.com" >> hosts'
sudo sh -c 'echo "127.0.0.1   complaint.com" >> hosts'
#Enabling and restarting the websites
sudo a2ensite adminsweb.com.conf
sudo a2ensite complaint.com.conf
sudo systemctl reload apache2
#Website is ready!!
 



  
