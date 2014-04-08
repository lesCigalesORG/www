<?php
exit(0);
function pr($var) {
	echo '<pre>', print_r($var, true), '</pre>';
}

$ports = array(25, 53, 110, 80);
pr("======================== TCP tests");
foreach ($ports as $port) {
	$rv = fsockopen('www.lescigales.org', $port, $errno, $errstr, 10);
	pr("TCP connection: connect to $port");
	pr("rv= $rv ($errno) $errstr");
	var_dump($rv);
}

pr("======================= UDP tests");
foreach ($ports as $port) {
	$rv = fsockopen('udp://www.lescigales.org', $port, $errno, $errstr, 10);
	pr("UDP connection: connect to $port");
// 	pr("rv= $rv ($errno) $errstr");
// 	var_dump($rv);
// 	pr("write...");
	$r = fwrite($rv, "test sur udp");
	pr("writing on UDP: ".var_dump($r));
}
	$rv = fsockopen('udp://ns.vnet.sk', 53, $errno, $errstr, 10);
	pr("UDP connection: connect to ns.vnet.sk $port");
// 	pr("rv= $rv ($errno) $errstr");
// 	var_dump($rv);
// 	pr("write...");
	$r = fwrite($rv, "test sur udp");
	pr("writing on UDP: ".var_dump($r));


pr("================= DNS tests");
$hosts = array('www.lescigales.org','www.lemonde.fr', 'www.e3b.org');
foreach ($hosts as $host) {
	$rv = gethostbyname($host);
	pr("$host -> $rv");
}

$rv = mysql_connect('localhost', 'aaa_super', 'ouquah3');
var_dump($rv);
pr(mysql_error());

system("id");