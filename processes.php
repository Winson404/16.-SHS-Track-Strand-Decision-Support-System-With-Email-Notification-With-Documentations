<?php 

	include 'config.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/PHPMailer/src/Exception.php';
	require 'vendor/PHPMailer/src/PHPMailer.php';
	require 'vendor/PHPMailer/src/SMTP.php';


	// users LOGIN
	if(isset($_POST['login'])) {
		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
		if(mysqli_num_rows($check)===1) {

				$row = mysqli_fetch_array($check);
				$user_type = $row['user_type'];
				if($user_type == 'Admin') {
					$_SESSION['admin_Id'] = $row['user_Id'];
					header("Location: Admin/dashboard.php");
				} else {
					$_SESSION['user_Id'] = $row['user_Id'];
					header("Location: User/dashboard.php");
					// $_SESSION['message'] = "Incorrect password.";
				    // $_SESSION['text'] = "Please try again.";
				    // $_SESSION['status'] = "error";
				    // $email    = $_POST['email'];
					// header("Location: login.php");
				}
		} else {
				$_SESSION['message'] = "Incorrect password.";
			    $_SESSION['text'] = "Please try again.";
			    $_SESSION['status'] = "error";
			    $email    = $_POST['email'];
				header("Location: login.php");
		}
	}




	// SAVE USER | REGISTRATION
	if(isset($_POST['create_user'])) {

		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$Barangay        = $_POST['Barangay'];
		$Municipality    = $_POST['Municipality'];
		$Province        = $_POST['Province'];
		$email           = $_POST['email'];
		$contact         = $_POST['contact'];
		$password        = md5($_POST['password']);
		$file            = basename($_FILES["fileToUpload"]["name"]);
		$date_registered = date('Y-m-d');


		$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if(mysqli_num_rows($check_email) > 0 ) {
			$_SESSION['message']  = "Email is already taken.";
      		$_SESSION['text'] = "Please try again.";
		  	$_SESSION['status'] = "error";
			header("Location: register.php");
		} else {

				  if(empty($file)) {

				  		$save = mysqli_query($conn, "INSERT INTO users (firstname, middlename, lastname, suffix, gender, dob, age, barangay, municipality, province, email, contact, password, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$Barangay', '$Municipality', '$Province', '$email', '$contact', '$password', '$date_registered')");
	                        if($save) {
	                          	$_SESSION['message']  = "You have registered successfully.";
								$_SESSION['text'] = "Success";
								$_SESSION['status'] = "success";
								header("Location: register.php");                             
	                        } else {
	                          	$_SESSION['message'] = "Something went wrong while saving the information. Please try again.";
								$_SESSION['text'] = "Please try again.";
								$_SESSION['status'] = "error";
								header("Location: register.php");
	                        }

				  } else {
				  	  // Check if image file is a actual image or fake image
			          $target_dir = "images-users/";
			          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			          $uploadOk = 1;
			          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			    
			              // Allow certain file formats
			              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				              $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
							  $_SESSION['text'] = "Please try again.";
							  $_SESSION['status'] = "error";
						      header("Location: register.php");
				              $uploadOk = 0;
			              }

			              // Check if $uploadOk is set to 0 by an error
			              if ($uploadOk == 0) {
			              		$_SESSION['message']  = "Your file was not uploaded.";
						        $_SESSION['text'] = "Please try again.";
								$_SESSION['status'] = "error";
							    header("Location: register.php");
			              // if everything is ok, try to upload file
			              } else {
			                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			                  	$save = mysqli_query($conn, "INSERT INTO users (firstname, middlename, lastname, suffix, gender, dob, age, barangay, municipality, province, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$Barangay', '$Municipality', '$Province', '$email', '$contact', '$password', '$file','$date_registered')");
			                        if($save) {
			                          $_SESSION['message']  = "You have registered successfully.";
								      $_SESSION['text'] = "Success";
									  $_SESSION['status'] = "success";
									  header("Location: register.php");                             
			                        } else {
			                          $_SESSION['message'] = "Something went wrong while saving the information. Please try again.";
								      $_SESSION['text'] = "Please try again.";
									  $_SESSION['status'] = "error";
									  header("Location: register.php");
			                        }
			                  } else {
			                        $_SESSION['message'] = "There was an error uploading your file.";
							      	$_SESSION['text'] = "Please try again.";
									$_SESSION['status'] = "error";
								    header("Location: register.php");
			                  }
							 }
				  }
		}

	}







	if(isset($_POST['question_for_track'])) {
		$guest_Ip = $_POST['guest_Ip'];
		$q1      = $_POST['q1'];
		$q2      = $_POST['q2'];
		$q3      = $_POST['q3'];
		$q4      = $_POST['q4'];
		$q5      = $_POST['q5'];

		$q1_choice1 = $_POST['q1_choice1'];
		$q2_choice2 = $_POST['q2_choice2'];
		$q3_choice3 = $_POST['q3_choice3'];
		$q4_choice4 = $_POST['q4_choice4'];
		$q5_choice5 = $_POST['q5_choice5'];
		$date_registered = date('Y-m-d');

		// $fetch = mysqli_query($conn, "SELECT * FROM track WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
		$fetch = mysqli_query($conn, "SELECT * FROM track WHERE user_Id='$guest_Ip'");
		if(mysqli_num_rows($fetch) > 0) {
			$update = mysqli_query($conn, "UPDATE track SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5' WHERE user_Id='$guest_Ip'");
			// $update = mysqli_query($conn, "UPDATE track SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5' WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
			if($update) {
				// $fetch2 = mysqli_query($conn, "SELECT * FROM track_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
				$fetch2 = mysqli_query($conn, "SELECT * FROM track_sort WHERE user_Id='$guest_Ip'");
				if(mysqli_num_rows($fetch2) > 0) {

					// $delete = mysqli_query($conn, "DELETE FROM track_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
					$delete = mysqli_query($conn, "DELETE FROM track_sort WHERE user_Id='$guest_Ip'");
					if($delete) {
						$save2 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

						$_SESSION['message'] = "You have successfully answered questions for SHS Tracks.";
				        $_SESSION['text'] = "Success";
				        $_SESSION['status'] = "success";
				        $_SESSION['guest_Ip'] = $guest_Ip;
						header("Location: assessment_result.php");
					} else {
						$_SESSION['message'] = "Something went wrong while saving the information.";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header("Location: assessment.php");
					}

				} else {

					$save2 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

					$_SESSION['message'] = "You have successfully answered questions for SHS Tracks.";
			        $_SESSION['text'] = "Success";
			        $_SESSION['status'] = "success";
			        $_SESSION['guest_Ip'] = $guest_Ip;
					header("Location: assessment_result.php");
				}
		    } else {
		        $_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment.php");
		    }
		} else {
			$save = mysqli_query($conn, "INSERT INTO track (user_Id, q1, q1_choice1, q2, q2_choice2, q3, q3_choice3, q4, q4_choice4, q5, q5_choice5, track_assessment_date) VALUES ('$guest_Ip', '$q1', '$q1_choice1', '$q2', '$q2_choice2', '$q3', '$q3_choice3', '$q4', '$q4_choice4', '$q5', '$q5_choice5', '$date_registered')");
			if($save) {
				$save2 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");
		      	$_SESSION['message'] = "You have successfully answered questions for SHS Tracks.";
		        $_SESSION['text'] = "Success";
		        $_SESSION['status'] = "success";
		        $_SESSION['guest_Ip'] = $guest_Ip;
				header("Location: assessment_result.php");
		    } else {
		        $_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment.php");
		    }

		}

		
	}






	
	
	

	if(isset($_POST['academic_strand'])) {

		$guest_Ip = $_POST['guest_Ip'];
		$q1      = $_POST['q1'];
		$q2      = $_POST['q2'];
		$q3      = $_POST['q3'];
		$q4      = $_POST['q4'];
		$q5      = $_POST['q5'];
		$q6      = $_POST['q6'];
		$q7      = $_POST['q7'];
		$q8      = $_POST['q8'];
		$q9      = $_POST['q9'];
		$q10     = $_POST['q10'];
		$q11     = $_POST['q11'];
		$q12     = $_POST['q12'];
		$q13     = $_POST['q13'];
		$q14     = $_POST['q14'];
		$q15     = $_POST['q15'];

		$q1_choice1 = $_POST['q1_choice1'];
		$q2_choice2 = $_POST['q2_choice2'];
		$q3_choice3 = $_POST['q3_choice3'];
		$q4_choice4 = $_POST['q4_choice4'];
		$q5_choice5 = $_POST['q5_choice5'];

		$q6_choice6 = $_POST['q6_choice6'];
		$q7_choice7 = $_POST['q7_choice7'];
		$q8_choice8 = $_POST['q8_choice8'];
		$q9_choice9 = $_POST['q9_choice9'];
		$q10_choice10 = $_POST['q10_choice10'];

		$q11_choice11 = $_POST['q11_choice11'];
		$q12_choice12 = $_POST['q12_choice12'];
		$q13_choice13 = $_POST['q13_choice13'];
		$q14_choice14 = $_POST['q14_choice14'];
		$q15_choice15 = $_POST['q15_choice15'];
		$date_registered = date('Y-m-d');


		$fetch = mysqli_query($conn, "SELECT * FROM academic_strand WHERE user_Id='$guest_Ip'");
		// $fetch = mysqli_query($conn, "SELECT * FROM academic_strand WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
		if(mysqli_num_rows($fetch) > 0) {
			$update = mysqli_query($conn, "UPDATE academic_strand SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5', q6='$q6', q6_choice6='$q6_choice6', q7='$q7', q7_choice7='$q7_choice7', q8='$q8', q8_choice8='$q8_choice8', q9='$q9', q9_choice9='$q9_choice9', q10='$q10', q10_choice10='$q10_choice10', q11='$q11', q11_choice11='$q11_choice11', q12='$q12', q12_choice12='$q12_choice12', q13='$q13', q13_choice13='$q13_choice13', q14='$q14', q14_choice14='$q14_choice14', q15='$q15', q15_choice15='$q15_choice15' WHERE user_Id='$guest_Ip' AND track_assessment_date='$date_registered'");
			if($update) {
				$fetch2 = mysqli_query($conn, "SELECT * FROM academic_strand_sort WHERE user_Id='$guest_Ip'");
				// $fetch2 = mysqli_query($conn, "SELECT * FROM academic_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
				if(mysqli_num_rows($fetch2) > 0) {

					$delete = mysqli_query($conn, "DELETE FROM academic_strand_sort WHERE user_Id='$guest_Ip'");
					// $delete = mysqli_query($conn, "DELETE FROM academic_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
					if($delete) {
						$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q6_choice6', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q7_choice7', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q8_choice8', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q9_choice9', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q10_choice10', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q11_choice11', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q12_choice12', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q13_choice13', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q14_choice14', '$date_registered')");
						// $save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q15_choice15', '$date_registered')");

				      	$_SESSION['message'] = "You have successfully answered questions for Academic Strands.";
				        $_SESSION['text'] = "Success";
				        $_SESSION['status'] = "success";
						header("Location: assessment_strand_ACADEMIC_result.php");
					} else {
						$_SESSION['message'] = "Something went wrong while saving the information.";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header("Location: assessment_strand_ACADEMIC_result.php");
					}

				} else {

					$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q6_choice6', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q7_choice7', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q8_choice8', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q9_choice9', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q10_choice10', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q11_choice11', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q12_choice12', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q13_choice13', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q14_choice14', '$date_registered')");
					// $save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q15_choice15', '$date_registered')");

			      	$_SESSION['message'] = "You have successfully answered questions for Academic Strands.";
			        $_SESSION['text'] = "Success";
			        $_SESSION['status'] = "success";
					header("Location: assessment_strand_ACADEMIC_result.php");

				}

			} else {

				$_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment_strand_ACADEMIC_result.php");

			}


		} else {

			$save = mysqli_query($conn, "INSERT INTO academic_strand (user_Id, q1, q1_choice1, q2, q2_choice2, q3, q3_choice3, q4, q4_choice4, q5, q5_choice5, q6, q6_choice6, q7, q7_choice7, q8, q8_choice8, q9, q9_choice9, q10, q10_choice10, q11, q11_choice11, q12, q12_choice12, q13, q13_choice13, q14, q14_choice14, q15, q15_choice15, track_assessment_date) VALUES ('$guest_Ip', '$q1', '$q1_choice1', '$q2', '$q2_choice2', '$q3', '$q3_choice3', '$q4', '$q4_choice4', '$q5', '$q5_choice5', '$q6', '$q6_choice6', '$q7', '$q7_choice7', '$q8', '$q8_choice8', '$q9', '$q9_choice9', '$q10', '$q10_choice10', '$q11', '$q11_choice11', '$q12', '$q12_choice12', '$q13', '$q13_choice13', '$q14', '$q14_choice14', '$q15', '$q15_choice15', '$date_registered')");
			if($save) {

				$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q6_choice6', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q7_choice7', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q8_choice8', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q9_choice9', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q10_choice10', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q11_choice11', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q12_choice12', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q13_choice13', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q14_choice14', '$date_registered')");
				// $save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q15_choice15', '$date_registered')");

		      	$_SESSION['message'] = "You have successfully answered questions for Academic Strands.";
		        $_SESSION['text'] = "Success";
		        $_SESSION['status'] = "success";
				header("Location: assessment_strand_ACADEMIC_result.php");
		    } else {
		        $_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment_strand_ACADEMIC_result.php");
		    }

		}


		

	}











	if(isset($_POST['tvl_strand'])) {

		$guest_Ip = $_POST['guest_Ip'];
		$q1      = $_POST['q1'];
		$q2      = $_POST['q2'];
		$q3      = $_POST['q3'];
		$q4      = $_POST['q4'];
		$q5      = $_POST['q5'];
		$q6      = $_POST['q6'];
		$q7      = $_POST['q7'];
		$q8      = $_POST['q8'];
		$q9      = $_POST['q9'];
		$q10     = $_POST['q10'];
		$q11     = $_POST['q11'];
		$q12     = $_POST['q12'];
		$q13     = $_POST['q13'];
		$q14     = $_POST['q14'];
		$q15     = $_POST['q15'];

		$q1_choice1 = $_POST['q1_choice1'];
		$q2_choice2 = $_POST['q2_choice2'];
		$q3_choice3 = $_POST['q3_choice3'];
		$q4_choice4 = $_POST['q4_choice4'];
		$q5_choice5 = $_POST['q5_choice5'];

		$q6_choice6 = $_POST['q6_choice6'];
		$q7_choice7 = $_POST['q7_choice7'];
		$q8_choice8 = $_POST['q8_choice8'];
		$q9_choice9 = $_POST['q9_choice9'];
		$q10_choice10 = $_POST['q10_choice10'];

		$q11_choice11 = $_POST['q11_choice11'];
		$q12_choice12 = $_POST['q12_choice12'];
		$q13_choice13 = $_POST['q13_choice13'];
		$q14_choice14 = $_POST['q14_choice14'];
		$q15_choice15 = $_POST['q15_choice15'];
		$date_registered = date('Y-m-d');


		$fetch = mysqli_query($conn, "SELECT * FROM tvl_strand WHERE user_Id='$guest_Ip'");
		// $fetch = mysqli_query($conn, "SELECT * FROM tvl_strand WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
		if(mysqli_num_rows($fetch) > 0) {
			$update = mysqli_query($conn, "UPDATE tvl_strand SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5', q6='$q6', q6_choice6='$q6_choice6', q7='$q7', q7_choice7='$q7_choice7', q8='$q8', q8_choice8='$q8_choice8', q9='$q9', q9_choice9='$q9_choice9', q10='$q10', q10_choice10='$q10_choice10', q11='$q11', q11_choice11='$q11_choice11', q12='$q12', q12_choice12='$q12_choice12', q13='$q13', q13_choice13='$q13_choice13', q14='$q14', q14_choice14='$q14_choice14', q15='$q15', q15_choice15='$q15_choice15' WHERE user_Id='$guest_Ip' AND track_assessment_date='$date_registered'");
			if($update) {
				$fetch2 = mysqli_query($conn, "SELECT * FROM tvl_strand_sort WHERE user_Id='$guest_Ip'");
				// $fetch2 = mysqli_query($conn, "SELECT * FROM tvl_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
				if(mysqli_num_rows($fetch2) > 0) {

					$delete = mysqli_query($conn, "DELETE FROM tvl_strand_sort WHERE user_Id='$guest_Ip'");
					// $delete = mysqli_query($conn, "DELETE FROM tvl_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
					if($delete) {
						$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q6_choice6', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q7_choice7', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q8_choice8', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q9_choice9', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q10_choice10', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q11_choice11', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q12_choice12', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q13_choice13', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q14_choice14', '$date_registered')");
						// $save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q15_choice15', '$date_registered')");

				      	$_SESSION['message'] = "You have successfully answered questions for TVL Strands.";
				        $_SESSION['text'] = "Success";
				        $_SESSION['status'] = "success";
						header("Location: assessment_strand_TVL_result.php");
					} else {
						$_SESSION['message'] = "Something went wrong while saving the information.";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header("Location: assessment_strand_TVL_result.php");
					}

				} else {

					$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q6_choice6', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q7_choice7', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q8_choice8', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q9_choice9', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q10_choice10', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q11_choice11', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q12_choice12', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q13_choice13', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q14_choice14', '$date_registered')");
					// $save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q15_choice15', '$date_registered')");

			      	$_SESSION['message'] = "You have successfully answered questions for TVL Strands.";
			        $_SESSION['text'] = "Success";
			        $_SESSION['status'] = "success";
					header("Location: assessment_strand_TVL_result.php");

				}

			} else {

				$_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment_strand_TVL_result.php");

			}


		} else {

			$save = mysqli_query($conn, "INSERT INTO tvl_strand (user_Id, q1, q1_choice1, q2, q2_choice2, q3, q3_choice3, q4, q4_choice4, q5, q5_choice5, q6, q6_choice6, q7, q7_choice7, q8, q8_choice8, q9, q9_choice9, q10, q10_choice10, q11, q11_choice11, q12, q12_choice12, q13, q13_choice13, q14, q14_choice14, q15, q15_choice15, track_assessment_date) VALUES ('$guest_Ip', '$q1', '$q1_choice1', '$q2', '$q2_choice2', '$q3', '$q3_choice3', '$q4', '$q4_choice4', '$q5', '$q5_choice5', '$q6', '$q6_choice6', '$q7', '$q7_choice7', '$q8', '$q8_choice8', '$q9', '$q9_choice9', '$q10', '$q10_choice10', '$q11', '$q11_choice11', '$q12', '$q12_choice12', '$q13', '$q13_choice13', '$q14', '$q14_choice14', '$q15', '$q15_choice15', '$date_registered')");
			if($save) {

				$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q1_choice1', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q2_choice2', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q3_choice3', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q4_choice4', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q5_choice5', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q6_choice6', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q7_choice7', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q8_choice8', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q9_choice9', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q10_choice10', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q11_choice11', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q12_choice12', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q13_choice13', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$guest_Ip', '$q14_choice14', '$date_registered')");
				// $save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q15_choice15', '$date_registered')");

		      	$_SESSION['message'] = "You have successfully answered questions for TVL Strands.";
		        $_SESSION['text'] = "Success";
		        $_SESSION['status'] = "success";
				header("Location: assessment_strand_TVL_result.php");
		    } else {
		        $_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment_strand_TVL_result.php");
		    }

		}


		

	}






