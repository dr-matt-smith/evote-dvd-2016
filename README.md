# evote-dvd-2016
===========================

About
-------------------------------------------------------
In this version we have move all content files into directory `/templates`

a **front controller** has been added, so we have a single public file `public/index.php`

This front controller looks for a GET parameter `action`, and if found uses that value to decide which template to display:

    switch ($action){
        case 'about':
            require_once __DIR__ . '/../templates/about.php';
            break;
        case 'contact':
            require_once __DIR__ . '/../templates/contact.php';
            break;
        case 'list':
            require_once __DIR__ . '/../templates/list.php';
            break;
        case 'sitemap':
            require_once __DIR__ . '/../templates/sitemap.php';
            break;
        case 'index':
        default:
            // default is home page ('index' action)
            require_once __DIR__ . '/../templates/index.php';
    }
    
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
