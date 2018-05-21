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


$connect = pg_connect("host=ec2-54-163-240-54.compute-1.amazonaws.com port=5432 dbname=d97hqd0uu802gp user=vxoxyrownzuzgx password=0669e05248eea11fe4bdc6d93f82de2248a0dd9a9345ee09215f6f4d2d393862") or die('No se ha podido conectar: ' . pg_last_error());;
//conectarse a una base de datos llamada "mary" en el host "sheep" con el nombre de usuario y password
if (!$connect) {
  echo "Ocurrió un error.\n";
  exit;
}



$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));


$statement = ("INSERT INTO 'CONTACTUS' ('NAME', 'MAIL', 'NUMERO', 'MENSAGE') VALUES ('$name', '$email_address', '$message')");

$statement1= pg_query($connect,$statement) or die('La consulta fallo: ' . pg_last_error());




// Create the email and send the message
/*$to = 'darwinvegas1@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: darwin.vegas@hotmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";

$bool = mail($to,$email_subject,$email_body,$headers);*/

if($bool){
    echo "Mensaje enviado";
   return true;
}




?>
