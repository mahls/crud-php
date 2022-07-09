
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>CRUD PHP </title>
</head>
<body>

<?php include 'nav.php';?>

    <section class="displaysection">

        <button class="displaybutton"
        onClick="document.location.href='/user.php'"
        > Add Entry </button>

            <table class="displaytable" id="tableid">

                <tr class="table-tr-head">
                    <td class="display-td-head">SI no</td>
                    <td class="display-td-head">Name</td>
                    <td class="display-td-head">Email</td>
                    <td class="display-td-head">Mobile</td>
                    <td class="display-td-head">Password</td>
                    <td class="display-td-head">Operations</td>
                </tr>

                <?php 

                    $con = mysqli_connect("localhost", "matt", "matt", "crudoperation");
                    $query = "SELECT * FROM crud";   
                    $res = mysqli_query($con, $query, MYSQLI_USE_RESULT);
                    
                    if ($res) {
                        while ($row = mysqli_fetch_row($res)) {
                           
                            $id=$row[0];
                            $name=$row[1];
                            $email=$row[2];
                            $mobile=$row[3];
                            $password=$row[4];
                        
                            $data =
                                '<tr class="table-tr-appnd">
                                    <td class="display-td-appnd">'.$id.'</td>
                                    <td class="display-td-appnd">'.$name.'</td>
                                    <td class="display-td-appnd">'.$email.'</td>
                                    <td class="display-td-appnd">'.$mobile.'</td>
                                    <td class="display-td-appnd">'.$password.'</td>                                  
                                    <td class="display-td-appnd appndbtns">
                                    <a id="opUparam" href="/update.php?updateid='.$id.'"><button class="opbtns opU">&#128295;</button></a>
                                    <a id="opXparam" href="/delete.php?deleteid='.$id.'"><button class="opbtns opX">&#10006;</button></a>
                                    </td>
                                </tr>';

                            echo($data);

                        };

                    };

                    mysqli_close($con);

                ?>

            </table> 

    </section>

</body>
</html>




                            <!-- echo"
                                <script language='javascript'>
                                    let anchor = document.getElementsById('opUparam');
                                    anchor.setAttribute('href', /update.php + ?updateid='.$id.')
                                </script>
                            "; -->