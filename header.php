<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--480-->
	<title>Jason Worden | Resume</title>
	<meta name="apple-mobile-web-app-title" content="Jason W.">
	<link rel="shortcut icon" href="../img/jw-favicon.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="../img/jw-ios-icon.png"/>

	<!--[if lt IE 9]>
	<script src="../js/html5.js"></script>
	<![endif]-->
	<script src="../js/dist/head.load.min.js"></script>
	<script>
		//head.js('../js/dist/jquery-1.10.2.js','../js/dist/bootstrap.js');
		head.js('../js/dist/jquery-1.10.2.min.js','../js/dist/bootstrap.min.js');
	</script>
	<link href='../css/dist/bootstrap.css' rel='stylesheet' type='text/css'>
	<!--link href='../css/dist/bootstrap.min.css' rel='stylesheet' type='text/css'-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='../css/resume-alternating.css' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
function hide_email($email) {
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';

	$key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);

	for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];

	$script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';

	$script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';

	$script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';

	$script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")";

	$script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

	return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;
}
?>
