WordPress Tattler
=========
A Simple Command-Line WordPress Version Checker.

This is a little tool I wrote to find compromised WordPress installs in a shared hosting environment. 

Written in PHP, to be run from an SSH session - no browser needed.

The lone file can be placed in your PATH somewhere, set executable (chmod ugo+rx wptattler.php, perhaps?), and then called simply by invoking its name in the base directory of a given WordPress install.

Example:
    [shieldbump@speakerwobble /usr/home/dubstepbacon/public_html/blog]$ wptattler.php
    
    WordPress Tattler 0.2.0, operating in /usr/home/dubstepbacon/public_html/blog
    These local WordPress files claim to contain: 3.5.1
    But the database shows a version number of: 3.5.1
    If these numbers do NOT match, this user is likely compromised. 
    Recommend: notify user to upgrade WordPress to latest version. 
    Link to latest version is always at: http://wordpress.org/latest.zip