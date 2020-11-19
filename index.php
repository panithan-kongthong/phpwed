<html>
<head>
<title>ITF Lab</title>
<meta charset="utf-8">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'hololiveth.mysql.database.azure.com', 'panithan@hololiveth', 'folk_zaza2020', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><form method="post"> <input type="submit" name="button1" value="Button1"/> <input type="submit" name="button2"value="Button2"/></form></td>        
  </tr>
  <a href="form.html">add data</a>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
