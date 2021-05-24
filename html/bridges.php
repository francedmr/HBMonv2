<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once 'include/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
<head>
<meta charset="UTF-8">
<title>DMR Server monitor - STATUS</title>
<script type="text/javascript" src="scripts/hbmon.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.php" />
<meta name="description" content="Copyright (c) 2016-2021.The Regents of the K0USY Group. All rights reserved. Version SP2ONG 2019-2021 (v20210515)" />
</head>
<body style="background-color: #d0d0d0;font: 10pt arial, sans-serif;">
<center><div style="width:1250px; text-align: center; margin-top:5px;">
<img src="img/logo.png?random=323527528432525.24234" alt="" />
</div>
<div style="width: 1100px;">
<p style="text-align:center;"><span style="color:#000;font-size: 18px; font-weight:bold;"><?php echo REPORT_NAME;?></span></p>
<p style="text-align:center;"></p>
</div>
<div style="width: 1100px;">
<noscript>You must enable JavaScript</noscript>
		<p id="bridge"></p>  
	</div>
<div style="width: 1100px; margin-left:0px;">
<p style="text-align: center;"><span style="text-align: center;">
    Copyright (c) 2016-2021<br>The Regents of the <a href=http://k0usy.mystrikingly.com/>K0USY Group</a>. All rights reserved.<br><a href=https://github.com/sp2ong/HBMonv2>Version SP2ONG 2019-2021</a><br><br></span>
    <!-- THIS COPYRIGHT NOTICE MUST BE DISPLAYED AS A CONDITION OF THE LICENCE GRANT FOR THIS SOFTWARE. ALL DERIVATEIVES WORKS MUST CARRY THIS NOTICE -->
    <!-- This is version of HBMonitor SP2ONG 2019-2021 (v2021)-->
</p></div>
</center>
</body>
</html>
