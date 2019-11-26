<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'katalog'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
	?>
<html>
    <head>
        <title>catcha</title>
        <link rel="stylesheet" type="text/css" href="main_menu.css">
        <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="main_menu.js"></script>    
    <style>
    
.topnav {
    display: flex;
    font-family: 'Questrial';
    font-size: 16px;
    height: 60px;
}
.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #5eb7b7;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
.cat {
    font-size: 20px;
    margin: 0 0 10px 15px;
    font-weight: bold;
}
.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #204969;
    display: block;
    transition: 0.3s;
    margin-top: 10px;
}
.sidebar_close_button {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 50px;
    margin-left: 50px;
}
.sidebar_open {
    width 10%;
    display: block;
    margin: auto;
}
.sidebar_open_button {
    cursor: pointer;
    color: #204969;
    font-size: 25px;
    margin-left: 25px;
}
.topnav_menu {
    width: 85%;
    padding-left: 2%;
}
.topnav_menu, .topnav_account {
    display: block;
    margin: auto;
}
.topnav_menu a {
    padding: 10px 15px;
    text-decoration: none;
    text-align: center;
    color: #204969;
}
.topnav_menu a:hover {
    color: #626568;
    background-color: #fdfdfd;
    border-radius: 8px;
}
.topnav_account {
    width: 20%;
    display: flex;
}
.ava_acc {
    background-color: teal;
    border-radius: 50%;
    width: 40px;
    height: 40px;
}
.userbutton {
    background-color: transparent;
    color: 626568;
    padding: 5px;
    margin-left: 25px;
    font-size: 14px;
    border: none;
}
.dropdownuser {
    position: relative;
    display: inline-block;
    margin: auto 0;
}
.dropdown-content {
    display: none;
    position: absolute;
    font-size: 13px;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: #204969;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdownuser:hover .dropdown-content {display: block;}
.dropdownuser:hover .dropbtn {background-color: #3e8e41;}
.signout:hover {color: #c70d3a;}

.content {
}
}
    </style>
    </head>
    <body>
        <div class="topnav">
            <div class="sidebar" id="sidebar">
                <label class="cat"> Categories </label>
                <a href="javascript:void(0)" class="sidebar_close_button" onclick="sidebar_close()">&times;</a>
                <a href="#" class="sidebar_item">Retro</a>
                <a href="#" class="sidebar_item">Monochrome</a>
                <a href="#" class="sidebar_item">Party</a>
            </div>

            <div class="sidebar_open">
                    <span class="sidebar_open_button" onclick="sidebar_open()">&#9776;</span>
            </div>
            
            <div class="topnav_menu">
                <a href="home.php">Home</a>
                <a href="AboutUs.html">About Us</a>
                <a href="FAQ.html">FAQ</a>
            </div>

            <div class="topnav_account">
                <div class="ava_acc">

                </div>
                <div class="dropdownuser">
                    <button class="userbutton">Fahrizal Hanif Darmawan</button>
                    <div class="dropdown-content">
                        <a href="my_account.php">My Account</a>
                        <a href="welcome.php" class="signout">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card-deck">
            <?php
                $query = mysqli_query($conn, "SELECT * FROM fashion");

                while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="card" style="height:50%;">
                    <img src="<?php echo "file/".$row['gambar']?>" class="card-img-top" alt="..." style="height:250px">
    <div class="card-body">
      <h3 class="card-title"><?php echo $row['nama'];?></h3>
      <h5 class="card-title"><?php echo $row['pencipta'];?></h5>
      <p class="card-text"><?php echo $row['keterangan'];?></p>
     
      </div>

                    </div>
                <?php
                }
            ?>
            </div>
        </div>

<?php
    // $db=mysqli_connect("localhost","root","","katalog");
    // $sql = "SELECT * FROM fashion";
    // $result = mysqli_query($db, $sql);
    // while ($row = mysqli_fetch_array($result)) {
    //     echo "<div id='img_div'>";
           
    //         echo "<img src='file/".$row['gambar']."'>";   
    //         echo "<p>".$row['nama']."</p>";
    //         echo "<p>".$row['pencipta']."</p>";
    //         echo "<p>".$row['keterangan']."</p>"; 
    //     echo "</div>";
    // }
?>







    </body>
</html>