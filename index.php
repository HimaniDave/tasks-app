<?php

include 'dbcon.php';
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'links.php';?>
    <title>Todo App!</title>
</head>

<body>
    <h1 class="my-2 text-center">Todo List!</h1>

    <?php
            if(isset($_POST['submit'])){   
            $task= $_POST['tasks'];


            $table= "SELECT * FROM `todo`";
            $tableQuery= mysqli_query($con,$table);

            $numOfRows= mysqli_num_rows($tableQuery);

            if($numOfRows >=0 ){

            $insertQuery= "INSERT INTO `todo` (`task`, `date`) VALUES ('$task', current_timestamp())";
            $res = mysqli_query($con,$insertQuery);
           
            }
        }
    ?>

    <form class="mx-2 my-4" action="" method="POST">
        <div class="main-container">
            <div class="mb-3">
                <input type="text" autocomplete="off" class="form-control input" required name="tasks">
            </div>


            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="submit" name="submit">Add your task</button>
            </div>
        </div>


        <?php 
         $table= "SELECT * FROM `todo`";
         $tableQuery= mysqli_query($con,$table);

         $numOfRows= mysqli_num_rows($tableQuery);


         $idTable="SELECT id FROM `todo`";
         $ids= mysqli_query($con,$idTable);





         while($row= mysqli_fetch_assoc($tableQuery)){

            if($numOfRows<=0){
                echo "Add more tasks!";
            }else{

            echo "<div class='task'>";
            echo "<h4>" .$row["task"] . "</h4>";
            echo "<div class='icon'>";
            echo "<a href='delete.php?id=$row[id];' class='link-a'><i class='fas fa-trash fa-2x'></i></a><br>";
            echo "</div>";
            echo "</div>";
            }
            }
     
?>
    </form>

</body>

</html>