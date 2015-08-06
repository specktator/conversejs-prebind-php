<?php 

include 'xmpp-prebind-php/lib/XmppPrebind.php';
include 'config.php';
$xmppPrebind = new XmppPrebind($server, $boshUrl, 'conversejs', false, false);
$xmppPrebind->connect($username, $password);
$xmppPrebind->auth();
$sessionInfo = $xmppPrebind->getSessionInfo(); // array containing sid, rid and jid
header('Content-Type: application/json');
echo json_encode($sessionInfo);
 ?>