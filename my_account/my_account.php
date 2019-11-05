<?php
    include 'connect.php';
    $username = 'allisyajustine';
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    $d = mysqli_fetch_array($query)
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
                <img class="img_logo"src="catcha.png">
            </div>

             <div class="topnav_menu">
                <a href="#home">Home</a>
                <a href="#aboutus">About Us</a>
                <a href="#faq">FAQ</a>
            </div> 

            <div class="topnav_account">
                <div class="ava_acc">
                    <?= $d['avatar'] ?>
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
                <img class="ava_account" src="acc.png">
                <?= $d['avatar'] ?>
            </div>

            <div class="acc_detail">
                <form action="update.php" method="post">
                    <label> Nama </table> 
                    <input type="text" name="nama" value="<?= $d['nama']?>"> <br>
                             
                    <label> Username </table> 
                    <input type="text" name="username" value="<?= $d['username']?>"> <br>
                             
                    <label> E-mail </table> 
                    <input type="text" name="username" value="<?= $d['email']?>"> <br>
                             
                    <label> Password </table> 
                    <input type="password" name="username" value="<?= $d['password']?>"> <br> 
                             
                    <input type="button" name="update_button" class="update_button" value="Save">
                </form>
            </div>
        </div>
    </body>
</html>