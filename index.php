<?php

include "lib.php";
$nl = nl();
init_html();

ascii_logo();

echo "Welcome !$nl";
echo "Look at list.php if you want the list of the people on this registry.$nl";
echo "To add your link: curl http://". gethostname() ."/add.php -F'name=Here is your name' -F'url=Here is the address of your twtxt'$nl";
echo "You can search users using curl \"http://". gethostname() ."/list.php?q=NAME\"$nl";
echo "You can parse users's twtxt using curl \"http://". gethostname() ."/parse.php?q=NAME\"$nl";
echo "If you want to see the ugly HTML instead of this text, change your user agent.$nl";

end_html();