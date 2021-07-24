<?php
include('db.php');

$id=1;
$name=$_POST['treamname'];
// $image=$_POST['image'];
$phone=$_POST['phone'];
$vdp=$_POST['vdp'];
$name1=$_POST['name1'];
$idgrame1=$_POST['idgrame1'];

$name2=$_POST['name2'];
$idgrame2=$_POST['idgrame2'];

$name3=$_POST['name3'];
$idgrame3=$_POST['idgrame3'];

$name4=$_POST['name4'];
$idgrame4=$_POST['idgram4'];

//line
$header = "Project Pay Grame";
$message = $header.
            "\n". "npe: " . $name .
            "\n". "lejxovtooj: " . $phone .
            "\n". "vdp: " . $vdp;

// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    // $filename = $_FILES["image1"]["name"];
    // $tempname = $_FILES["image1"]["tmp_name"];   
	// $folder = "img/".$filename;


	// $filename2 = $_FILES["image2"]["name"];
    // $tempname2 = $_FILES["image2"]["tmp_name"];   
	// $folder = "img/".$filename2;


	// $filename3 = $_FILES["image3"]["name"];
    // $tempname3 = $_FILES["image3"]["tmp_name"];   
	// $folder = "img/".$filename3;

	// $filename4 = $_FILES["image4"]["name"];
    // $tempname4 = $_FILES["image4"]["tmp_name"];   
	// $folder = "img/".$filename4;

	$filename5 = $_FILES["imagepayment"]["name"];
    $tempname5 = $_FILES["imagepayment"]["tmp_name"];   
	$folder = "img/".$filename5;

         
    // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO pawg (treamname,phone,vdp,name1,idgrame1,name2,idgrame2,name3,idgrame3,name4,idgrame4,imgpayment) 
		VALUES ('$name','$phone','$vdp','$name1', '$idgrame1','$name2','$idgrame2','$name3','$idgrame3','$name4','$idgrame4','$filename5')";
 
        // Execute query
        mysqli_query($con, $sql);
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname5, $folder))  {
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