<?php include("common.php");


$json = file_get_contents('http://ssh.chaker.tn:12345/getaddressbalance/'. $_SESSION['address_wallet']);
$transactions = json_decode($json, true);


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
         


            <div class="row placeholders">
            You are connected to the award Node. Please take a tour and discover the possibilities.
            The more you contribute the higher score you get.
            <?php
           
                foreach ($_SESSION['getaddressbalance'] as $value) {
                     $value= (array) $value;

                     echo  '<div class="col-xs-6 col-sm-3 placeholder text-center">
                              <img src="img/'.$value['name'].'.png" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                                  <h4>'. $value['qty'] .' '.$value['name'].'</h4>
                                 </div>';
                
                    }
            ?>
               

            </div>




            <a id="features"></a>
            <hr>
            <p class="lead">
              Here are the transactions you made lately
            </p>

            
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Txid</th>
                                                <th>Skill</th>
                                                <th>Quantity</th>
                                                <th>Sender</th>
                                                <th>Receiver</th>
                                            </tr>
                                        </thead>


                                        <tbody>
<?php
foreach ($transactions as $value) {
               echo  '    <tr>
                            <td>'.substr($value['genesistxid'], 0,10).'...</td>
                            <td>'.$value['type'].'</td>
                            <td>'.$value['qty'].'</td>
                            <td>'.substr($value['send'][0], 0,10).'...</td>
                            <td>'.substr($value['rec'][0], 0,10).'...</td>
                      </tr>';
 
}
?>
                                         
                                        </tbody>
                                    </table>
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