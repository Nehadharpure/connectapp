
<html>
<head>

</head>



<body>
<?php
$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
  
$connC = new PDO($dsn, $user, $password);
$connC->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
function get_user()
    {
		global $connC;
		$sql = "Select * from dim_user";
		$result = $connC->query($sql);
		return $result;
    }
	?>
<h1> App Engine Application connectivity with cloud sql </h1>

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
