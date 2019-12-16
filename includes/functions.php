<?php 
require_once('includes/database.php');

//Display vegetable images in slider
    $queryVeg = "SELECT * FROM plant WHERE type='Vegetable' LIMIT 4"; 
    $statement1 = $conn->prepare($queryVeg);
    $statement1->execute();
    $vegetables = $statement1->fetchAll();
    $statement1->closeCursor();
    
    
    
    $queryVeg1 = "SELECT * FROM plant WHERE type='vegetable' LIMIT 4,8"; 
    $statement2 = $conn->prepare($queryVeg1);
    $statement2->execute();
    $vegetables1 = $statement2->fetchAll();
    $statement2->closeCursor();

//Display fruit images in slider

$queryFruit = "SELECT * FROM plant WHERE type='fruit' LIMIT 4"; 
$statement3 = $conn->prepare($queryFruit);
$statement3->execute();
$fruits = $statement3->fetchAll();
$statement3->closeCursor();

 $queryFruits1 = "SELECT * FROM plant WHERE type='fruit' LIMIT 4,8"; 
$statement4 = $conn->prepare($queryFruits1);
$statement4->execute();
$fruits1 = $statement4->fetchAll();
$statement4->closeCursor();


//Display room flower in slider

$queryFlower = "SELECT * FROM plant WHERE type='flower' LIMIT 4"; 
$statement5 = $conn->prepare($queryFlower);
$statement5->execute();
$flowers = $statement5->fetchAll();
$statement5->closeCursor();

$queryFlower1 = "SELECT * FROM plant WHERE type='flower' LIMIT 4,8"; 
$statement6 = $conn->prepare($queryFlower1);
$statement6->execute();
$flowers1 = $statement6->fetchAll();
$statement6->closeCursor();