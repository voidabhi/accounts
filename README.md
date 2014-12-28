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

<a href="https://plus.google.com/104070882148677917719/about">
  <img alt="Follow me on Google+"
       src="http://data.pkmmte.com/temp/social_google_plus_logo.png" />
</a>

Contribute
========

Feel free to send a pull request to add new features!

License
=======

The MIT License (MIT)

Copyright (c) 2014 Abhijeet Mohan - https://github.com/voidabhi/pymail

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

