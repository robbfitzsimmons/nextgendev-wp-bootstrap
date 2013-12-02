<?php
2
header("HTTP/1.1 301 Moved Permanently");
3
header("Location: ".get_bloginfo('url'));
4
exit();
5
?>