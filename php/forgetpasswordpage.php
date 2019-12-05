<?php
  session_start();
  $flag = false;
  $dbserver = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "webproject";
  $database = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if(isset($_POST['Confirm'])){
    $gene_code = test_input($_POST['gene_code']);
    if(strcmp($gene_code,$_SESSION["rand"])==0){
      $flag = true;
    }
  }
  if(isset($_POST['ConfirmPass'])){
    $newpassword = test_input($_POST['newpassword']);
    $uppercase = preg_match('@[A-Z]@', $newpassword);
    $lowercase = preg_match('@[a-z]@', $newpassword);
    $number    = preg_match('@[0-9]@', $newpassword);
    $specialChars = preg_match('@[^\w]@', $newpassword);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newpassword) < 8) {
      $strongPass = false;
      // echo "weak password error";
    }
    else{
      $strongPass = true;
    }
    if($strongPass){
      $useremail = $_SESSION["user_email"];
      $newpassword = md5($newpassword);
      if($_SESSION["flag_email"]){
        $SQLupdate = "UPDATE users SET password ='$newpassword' WHERE email='$useremail' ";
      }
      else{
        $SQLupdate = "UPDATE users SET password ='$newpassword' WHERE username='$useremail' ";
      }
      mysqli_query($database, $SQLupdate);
      $url ="/login.php";
      $_SESSION["forget_note"] = true;
      header( "Location: $url" );
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Forget Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body id="back">
  <div class="d-flex justify-content-center animated slideInDown">
    <div id="HighDiv" class="jumbotron shadow-lg">
      <h1 id="Confirm_header" class="float-left">Confirm Code</h1>
      <form id="login" class="mt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
      if(!$flag){
        echo'<div class="">
          <input id="generate_code_input" type="text" name="gene_code" placeholder="Generated Code" required>
        </div>
        <button id="Confirm_button" type="submit" name="Confirm" class="btn btn-primary" onclick="Check()">Confirm</button>';
      }
        if($flag){
          echo '<div class="">'.'<input type="password" name="newpassword" placeholder="Enter new Password" required>'.'</div>';
          echo '<button id="ConfirmPass" type="submit" name="ConfirmPass" class="btn btn-primary" >Confirm</button';
        }
         ?>
        <br>
        <br>
        <br>
        <br>
      </form>
    </div>
  </div>
  <script type="text/javascript">
  function reremove(){
    generate_code_input.remove();
    Confirm_button.remove();
  }
    function Check(){
      var generate_code_input = document.getElementById('generate_code_input');
      var Confirm_button = document.getElementById('Confirm_button');
      <?php
      if ($flag) {
        echo '<script>
         reremove();
         <script>';
      }
       ?>
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <script type="text/javascript" src="main.js"></script>
</body>
</html>
