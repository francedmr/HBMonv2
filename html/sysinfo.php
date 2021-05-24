<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once 'include/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="300">
<title>DMR Server monitor - System Info</title>
<script type="text/javascript" src="scripts/hbmon.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.php" />
<meta name="description" content="Copyright (c) 2016-2021.The Regents of the K0USY Group. All rights reserved. Version SP2ONG 2019-2021 (v2021)" />
</head>
<body style="background-color: #d0d0d0;font: 10pt arial, sans-serif;">
<center><div style="width:1250px; text-align: center; margin-top:5px;">
<img src="img/logo.png?random=323527528432525.24234" alt="" />
</div>
<div style="width: 1100px;">
<p style="text-align:center;"><span style="color:#000;font-size: 18px; font-weight:bold;"><?php echo REPORT_NAME;?></span></p>
<p></p>
</div>
<?php include_once 'buttons.html'; ?>
<div style="width: 1100px;">
<noscript>You must enable JavaScript</noscript>
    <p id="sinfo"></p>
</div>
<fieldset style="background-color:#e0e0e0;display:inline-block;margin-left:20px;margin-right:20px;font-size:14px;border-top-left-radius: 10px; border-top-right-radius: 10px;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
<legend><b><font color="#000">&nbsp;.: System Info :.&nbsp;</font></b></legend>
<center>
<!-- Temp CPU -->
<p><img alt="" src="img/tempC.png" /><p>
<!-- Disk usage -->
<p><img alt="" src="img/hdd.png" /><p>
<!-- Memory usage -->
<p><img alt="" src="img/mem.png" /><p>
<!-- CPU loads -->
<p><img alt="" src="img/cpu.png" /><p>
<!-- Network traffic -->
<p><img alt="" src="img/mrtg/localhost_2-day.png" /><p>
</p></center>
<font color=blue><b>BLUE</b></font> Outgoing Traffic in Bits per Second | <font color=green><b>GREEN</b></font> Incoming Traffic in Bits per Second
</br>
</fieldset>
<br>
<p style="text-align: center;"><span style="text-align: center;">
Copyright (c) 2016-2021<br>The Regents of the <a href=http://k0usy.mystrikingly.com/>K0USY Group</a>. All rights reserved.<br><a href=https://github.com/sp2ong/HBMonv2>Version SP2ONG 2019-2021</a><br><br></span>
    <!-- THIS COPYRIGHT NOTICE MUST BE DISPLAYED AS A CONDITION OF THE LICENCE GRANT FOR THIS SOFTWARE. ALL DERIVATEIVES WORKS MUST CARRY THIS NOTICE -->
    <!-- This is version of HBMonitor SP2ONG 2019-2021 (v2021) -->
</p>
</center>
</body>
</html>
