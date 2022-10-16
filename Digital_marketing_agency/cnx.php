
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "adstube");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$nom = $_REQUEST['nom'];
		$telephone= $_REQUEST['telephone'];
		$email = $_REQUEST['email'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO informations (nom,telephone,email)
		VALUES ('$nom','$telephone','$email')";
		
		if(mysqli_query($conn, $sql)){
			header("location:http://localhost/files/contact.php",true,301);
			echo "<script>Swal.fire({
				position: 'center',
				icon: 'success',
				title: 'Congratulation Register Completed',
				showConfirmButton: false,
				timer: 2000
			  })   </script>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>




