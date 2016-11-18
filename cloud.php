<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>



<body>
<?php

error_reporting(0);
//$servernameC = "10.140.0.2";
$servernameC = "104.198.41.250";
$usernameC = "root";
$passwordC = "root@123";
$dbnameC = "inventory";

$connC = new PDO("mysql:host=$servernameC;dbname=$dbnameC", $usernameC, $passwordC);
$connC->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
function get_user()
    {
		global $connC;
		$sql = "Select * from dim_user";
		$result = $connC->query($sql);
		return $result;
    }
	?>
<h1> Application connectivity with cloud sql </h1>

<table width="200" border="1">
  <tr>
    <th>Sr</th>
    <th>User ID</th>
    <th>User Type</th>
  </tr>
  <?php 
  $getuser = get_user();
  $i=1;
  while($showuser = $getuser->fetch())
  {?>
<tr>
    <td><?php echo $i++;?></td>
    <td>&nbsp;<?php echo $showuser['User_ID'];?></td>
    <td>&nbsp;<?php echo $showuser['Users_Type'];?></td>
  </tr>
 <?php } ?>
</table>

</body>
</html>