<?php include "menu.php"; ?>
<h2>Customers</h2>
<table border="1">
  <tr>
    <th>Firstname</th><th>Lastname</th>
  </tr>
<?php
include "connection.php";
$myquery="SELECT firstname,lastname,streetaddress FROM customers";
$customers_data=$db->query($myquery);

foreach($customers_data as $row) {
  echo '<tr><td>'.$row['firstname'].'</td><td> '.$row['lastname'].'</td><td> '.$row['streetaddress'].'</td><tr/>';
}
?>
</table>
<?php include "footer.php"; ?>
