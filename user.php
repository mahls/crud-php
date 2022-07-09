<?php    
    include 'connect.php';

    if(isset($_POST['submit']))
    {   
        echo('testing');

        var_dump($sql);

        $name      =   $_POST['name'];   $email     =   $_POST['email'];
        $mobile    =   $_POST['mobile']; $password  =   $_POST['password'];

        $sql="insert into 'crud' (name,email,mobile,password) values('$name', '$email', $mobile,'$password')";
        $result=mysqli_query($conn,$sql);

        if($result){ echo "Data inserted successfully";} 
        else { die(mysqli_error($conn));}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>CRUD PHP</title>

    <style>
        .title{
            display: flex;
            color: white;
            justify-content: center;
            margin-top: 50px;
        }

        .titlename p{
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

    </style>


</head>
<body>
    <?php include 'nav.php';?>

    <div class="title">
        <div class="titlename">
            <p>Add Entry</p>
        </div>
    </div>


    <div class="formsection">
        <form class=formtag method="post" action="user.php">
           
            <div class=labelinputcontainer>        
                <div class="formlabels">
                    <div class="labelname     labeltag"> <label for="name"     >Name</label>        </div>
                    <div class="labelemail    labeltag"> <label for="email"    >Email</label>       </div>
                    <div class="labelmobile   labeltag"> <label for="mobile"   >Mobile</label>      </div>
                    <div class="labelpassword labeltag"> <label for="password" >Password</label>    </div>
                </div>

                <div class="forminputs">
                    <div class="inputname     inputtag"> <input type="text"  name="name"    >  </div>
                    <div class="inputemail    inputtag"> <input type="text"  name="email"   >  </div>
                    <div class="inputmobile   inputtag"> <input type="text"  name="mobile"  >  </div>
                    <div class="inputpassword inputtag"> <input type="text"  name="password">  </div>
                </div>
            </div> 
            <div class="buttondiv"><input type="submit" name="submit" value="Submit"/></div>
        
        </form>
        <div class="gotodisplay">
            <div classname="buttonencapsulation">    <button onClick="document.location.href='/display.php'">Back</button></div>
        </div>
    </div>
</body>
</html>