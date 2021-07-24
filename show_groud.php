<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Login and signup snippets built with Bootstrap 3">
<meta name="author" content="easytousecode">
<link rel="icon" type="image/png" href="assets/logo.png"/>
<title>ໜ້າຫຼັກຂອງໂຄງການ</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="">ໂຄງການສະໜັບສະໜູນການຫຼິ້ນເກມ</a>
          </div>
        </div><!--/.container-fluid -->
    </nav>  

    <?php 
    include('db.php');


    $query = " SELECT * from pawg";

    $result = mysqli_query($con, $query);
    ?>

    <div class="container">
        <div class="row">
          <div class="col-12">
              <table class="table table-image">
                <thead>
                  <tr>
                    <th scope="col">ລດ</th>
                    <th scope="col">ຊື່ທີມ</th>
                    <th scope="col">ເບີໂທ</th>
                    <th scope="col">ຊຳລະເງິນ</th>
                  </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                  <tr>
                    <th scope="row"> <?php echo $row['id']; ?> </th>
                    <td><?php echo $row['treamname']; ?> </td>
                    <td><?php echo $row['phone']; ?> </td>
                    <td class="w-25"><?php  
                       echo " <img src='img/".$row['imgpayment']." ' class='img-fluid img-thumbnail' >";
                        ?> 
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>  
          </div>
        </div>
      </div>
      
<div class="container">
	<div class="col-md-6">
    <hr>
						<p><a href="show.html">ກັບສູ່ໜ້າຫຼັກ</a></p>
	</div><!--/.col-md-6 -->
</div><!--/.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
