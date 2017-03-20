<?php include "menu.php"; ?>
<h2>Delete customer?</h2>
<?php
include "connection.php";
$sql="SELECT * FROM customers WHERE id_customers=".$_GET['id'];
$result=$db->query($sql);
$theArray = $result->fetch(PDO::FETCH_ASSOC);
$fn=$theArray['firstname'];
$ln=$theArray['lastname'];
$st=$theArray['streetaddress'];
 ?>
 <form class="" action="customer.php" method="post">
 <label for="fn">Firstname</label><br>
 <input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" disabled=""sabled><br>

 <label for="ln">Lastname</label><br>
 <input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" disabled=""><br>

 <label for="ad">Streetaddresst</label><br>
 <input type="text" name="ad" id="ad" value="<?php echo $st; ?>" disabled=""><br>

<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<br>
<label for="">Do you really wan to delete this customer?</label><br>
 <input type="submit" name="btnDelete" value="Delete">
 <a href="customer.php"><button type="button" name="button">Cancel</button></a>
 </form>
<?php include "footer.php"; ?>
