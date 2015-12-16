<?php 
include("common.php");?>

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
            <p class="lead">
                This is your receiving address 
            </p>
          

               <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Address</span>
                      <input type="text" class="form-control" value="<?php echo $_SESSION['address_wallet'];?>" aria-describedby="basic-addon1">
                    </div>

                        
                            
    

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

