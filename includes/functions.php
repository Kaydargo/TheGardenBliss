<?php 
require_once('includes/database.php');

//Display vegetable images in slider
    $queryVeg = "SELECT * FROM plant WHERE type='vegetable' LIMIT 3"; 
    $statement1 = $conn->prepare($queryVeg);
    $statement1->execute();
    $vegetables = $statement1->fetchAll();
    $statement1->closeCursor();
    
    
    
    $queryVeg1 = "SELECT * FROM plant WHERE type='vegetable' LIMIT 3,3"; 
    $statement2 = $conn->prepare($queryVeg1);
    $statement2->execute();
    $vegetables1 = $statement2->fetchAll();
    $statement2->closeCursor();

    $queryVeg2 = "SELECT * FROM plant WHERE type='vegetable' LIMIT 6,3"; 
    $statement3 = $conn->prepare($queryVeg2);
    $statement3->execute();
    $vegetables2 = $statement3->fetchAll();
    $statement3->closeCursor();

//Display fruit images in slider

$queryFruit = "SELECT * FROM plant WHERE type='fruit' LIMIT 3"; 
$statement3 = $conn->prepare($queryFruit);
$statement3->execute();
$fruits = $statement3->fetchAll();
$statement3->closeCursor();

 $queryFruits1 = "SELECT * FROM plant WHERE type='fruit' LIMIT 3,3"; 
$statement4 = $conn->prepare($queryFruits1);
$statement4->execute();
$fruits1 = $statement4->fetchAll();
$statement4->closeCursor();

$queryFruits2 = "SELECT * FROM plant WHERE type='fruit' LIMIT 6,3"; 
$statement4 = $conn->prepare($queryFruits2);
$statement4->execute();
$fruits2 = $statement4->fetchAll();
$statement4->closeCursor();


//Display room flower in slider

$queryFlower = "SELECT * FROM plant WHERE type='flower' LIMIT 3"; 
$statement5 = $conn->prepare($queryFlower);
$statement5->execute();
$flowers = $statement5->fetchAll();
$statement5->closeCursor();

$queryFlower1 = "SELECT * FROM plant WHERE type='flower' LIMIT 6,3"; 
$statement6 = $conn->prepare($queryFlower1);
$statement6->execute();
$flowers1 = $statement6->fetchAll();
$statement6->closeCursor();



$queryFlower2 = "SELECT * FROM plant WHERE type='flower' LIMIT 6,3"; 
$statement6 = $conn->prepare($queryFlower2);
$statement6->execute();
$flowers2 = $statement6->fetchAll();
$statement6->closeCursor();

//Display vegetable for garden planner
$queryVegGarden = "SELECT * FROM plant WHERE type='vegetable' LIMIT 4"; 
$statement7 = $conn->prepare($queryVegGarden);
$statement7->execute();
$vegGardens = $statement7->fetchAll();
$statement7->closeCursor();



$queryVegGarden1 = "SELECT * FROM plant WHERE type='vegetable' LIMIT 4,4"; 
$statement8 = $conn->prepare($queryVegGarden1);
$statement8->execute();
$vegGardens1 = $statement8->fetchAll();
$statement8->closeCursor();

$queryVegGarden2 = "SELECT * FROM plant WHERE type='vegetable' LIMIT 8,4"; 
$statement9 = $conn->prepare($queryVegGarden2);
$statement9->execute();
$vegGardens2 = $statement9->fetchAll();
$statement9->closeCursor();
