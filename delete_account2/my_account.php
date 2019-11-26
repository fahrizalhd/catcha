<?php
    include 'connect.php';
    session_start();
    $id = 3;
    $sql_read = "SELECT * FROM user WHERE id = $id";
    $read = mysqli_query($conn, $sql_read);
    $d = mysqli_fetch_array($read);

?>

<html>
    <head>
        <title> catcha </title>
        <link rel="stylesheet" type="text/css" href="my_account.css">
        <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
    </head>

    <body>
        <div class="topnav">
            <div class="topnav_logo">
                <img class="img_logo"src="https://i.ibb.co/WPqGJmn/catcha.png">
            </div>

             <div class="topnav_menu">
                <a href="#home">Home</a>
                <a href="#aboutus">About Us</a>
                <a href="#faq">FAQ</a>
            </div> 

            <div class="topnav_account">
                <div class="ava_acc">
                    <img class="ava_acc" src="https://i.ibb.co/3zphwx4/acc.png">
                </div>
                <div class="dropdownuser">
                    <button class="userbutton"><?= $d['nama']?> </button>
                    <div class="dropdown-content">
                        <a href="#">My Account</a>
                        <a href="#" class="signout">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="avatar_change">
                <img class="ava_account" src="https://i.ibb.co/3zphwx4/acc.png">
            </div>

            <div class="acc_detail">
                <form action="update.php" method="post">
                    <ul class="form_wrapper">
                        <li class="form_row">
                            <label> Nama </label> 
                            ini kan ada variable nama &d['name']
                            <input type="text" name="nama" value="<?= $d['nama']?>" onfocus="this.value=''">  
                        </li>
                        
                        <li class="form_row">
                            <label> Username </label> 
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="text" name="username" value="<?= $d['username']?>" onfocus="this.value=''">   
                        </li>    
                        
                        <li class="form_row">     
                            <label> E-mail </label> 
                            <input type="text" name="email" value="<?= $d['email']?>" onfocus="this.value=''">  
                        </li>

                        <li class="form_row">
                            <label> Password </label> 
                            <input type="password" name="password" placeholder="Password" required>   
                        </li>

                        <li class="form_row">
                            <input type="submit" name="update_btn" class="update_btn" value="Save">
                        </li>    

                        <li class="form_row">
                        <a href="delete_acc.php"> Delete </a>
                         </li>    
                        
                    </ul>          
                </form>
                
            </div>
        </div>
    </body>
</html>