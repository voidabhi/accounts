Accounts Manager
========

<a href="http://accounts-testing555.rhcloud.com/"><img src="https://github.com/voidabhi/accounts/blob/master/static/avatar.png" align="center" height="200"width="200" ></a>

Simple PHP Accounts Manager

Built with [Bootstrap](https://getbootstrap.com)

Deploy to XAMPP
===============
	
	1. Download zip,rename it accounts and place it in htdocs folder
	2. Update connections in helpers/dbHelpers.php
	3. Upload database from db folder to phpmyadmin
	4. Run the project from browser at http://localhost/accounts/

Deploy to Openshift
===============
	
    $ rhc create-app php-5.4 -a accounts
    $ rhc cartridge add mysql-5.5 -a accounts # update connections in helpers/dbHelpers.php
    $ rhc cartridge add phpmyadmin -a accounts # upload database from db folder
    $ (git add, git commit)
    $ git push origin master
    
Developed By
============

`Abhijeet Mohan` - `void.aby@gmail.com`

Contribute
========

Feel free to send a pull request to add new features!
