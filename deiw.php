<?php
include('db.php');

$id=1;
$name=$_POST['name'];
// $image=$_POST['image'];
$phone=$_POST['phone'];
$vdp=$_POST['vdp'];
$idgrame=$_POST['idgrame'];
$image_payment=$_POST['image-payment'];
//line
$header = "Project Pay Grame";
$message = $header.
            "\n". "npe: " . $name .
            "\n". "lejxovtooj: " . $phone .
            "\n". "vdp: " . $vdp;


// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    // $filename = $_FILES["image"]["name"];
    // $tempname = $_FILES["image"]["tmp_name"];   
	// $folder = "img/".$filename;
//2upload
	$filename1 = $_FILES["image-payment"]["name"];
    $tempname1 = $_FILES["image-payment"]["tmp_name"];  
        $folder = "img/".$filename1;
         
    // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO general (name,phone,vdp,idgrame,photopayment) 
		VALUES ('$name','$phone','$vdp','$idgrame','$filename1')";
 
        // Execute query
        mysqli_query($con, $sql);
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname1, $folder))  {
            sendlinemesg();
            echo "<script type='text/javascript'>";
			echo "alert('ການສະມັກຂອງເຈົ້າສຳແລັດແລ້ວ');";
            $res = notify_message($message);
			echo "window.location = 'index.html'; ";
			echo "</script>";
        }else{
			echo "<script type='text/javascript'>";
			echo "alert('ການສະມັກຂອງເຈົ້າມີຄວນຜິດພາບ');";
			echo "window.location = 'deiw.html'; ";
			echo "</script>";
      }
  }

  function sendlinemesg() {
    //  kuv lis Line notify: EJ9Fpq92LJvjRrqwz47eQanouasR3IWwPGVlyJ60tok
    //api ntawm line: https://notify-api.line.me/api/notify
    define('LINE_API',"https://notify-api.line.me/api/notify");
    define('LINE_TOKEN',"6MNKTcydyRwh7Bm7O6SXKZT9jrMaZtLSYAlAWxVHvK2");

    function notify_message($message) {
        $queryData = array('message' => $message);
        $queryData = http_build_query($queryData,'','&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content' => $queryData
            )
        );
        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }
}



?>