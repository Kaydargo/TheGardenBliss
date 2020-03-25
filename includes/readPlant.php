<?php
require_once("database.php");
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM plant WHERE plantName like '" . $_POST["keyword"] . "%' ORDER BY plantName LIMIT 0,6";
$statement = $conn->prepare($query);
$result = $statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
if(!empty($result)) {
?>
<ul id="plant-list">
<?php
foreach($result as $plant) {
?>
<li onClick="selectPlant('<?php echo $plant["plantName"]; ?>');"><?php echo $plant["plantName"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>