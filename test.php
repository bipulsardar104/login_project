<?php

$pwd = '12346';
$hashed_pwd = '$2y$10$h3HlGp9.CJEyrQ0h.2aqz.zn9Fr5UnBq18q.aHNCvR0tDnen.SRJu';
$bool = password_verify($pwd, $hashed_pwd);
 echo $bool ?'true':'false';



