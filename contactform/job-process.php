<?php

if(isset($_POST['btnsubmit']))
{
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$linkedin = $_POST['linkedin'];
	
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";		 
		// Create email headers
		$headers .= 'From: RISE <admin@ri.se>'."\r\n".
			'X-Mailer: PHP/' . phpversion();
	
	
		$subject = "RISE Lediga job";
		$message = "Namn : ".$name."<br>
					Telefonnummer : ".$tel."<br>
					Mailadress : ".$email."<br>
					L&auml;nk till din Linkedin-profil  : ".$linkedin."<br>";
					

		$mailsend = mail('susanne.hjalmered@sigma.se ',$subject,$message,$headers);
	
		if($mailsend ==1)
		{			
			echo("<script> window.location='http://".$_SERVER['HTTP_HOST']."/index.php?result=yes#form'</script>");
		}
		else
		{
			echo("<script> window.location='http://".$_SERVER['HTTP_HOST']."/index.php?result=no#form'</script>");
		}	
}

?>