<?php

    if(isset($_GET['deleteid'])){
        
        $id=$_GET['deleteid'];

        $con = mysqli_connect("localhost", "matt", "matt", "crudoperation");
        $query = "delete FROM crud where id=$id";   
        $res = mysqli_query($con, $query, MYSQLI_USE_RESULT);

        if ($res) header('location:display.php');

    };

?>