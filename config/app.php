<?php
$GLOBALS['lpconfig']['site_name'] = 'Computer @nd Comity';
$GLOBALS['lpconfig']['site_domain'] = 'https://www.computercomity.com';

if(!on_sae())
{
    $GLOBALS['lpconfig']['mode'] = 'dev';
}
$GLOBALS['lpconfig']['buildeverytime'] = true;


