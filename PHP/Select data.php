<!DOCTYPE html>
<html>
<head>
<title>Display database data</title>
</head>
<body>
<table>
  <tr>
    <td align="center">EMPLOYEES DATA</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <tr>
        <td>NAME</td>
        <td>EMPLOYEES<br>NUMBER</td>
        <td>ADDRESS</td>
      </tr>
<?php

mysql_connect("localhost","root","");
mysql_select_db("employees");
				
$order = "SELECT * FROM data_employees ORDER BY name DESC";	

$result = mysql_query($order);	

while($data = mysql_fetch_row($result)){
  echo("<tr>
          <td>$data[1]</td>
          <td>$data[0]</td>
          <td>$data[2]</td>
      </tr>");
}
?>
    </table>
  </td>
</tr>
</table>
</body>
</html>
