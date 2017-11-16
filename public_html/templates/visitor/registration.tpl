<!DOCTYPE html>
<html>
    <!-- Created by Samuel Mahan
9/20/17
registration page -->
<head>
  

    {$smarty.const.RESOURCES}
    
</head>

<body class = "visitor">
   {include file = "componants/navbar.tpl"}
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
                <h3>easy to use, one-stop source for your entertainment</h3>
            </div>
            <div class="well col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form id = "user-registration" class ="user_form user_registration" type="text" method="post" action="registration.php">
                    <fieldset>
                        <div class='col-lg-12 . {$successArray[0]}'>
                            <label for="first_name">First Name</label>
                            <input  id='first_name' class='required form-control' name='first_name' type='text' {$populateArray[0]} />
                        </div>
                         <div class='required col-lg-12 {$successArray[1]}'>
                            <label for="last_name">Last Name</label>
                            <input  id="last_name" class="required form-control" name="last_name" type="text" {$populateArray[1]} />
                        </div>
                         <div class='required col-lg-12 {$successArray[2]}'>
                            <label for="email">Email</label>
                           <input  id="email" class="required form-control" name="email" type="text" {$populateArray[2]} />
                        </div>
                         <div class='required col-lg-12  {$successArray[3]}'>
                            <label for="password">Password</label>
                            <input id="password" class="required form-control password" name="password" type="password" {$populateArray[3]} />
                        </div>
                         <div class='required col-lg-12 {$successArray[4]}'>
                            <label for="confirm_password">Confirm Password</label>
                            <input id="confirm_password" class="required form-control confirm-password" name="confirm-password" type="password" {$populateArray[4]} />
                        </div>

                    </fieldset>
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                        <button type="submit"  class="btn btn-primary submit-button">submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="modal" {$loginModalActive} id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Welcome back!</h4>
                </div>
                <div class="modal-body">
                    <form class = "user_form" type = "text" method="post" action="registration.php">
                        <fieldset>
                            <div class='col-lg-12 {$lsuccessArray[0]}'>
                                <label for="login-email">email</label>
                                <input id="login-email" class="required form-control" name="login-email" type="text" {$lpopulateArray[0]} />
                            </div>
                            <div class='col-lg-12 {$lsuccessArray[1]}'>
                                <label for="login-password">Password</label>
                                <input id="login-password" class="required form-control" name="login-password" type="password" {$lpopulateArray[1]} />
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Login</button>
                        
                    </form>
                    <a href ="../../../Controllers/Logic/user/home.php"><button >temp login access</button></a>
                </div>

                <div class="modal-footer">
                    

                </div>
               
            </div>
        </div>

</body>

</html>
