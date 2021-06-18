<?php
include_once 'database.php';
include_once 'header.php';
$sort = mysql_real_escape_string($_GET['sort']);
$result = mysql_query('SELECT * FROM cupcakes ORDER BY ' . $sort . ' ASC');
echo '<h1>My Cupcakes</h1>';
echo '<table id="cupcake-table">';
echo '<tr>';
echo '<th><a href="?sort=flavour">Flavour</a></th>';
echo '<th>Description</tr>';
echo '<th><a href="?sort=price">Price</a>';
echo '</tr>';
while($row = mysql_fetch_assoc($result)){
  echo '<tr>';
  echo '<td class="col_flavour">' + $row['flavour'] + '</td>';
  echo '<td class="col_desc">' + $row['description'] + '</td>';
  echo '<td class="col_price">' + $row['price'] + '</td>';
  echo '</tr>';
}
echo '</table>';
include_once 'footer.php';
?>