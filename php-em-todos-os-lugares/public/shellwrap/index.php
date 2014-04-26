<?php
require_once '../../vendor/autoload.php';

use MrRio\ShellWrap as sh;
/*

*/
echo sh::ls();

echo sh::grep('html', sh::curl('http://google.com', array(
    'location' => true
)));


sh::touch('file.html');

sh::rm('file.html');


sh::git('checkout', 'master');
sh::git('reset', array('hard' => true), 'HEAD');
sh::git('reset', '--hard', 'HEAD');
sh::git(array('reset', '--hard', 'HEAD'));

// date --date '2012-10-10 10:00:00'
echo sh::date(array(
    'date' => '2012-10-10 10:00:00'
));

// date -d '2012-10-10 10:00:00'
echo sh::date(array(
    'd' => '2012-10-10 10:00:00'
));