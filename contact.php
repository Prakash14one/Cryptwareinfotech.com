<?php
if (isset($_POST['sendMailBtn'])) {
    $fromEmail = 'info@cryptwareinfotech.com';
    $name = $_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
    
    $toEmail= 'info@cryptwareinfotech.com';
    $subjectName ='Inquiry through website www.cryptwareinfotech.com';
    
    $to = $toEmail;
    $subject = $subjectName;
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<form>
			<table border="1px solid">
					<tr>
						<td><b>Name</b></td>
						<td>'.$name.'</td>
					</tr>
					<tr>
						<td><b>Email Address</b></td>
						<td>'.$fromEmail.'" target=_blank>'.$fromEmail.'</a></td>
					</tr>
                    <tr>
						<td><b>Subject</b></td>
						<td>'.$subject.'</a></td>
					</tr>
                    <tr>
						<td><b>Message</b></td>
						<td>'.$message.'</td>
					</tr>					
				</table>
				</form>
				<br>
				<div class="container">
                    <b>Regards</b><br/>
                  <b><a href="mailto:'.$fromEmail.'" target=_blank>'.$fromEmail.'</a></b>
				</div>
			</body>
			</html>';
    
    if (mail($to, $subject, $message, $headers)) {
            echo '<script>alert("Email sent successfully !")</script>';
            echo '<script>window.location.href="index.html";</script>';
    }
    else {
            echo "Problem to send email please check your Email";
            exit();
        }
}
?>