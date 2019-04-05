
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
   <style>
    body {
     margin: 0;
     padding: 3em 0;
     color: #fff;
     background: #0080d2;
     font-family: Georgia, Times New Roman, serif;
    }
 
    #container {
     width: 600px;
     background: #fff;
     color: #555;
     border: 3px solid #ccc;
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     -ms-border-radius: 10px;
     border-radius: 10px;
     border-top: 3px solid #ddd;
     padding: 1em 2em;
     margin: 0 auto;
     -webkit-box-shadow: 3px 7px 5px #000;
     -moz-box-shadow: 3px 7px 5px #000;
     -ms-box-shadow: 3px 7px 5px #000;
     box-shadow: 3px 7px 5px #000;
    }
 
    ul {
     list-style: none;
     padding: 0;
    }
 
    ul > li {
     padding: 0.12em 1em
    }
 
    label {
     display: block;
     float: left;
     width: 130px;
    }
 
    input, textarea {
     font-family: Georgia, Serif;
    }
   </style>
  </head>
  <form id="form1" runat="server" method="get" action="#" >
  
  <body>
   <form action="#" method="get">
	<input type="text" name="emailto" placeholder="Send_to" required />
	<input type="text" name="subject" placeholder="Subject" required />
	<input type="text" name="msg" placeholder="message" required />
	<input type="submit" class="btn btn-success" name="send" value="send" />
   </form>
 <?php

if($_GET)
{	
use PHPMailer\PHPMailer\PHPMailer;
//require '../vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = "1505051@gmail.com";

$mail->Password = "shah@10912";

$mail->setFrom('1505051@gmail.com', 'Priyen Shah');

$mail->addAddress($_GET['emailto'], 'John Doe');

$mail->Subject = $_GET['subject'];

$mail->msgHTML = $_GET['msg'];

if (!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else
{
    echo "Message sent!";
}

}
	
?>  
 </body>
 </form>
</html>