<?php
// Check for empty fields
 if (file_exists("config.php")) {
    include("config.php");
  } else {
    die();
  }


if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }


$connect = pg_connect("host=ec2-50-19-224-165.compute-1.amazonaws.com port=5432 dbname=dccva6brsskuij user=qgytbuqtbffbfs password=0e2daa973151c89bd3fb71a97acdf86711d96996bdcbd1cb1501bf1cb8e26b8b") or die('No se ha podido conectar: ' . pg_last_error());;
//conectarse a una base de datos llamada "mary" en el host "sheep" con el nombre de usuario y password
if (!$connect) {
  echo "Ocurrió un error.\n";
  exit;
}



$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$date = date("Y-m-d H:i:s");
$direccion="";
if (isset($_SERVER['REMOTE_ADDR'])) {
      $direccion=$_SERVER['REMOTE_ADDR'];      
        }else{
 $direccion="NO APLICA";
}

$statement = ("INSERT INTO contactus (NAME,MAIL,NUMERO,MENSAGE,DATE,$direccion) VALUES ('$name','$email_address','$phone','$message','$date','$direccion')");

$statement1= pg_query($connect,$statement) or die('La consulta fallo: ' . pg_last_error());




// Create the email and send the message
/*$to = 'darwinvegas1@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: darwin.vegas@hotmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";

$bool = mail($to,$email_subject,$email_body,$headers);*/


    echo "Mensaje enviado";




?>
