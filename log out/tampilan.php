<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Front </title>
        <link rel="stylesheet" type="text/css" href="template.css">
        <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body{
        background-image: url("ru.png"); 
	    background-size:cover;
        background-attachment: fixed;
    }
.topnav {
    display: flex;
    font-family: 'Questrial';
    font-size: 16px;
}
.topnav_logo {
    width: 10%;    
}
.img_logo {
    width: 125px;
    height: auto;
    display: block;
    margin: 10px auto;
    border-radius: 5px;
    box-shadow: 2px 2px 5px #e9e4e6;
}
.topnav_menu {
    width: 70%;
    padding-left: 2%;
    color: teal;
}
.topnav_useropt {
    width: 15%;
    
}
.topnav_menu, .topnav_useropt {
    display: block;
    margin: auto;
}
.topnav_menu a, .topnav_useropt a {
    padding: 10px 15px;
    text-decoration: none;
    text-align: center;
    color: #FF0000;
}
.topnav_useropt a.login {
    background-color: #00334e;
    color: #f4f6f6;
    border-radius: 8px;
    box-shadow: 2px 2px 5px #e9e4e6;
    font-weight: bold;
}
.topnav_menu a:hover, .topnav_useropt a:hover {
    padding: 7px 12px;
    border: 3px solid red;
    background-color: black;
    color: white;
    
}
.topnav_useropt a.login:hover {
    padding: 7px 12px;
    border: 3px solid #204969;
    background-color: #f4f6f6;
    color: #204969;
}
.content{
    background: blanchedalmond;
    width: 550px;
    margin: auto ;
    position: absolute;
    top: 0px; left: 0px; bottom: 100px; right: 0px;
    height: 170px;
}
    </style>
    </head>

    <body >
        <div class="true">
        </div>
        <div class="topnav">
            <div class="topnav_logo">
                <img class="img_logo"src="catcha.png">
            </div>

             <div class="topnav_menu">
                <a href="#home">Home</a>
                <a href="#aboutus">About Us</a>
                <a href="#faq">FAQ</a>
            </div> 

            <div class="topnav_useropt">
                <ul class="nav navbar-nav navbar-right">
                  <li data-toggle="modal" data-target="#mylogin"><a class="login" href="#">Login</a></li>
                  <li data-toggle="modal" data-target="#mysignup"><a href="#">Sign Up</a></li>
                </ul>
              </div> 
                           
              <div id="mylogin" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
              <form method="POST" action="login.php">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Login</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                  </form>
                </div>
                </div>
            </div>
            
            
                <div id="mysignup" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sign Up</h4>
                </div>

                <form action="signup.php" method="POST">
                <div class="modal-body">    
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="insertdata" class="btn btn-primary">Sign Up</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
                </div>
              </div>
            </div>

        <div class="content">
        <center>
        <div class="life">
        <h1>LIFE'S TO SHORT TO WEAR BORING CLOTHES</h1>
        <p>We'll Help You in Choosing Everyday Clothing Styles</p>
        </center>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>