if(isset($_POST['sendEmail'])) {

	$name    = mysqli_real_escape_string($conn, $_POST['name']);
	$email	 = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$msg     = mysqli_real_escape_string($conn, $_POST['message']);

    $message = '<h3>'.$subject.'</h3>
				<p>
					Good day!<br>
					'.$msg.'
				</p>
				<p>
					Name of Sender: '.$name.'<br>
					Email: '.$email.'
				</p>
				<p><b>Note:</b> This is a system generated email please do not reply.</p>';
				//Load composer's autoloader

		    $mail = new PHPMailer(true);                            
		    try {
		        //Server settings
                $mail->isSMTP();                                     
                $mail->Host = 'smtp.gmail.com';                      
                $mail->SMTPAuth = true;                             
                $mail->Username = 'info.shstudent@gmail.com';     
                $mail->Password = 'vfsaoiboazmvybvm';              
                $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                );                         
                $mail->SMTPSecure = 'ssl';                           
                $mail->Port = 465;                                   

                //Send Email
                $mail->setFrom('info.shstudent@gmail.com');
                
                //Recipients
                // $mail->addAddress($email); 
                $mail->addAddress('info.shstudent@gmail.com');              
                $mail->addReplyTo('info.shstudent@gmail.com');
		        
		        //Recipients
		        // $mail->addAddress('sonerwin12@gmail.com');              
		        // $mail->addReplyTo('sonesrwin12@gmail.com');
		        
		        //Content
		        $mail->isHTML(true);                                  
		        $mail->Subject = $subject;
		        $mail->Body    = $message;

		        $mail->send();
				$_SESSION['success'] = "Your message has been sent. Thank you!";
				header("Location: contact.php");

		    } catch (Exception $e) {
		    	$_SESSION['success'] = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
				header("Location: contact.php");
		    }
 }
	

?>


