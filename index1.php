<?php
require "db.php";
if(!empty($_SESSION["id"]))
{
    $id = $_SESSION["id"];
    $query = "SELECT * FROM info WHERE id = '$id'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index1.css">
</head>
<body>
<!-- <span><a id="out" href="logout.php">Logout</a></span> -->    
<?php echo include("facts1.html");?>
<center><div id="parag"><p>WELCOME <?php echo $row["username"];?></p></div></center>

<div id="d">
    <b><p>
    A fact is a true data about one or more aspects of a circumstance. Standard reference works are often used to check facts. Scientific facts are verified by repeatable careful observation or measurement by experiments or other means.
    For example, "This sentence contains words." accurately describes a linguistic fact, and "The sun is a star" accurately describes an astronomical fact. Further, "Abraham Lincoln was the 16th President of the United States" and "Abraham Lincoln was assassinated" both accurately describe historical facts. Generally speaking, facts are independent of belief and of knowledge and opinion.
    Facts are different from inferences, theories, values, and objects.

    </p></b>
</div>
</body>
</html>