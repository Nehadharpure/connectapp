
<html>
<head>

</head>



<body>
<?php

error_reporting(0);
//$servernameC = "10.140.0.2";
$servernameC = "104.198.41.250";
$usernameC = "root";
$passwordC = "root@123";
$dbnameC = "inventory";
$socket = "/cloudsql/a2rproject-148908:us-central1:myinstance";

$connC = new PDO("mysql:host=$servernameC;dbname=$dbnameC", $usernameC, $passwordC,$socket);
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
