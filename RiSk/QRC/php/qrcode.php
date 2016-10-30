<?php

require_once("libqrcode/phpqrcode.php");

if(isset($_REQUEST['str']))
{
	unlink("qrcodeimg/image.png");
	QRcode::png($_REQUEST['str'], "qrcodeimg/image.png");
}