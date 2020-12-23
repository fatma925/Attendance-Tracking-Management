<h3> this is a subsystem of an HR system that can track the absence and presence of employees ..</h3>
<h4> to run this project you need : <h4><br>
1- set up XAMPP with the latest verion of PHP , <a href="https://www.apachefriends.org/xampp-files/7.2.34/xampp-windows-x64-7.2.34-0-VC15-installer.exe"> from here <a/><br>
2- open XAMPP and start (Apache and MYSQL) <br>
3- install composer <a href="https://getcomposer.org/">composer </a><br>
4- install laravel 8 by composer <br>
    open command prompt and write this command ( composer global require laravel/installer )<br>
5 go to <a href="http://localhost/phpmyadmin/"> phpmyadmin </a> and create a database call it "tracking" <br>
6- open a command prompt <br>
   
7- Change the current working directory to your local project.<br>
8- write this command to make database migration ( php artisan migrate )<br>
9- write the command  ( php artisan serve )<br>
10- copy the server name and open it into your chrome browser <br>
11- you are now in the login form , click the not registered link at the bottom <br>
12- to enter the system for the first time, you should go to your database after registering your data correctly and edit the groubID field of employees to 1 to be an admin and be able to accept other employees requests<br>
