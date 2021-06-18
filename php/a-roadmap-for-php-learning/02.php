<?php
// set up document
include_once 'database.php';
include_once 'header.php';
// get data
$query = "SELECT * FROM cupcakes ORDER BY :sort ASC";
$statement = $database->prepare($query);
$parameters = ['sort' => $_GET['sort']];
$statement->execute($parameters);
$cupcakesArray = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- deal with html in html-land -->
<h1>My Cupcakes</h1>
<table class="cupcake-table">
<?php foreach($cupcakesArray as $cupcake) { ?>
<tr>
  <td class="col-flavour"><?php echo $row['flavour'] ?></td>
  <td class="col-desc"><?php echo $row['description'] ?></td>
  <td class="col-price"><?php echo $row['price'] ?></td>
</tr>
<?php } ?>
</table>
<?php include_once 'footer.php' ?>