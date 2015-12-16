<?php include("common.php");

$address = isset($_POST['address'])? $_POST['address'] : null;
$msg = "";
if ($address &&!empty($address )){

foreach ($_SESSION['getaddressbalance'] as $key => $value) {
        $assets[$value['name']] = intval($_POST[$value['name']]);       
        if ($assets[$value['name']]>$value['qty'])        
            $msg .= "<code>insufficient remaining <b>".$value['name']."</b> credit</code><br>";
       }
if (empty($msg)){

    $msg .= '<code style="color:green">Please wait 20 min to complete trasaction!</code>';
}

}else if ($address){
     $msg .= "<code>Address not specified</code><br>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gift Wallet | <?php echo $_SESSION['name'];?> </title>
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
    <div class="row row-offcanvas ">
      <!--Begin main-->

            <a id="features"></a>
            <hr>
            <?php echo $msg;?>
            <p class="lead">
                
            </p>
            <form method="post">

                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon3">To</span>
                      <input type="text" class="form-control" id="basic-url" name="address" aria-describedby="basic-addon3">
                    </div>
                    <br>
                    <?php
                        foreach ($_SESSION['getaddressbalance'] as $key => $value) {
                            
                   echo  ' <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">'.$value['name'].' ('. $value['qty'] .')</span>
                                  <input type="text" class="form-control" name="'.$value['name'].'" placeholder="0" aria-describedby="basic-addon1">
                            </div>
                                                ';                            
                        }
                    ?>

                   
                   <br>
                    <div class="input-group align center">
                      
                      <input type="submit" class="btn btn-primary" value="Send" id="basic-url" aria-describedby="basic-addon3">
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
