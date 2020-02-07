<?php
session_start();
if (isset($_SESSION["authenticated"])) {
  include 'skjema.php';
  die();
}
?>
<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["authenticated"])) {
  include 'skjema.php';
  die();
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12 loginbox">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Innlogging</h5>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputText" aria-describedby="TextHelp" placeholder="Brukernavn">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passord">
                </div>
                <input type="submit" class="btn btn-primary" value="Logg inn">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    $message="";
    if(count($_POST)>0) {
      $conn = mysqli_connect("localhost:3306","test1","test12","satest");
      $result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
      $count  = mysqli_num_rows($result);
      if($count==0) {
        $message = "Invalid Username or Password!";
      } else {
        $message = "You are successfully authenticated!";
      }
    }
    ?>
<<<<<<< HEAD
=======
    <title>User Login</title>
    <form name="frmUser" method="post" action="">
    	<div class="message"><?php if($message!="") { echo $message; } ?></div>
      <div class="message"><?php include 'db.php'; ?></div>
    		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
    			<tr class="tableheader">
    			<td align="center" colspan="2">Enter Login Details</td>
    			</tr>
    			<tr class="tablerow">
    			<td>
    			<input type="text" name="userName" placeholder="User Name" class="login-input"></td>
    			</tr>
    			<tr class="tablerow">
    			<td>
    			<input type="password" name="password" placeholder="Password" class="login-input"></td>
    			</tr>
    			<tr class="tableheader">
    			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
    			</tr>
    		</table>
    </form>
>>>>>>> 48ef8632551700b9035b5ac81e9081ea28a8b6bf
  </body>
</html>
