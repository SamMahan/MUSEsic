<!DOCTYPE html>
<html>
<?php
$successArray=array();
$populateArray=array();
if ($_POST == null){
    echo "has-warning";
}else echo "has-success";
if ($_POST != null){
    foreach($_POST as $value){
        
        if($value===""){
            array_push($successArray, "has-warning");
        }
        
        elseif($value != ""){
            array_push($successArray, "has-success");
            array_push($populateArray, "value=".$value);
   
        }
}
}
if($_POST["login-email"]!=null || $_POST["login-password"] !=null){
    $modal = "data-modalpost = 'active'";
}
?>



<!-- Created by Samuel Mahan
9/20/17
registration page -->
<head>
    <link href="bootswatch.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../../assets/js/navbar.js"></script>
    <script src="../../assets/js/modals.js"></script>
    
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand " href="#">MUSEsic</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="modal" data-target="#login" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

    </div>

    <div class="container">
        <div class="row">
            <div class="jumbotron col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Get musing</h2>
                <h3>amazing music for your amusement</h3>
            </div>
            <div class="col-lg-6">
                <h3>Lorem ipsum dolor sit amet</h3>
            </div>
            <div class="well col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form type="text" method="post" action="registration.php">
                    <fieldset>
                        <?php echo "<div class='col-lg-12 ". $successArray[0]."'>"?>
                            <label for="first_name">First Name</label>
                            <?php echo "<input id='first_name' class='form-control' name='first_name' type='text'".$populateArray[0]."/>"?>
                        </div>
                         <?php echo "<div class='col-lg-12 ". $successArray[1]."'>"?>
                            <label for="last_name">Last Name</label>
                           <?php echo '<input id="last_name" class="form-control" name="last_name" type="text"'.$populateArray[1]."/>"?>
                        </div>
                         <?php echo "<div class='col-lg-12 ". $successArray[2]."'>"?>
                            <label for="email">Email</label>
                           <?php echo '<input id="email" class="form-control" name="email" type="text"'.$populateArray[2]."/>"?>
                        </div>
                         <?php echo "<div class='col-lg-12 ". $successArray[3]."'>"?>
                            <label for="password">Password</label>
                            <?php echo'<input id="password" class="form-control" name="password" type="password"'.$populateArray[3]."/>"?>
                        </div>
                         <?php echo "<div class='col-lg-12 ". $successArray[4]."'>"?>
                            <label for="confirm_password">Confirm Password</label>
                            <?php echo'<input id="confirm_password" class="form-control" name="confirm_password" type="password"'.$populateArray[4]."/>"?>
                        </div>

                    </fieldset>
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                        <button type="submit" type="button" class="btn btn-primary">submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="modal"<?php echo $modal?> id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Welcome back!</h4>
                </div>
                <div class="modal-body">
                    <form type = "text" method="post" action="registration.php">
                        <fieldset>
                            <?php echo "<div class='col-lg-12 ". $successArray[0]."'>"?>
                                <label for="login-email">email</label>
                                <?php echo'<input id="login-email" class="form-control" name="login-email" type="text"'.$populateArray[0].' />' ?>
                            </div>
                            <?php echo "<div class='col-lg-12 ". $successArray[1]."'>"?>
                                <label for="login-password">Password</label>
                                <?php echo'<input id="login-password" class="form-control" name="login-password" type="password"'.$populateArray[1].' />' ?>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Login</button>
                        
                         </form>
                         <a href ="../User/profile.html"><button >temp login access</button></a>                </div>

                <div class="modal-footer">
                    

                </div>
               
            </div>
        </div>

</body>

</html>
