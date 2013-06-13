<?php
/**
** Make your App first: https://dev.twitter.com/apps/new
** Lib: https://github.com/mynetx/codebird-php
** @author Aphichat Panjamanee
** @version 0.5
*/
//include lib
require('lib/codebird.php');
$cb = \Codebird\Codebird::getInstance();
//init keys, is this a good place?
\Codebird\Codebird::setConsumerKey('YOURKEY', 'YOURSECRET');
$cb->setToken('YOURTOKEN', 'YOURTOKENSECRET');
//json output
$cb->setReturnFormat(CODEBIRD_RETURNFORMAT_JSON);
//cridentials
$params = array(
  'screen_name' => $_POST['screen_name'],
  'count' => $_POST['count']
);
//fetch
$data = $cb->statuses_userTimeline($params);
//data return
echo($data);