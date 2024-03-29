#!/usr/local/bin/php
<?php
        /* This is version 0.3.0 ('Highly Inappropriate') of
         *  Justin's WP Tattler.
         * Usage: Place file in your PATH, or in a folder that is then added to PATH.
				  From a terminal, go to a directory that contains wp-config.php
				  Run THIS file (wptattler.php or whatever you have renamed it to).
				  Output will be to the same terminal in easy to read text.
         */

        /*
            Revision Notes:
                0.0.1 - Initial version. Easiest to read in a browser.
                0.0.2 - Stripped the browser stuff. PHP works from cmdline.
                0.0.3 - Added a shebang to increase the lazy.
                0.1.0 - Here, have a license. BSD in the hizzy fa rizzy.
                0.1.1 - Minor edits.
				0.2.0 - Clean-up of file, updated instructions added. First commit to external versioning system (git).
				0.2.6 - Along with minor edits, moving to WTFPL licensing.
				0.3.0 - Added the ability to pull the admin email.
         */
		 
		/*
			Pesky 'Copyright' data:
			Copyright � 2013 Justin Hobley <j.hobley@unchain.us>
			This work is free. You can redistribute it and/or modify it under the
			terms of the Do What The Fuck You Want To Public License, Version 2,
			as published by Sam Hocevar. See the COPYING.WTFPL file for more details.
		*/
		 
		/* TO DO:
				* Learn a little more PHP to compare the $wp_version and bloginfo('version') numbers on the back end.
				* Use the comparison to offer a download of the latest WordPress.zip/tgz file if versions do not match.
				* Guess username based on the output of echo cwd();, or consider pulling the admin's email address from the DB.
				* Display this information to the script user, to hopefully make it easier to reach out to a compromised user.
				* Request a pony.
		 */

         // Open the gates.
         require_once getcwd() . '/wp-config.php';
         require getcwd() . '/wp-includes/version.php';
         $tattler_version = "0.3.0"
?>
WordPress Tattler <?php echo($tattler_version); ?>, operating in <?php echo getcwd(); ?>

These local WordPress files claim to contain: <?php echo($wp_version);?>

But the database shows a version number of: <?php bloginfo('version'); ?>

This blog's owner probably uses this email address: <?php bloginfo('admin_email'); ?>

If these numbers do NOT match, this user is likely compromised. 
Link to latest version is always at: http://wordpress.org/latest.zip


<?php
        exit(0);
?>