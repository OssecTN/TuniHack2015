<?php
$login=1;
include("common.php");

// this is just a test data ! 
$users=array("Test1"=> array("password1","1PRZAJuasCgjtZYqpmU32wmrLNsb9bq8mmNrhD","User M"),
              "Test2"=> array("password2","1PRZAJuasCgjtZYqpmU32wmrLNsb9bq8mmNrhD","User A"));

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$msg="";

if ($email && $password){
  if (isset($users[$email]) && $password==$users[$email][0]){
    $_SESSION['address_wallet'] = $users[$email][1];
    $_SESSION['email'] = $email.'@giftwallet.tn';
     $_SESSION['name'] =  $email;
    header('location:index.php');
  }
  else
    $msg="<code>user/password mismatch</code>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gift Wallet | <?php echo $_SESSION['name'];?>  </title>
    <meta name="description" content="A admin dashboard theme that will get you started with Bootstrap 4." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">



    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body >
 <?php include("navbar.php");?>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
      <!--Begin main-->
         



            <a id="features"></a>
            <hr>
            <?php echo $msg;?>
            <p class="lead">
                Connect to your Award node !
            </p>
            <form method="post" >

                 

                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon3">Email : </span>
                      <input type="text" class="form-control" id="basic-url" name="email" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group">
                      
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Password : </span>
                      <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                    </div>

                   
                   
                      <input type="submit" class="form-control" value="Send" id="basic-url" aria-describedby="basic-addon3">
                    </div>
               </form>             
                            

        <!--/main col-->
    </div>

</div>
<!--/.container-->
<?php include("footer.php");?>


<!-- Modal -->

    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    
    <script src="js/scripts.js"></script>
  </body>
</html>
