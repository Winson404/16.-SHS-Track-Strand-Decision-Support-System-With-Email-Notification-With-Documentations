<?php 
	session_start();
	include '../config.php';

   // UPDATE ADMIN
	if(isset($_POST['update_admin'])) {

		$user_Id    = $_POST['user_Id'];
		$firstname  = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname   = $_POST['lastname'];
		$suffix    = $_POST['suffix'];
		$gender     = $_POST['gender'];
		$dob        = $_POST['dob'];
		$age        = $_POST['age'];
		$contact    = $_POST['contact'];
		$email      = $_POST['email'];
		$Barangay        = $_POST['Barangay'];
		$Municipality    = $_POST['Municipality'];
		$Province        = $_POST['Province'];
		$file       = basename($_FILES["fileToUpload"]["name"]);

		if(empty($file)) {

					$save = mysqli_query($conn, "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', barangay='$Barangay', municipality='$Municipality', province='$Province', email='$email', contact='$contact' WHERE user_Id='$user_Id'");
		            if($save) {
			                $_SESSION['message']  = "Admin information has been updated!";
					            $_SESSION['text'] = "Updated successfully!";
							        $_SESSION['status'] = "success";
											header("Location: about_me_update.php");                          
		            } else {
			                $_SESSION['message'] = "Something went wrong while saving the information.";
					            $_SESSION['text'] = "Please try again.";
							        $_SESSION['status'] = "error";
											header("Location: about_me_update.php");
		            }

		} else {

				  // Check if image file is a actual image or fake image
		          $target_dir = "../images-users/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: about_me_update.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message']  = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: about_me_update.php");

                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	                      	$save = mysqli_query($conn, "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', barangay='$Barangay', municipality='$Municipality', province='$Province', email='$email', contact='$contact', image='$file' WHERE user_Id='$user_Id'");
				           
							            if($save) {
					                	$_SESSION['message'] = "Admin information has been updated!";
								            $_SESSION['text'] = "Updated successfully!";
										        $_SESSION['status'] = "success";
														header("Location: about_me_update.php");
					                } else {
					                  $_SESSION['message'] = "Something went wrong while updating the information.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: about_me_update.php");
					                }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: about_me_update.php");
                      }

				 }

		}
	}




	// CHANGE ADMIN PASSWORD
	if(isset($_POST['password_admin'])) {

    	$user_Id    = $_POST['user_Id'];
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM users WHERE password='$OldPassword' AND user_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['message']  = "Password does not matched. Please try again";
		            $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
								header("Location: changepassword.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$password' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
                	$_SESSION['message'] = "Password has been changed.";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: changepassword.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while changing the password.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: changepassword.php");
                }
		    		}
    	} else {
    				$_SESSION['message']  = "Old password is incorrect.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: changepassword.php");
    	}

    }






?>