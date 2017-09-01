<?php

print_r($_SERVER);


if (isSecure())
{
    echo "The web page is HTTPS";
}
else
{
    echo "The web page is HTTP only.";
}


function isSecure() {
  return
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 1443;
}


