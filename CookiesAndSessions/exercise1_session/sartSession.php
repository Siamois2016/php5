<?php

/* 
 * Session are  Used to store information about, or change settings for a user
session. Session variables hold information about one single
user, and are available to all pages in one application.
 MUST be set before the <html> tag.
 * By default, the session ID is passed from page to
page in the PHPSESSID cookie.
 * Arrays, objects can be stored in session variables.
 */
session_start();
$_SESSION['views']=1
        ?>
<html>
    <body>
        <?php echo "Pageviews=".$_SESSION['views'];
        //displays: PHPSESSID=fer22uuv1gep16ta12ln59pe43 in chrome,in all new tab
        // displays :Cookie: "PHPSESSID=77gbiqc3didhoghhkogcjof1i3" in mozilla
        ?>
    </body>
</html>

