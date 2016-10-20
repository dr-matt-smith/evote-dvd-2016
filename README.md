# evote-dvd-2016
===========================

About
-------------------------------------------------------
In this version we have added a `.htaccess` file into directory `public`


file: `public/.htaccess`

    <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule (.+) index.php?action=$1 [QSA,L]
    </IfModule>

The rules in this file tell the Apache web server to assume that `index.php?action=` is at the beginning of every web request

This (which saves us having to add this to every link). So we can write `/` instead of `/index.php`, and `/list` instead of `/index.php?action=list`.

So our navigation list of links now looks like this

    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
    
            <li>
                <a href="/about">About Us</a>
            </li>
    
            <li>
                <a href="/list">DVD ratings</a>
            </li>
            
            etc.
    
todo
-------

* need to move away from having PHP in our templates - since we want to be able to safetly outsource the templates to a suitable marketing / graphic design sub-team, and not have any potential issues of them needing to, or accidently, working with live PHP scripts


Author
-------------------------------------------------------

Dr Matt Smith
<br>Senior Lecturer in Computing,
<br>Institute of Technology Blanchardstown,
<br>Dublin, 
<br>Ireland

* https://github.com/dr-matt-smith
* http://www.mattsmithdev.com
* http://gamesitb.ie/
* http://www.itb.ie
