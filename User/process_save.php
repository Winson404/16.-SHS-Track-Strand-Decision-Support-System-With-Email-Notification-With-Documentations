<?php 

	include '../config.php';

	if(isset($_POST['question_for_track'])) {
		$user_Id = $_POST['user_Id'];
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
		$fetch = mysqli_query($conn, "SELECT * FROM track WHERE user_Id='$user_Id'");
		if(mysqli_num_rows($fetch) > 0) {
			$update = mysqli_query($conn, "UPDATE track SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5' WHERE user_Id='$user_Id'");
			// $update = mysqli_query($conn, "UPDATE track SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5' WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
			if($update) {
				// $fetch2 = mysqli_query($conn, "SELECT * FROM track_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
				$fetch2 = mysqli_query($conn, "SELECT * FROM track_sort WHERE user_Id='$user_Id'");
				if(mysqli_num_rows($fetch2) > 0) {

					// $delete = mysqli_query($conn, "DELETE FROM track_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
					$delete = mysqli_query($conn, "DELETE FROM track_sort WHERE user_Id='$user_Id'");
					if($delete) {
						$save2 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

						$_SESSION['message'] = "You have successfully answered questions for SHS Tracks.";
				        $_SESSION['text'] = "Success";
				        $_SESSION['status'] = "success";
						header("Location: assessment_result.php");
					} else {
						$_SESSION['message'] = "Something went wrong while saving the information.";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header("Location: assessment.php");
					}

				} else {

					$save2 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

					$_SESSION['message'] = "You have successfully answered questions for SHS Tracks.";
			        $_SESSION['text'] = "Success";
			        $_SESSION['status'] = "success";
					header("Location: assessment_result.php");
				}
		    } else {
		        $_SESSION['message'] = "Something went wrong while saving the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: assessment.php");
		    }
		} else {
			$save = mysqli_query($conn, "INSERT INTO track (user_Id, q1, q1_choice1, q2, q2_choice2, q3, q3_choice3, q4, q4_choice4, q5, q5_choice5, track_assessment_date) VALUES ('$user_Id', '$q1', '$q1_choice1', '$q2', '$q2_choice2', '$q3', '$q3_choice3', '$q4', '$q4_choice4', '$q5', '$q5_choice5', '$date_registered')");
			if($save) {
				$save2 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO track_sort(user_Id, track_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");
		      	$_SESSION['message'] = "You have successfully answered questions for SHS Tracks.";
		        $_SESSION['text'] = "Success";
		        $_SESSION['status'] = "success";
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

		$user_Id = $_POST['user_Id'];
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


		$fetch = mysqli_query($conn, "SELECT * FROM academic_strand WHERE user_Id='$user_Id'");
		// $fetch = mysqli_query($conn, "SELECT * FROM academic_strand WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
		if(mysqli_num_rows($fetch) > 0) {
			$update = mysqli_query($conn, "UPDATE academic_strand SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5', q6='$q6', q6_choice6='$q6_choice6', q7='$q7', q7_choice7='$q7_choice7', q8='$q8', q8_choice8='$q8_choice8', q9='$q9', q9_choice9='$q9_choice9', q10='$q10', q10_choice10='$q10_choice10', q11='$q11', q11_choice11='$q11_choice11', q12='$q12', q12_choice12='$q12_choice12', q13='$q13', q13_choice13='$q13_choice13', q14='$q14', q14_choice14='$q14_choice14', q15='$q15', q15_choice15='$q15_choice15' WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
			if($update) {
				$fetch2 = mysqli_query($conn, "SELECT * FROM academic_strand_sort WHERE user_Id='$user_Id'");
				// $fetch2 = mysqli_query($conn, "SELECT * FROM academic_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
				if(mysqli_num_rows($fetch2) > 0) {

					$delete = mysqli_query($conn, "DELETE FROM academic_strand_sort WHERE user_Id='$user_Id'");
					// $delete = mysqli_query($conn, "DELETE FROM academic_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
					if($delete) {
						$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q6_choice6', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q7_choice7', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q8_choice8', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q9_choice9', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q10_choice10', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q11_choice11', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q12_choice12', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q13_choice13', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q14_choice14', '$date_registered')");
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

					$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q6_choice6', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q7_choice7', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q8_choice8', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q9_choice9', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q10_choice10', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q11_choice11', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q12_choice12', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q13_choice13', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q14_choice14', '$date_registered')");
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

			$save = mysqli_query($conn, "INSERT INTO academic_strand (user_Id, q1, q1_choice1, q2, q2_choice2, q3, q3_choice3, q4, q4_choice4, q5, q5_choice5, q6, q6_choice6, q7, q7_choice7, q8, q8_choice8, q9, q9_choice9, q10, q10_choice10, q11, q11_choice11, q12, q12_choice12, q13, q13_choice13, q14, q14_choice14, q15, q15_choice15, track_assessment_date) VALUES ('$user_Id', '$q1', '$q1_choice1', '$q2', '$q2_choice2', '$q3', '$q3_choice3', '$q4', '$q4_choice4', '$q5', '$q5_choice5', '$q6', '$q6_choice6', '$q7', '$q7_choice7', '$q8', '$q8_choice8', '$q9', '$q9_choice9', '$q10', '$q10_choice10', '$q11', '$q11_choice11', '$q12', '$q12_choice12', '$q13', '$q13_choice13', '$q14', '$q14_choice14', '$q15', '$q15_choice15', '$date_registered')");
			if($save) {

				$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q6_choice6', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q7_choice7', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q8_choice8', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q9_choice9', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q10_choice10', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q11_choice11', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q12_choice12', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q13_choice13', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO academic_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q14_choice14', '$date_registered')");
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

		$user_Id = $_POST['user_Id'];
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


		$fetch = mysqli_query($conn, "SELECT * FROM tvl_strand WHERE user_Id='$user_Id'");
		// $fetch = mysqli_query($conn, "SELECT * FROM tvl_strand WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
		if(mysqli_num_rows($fetch) > 0) {
			$update = mysqli_query($conn, "UPDATE tvl_strand SET q1='$q1', q1_choice1='$q1_choice1', q2='$q2', q2_choice2='$q2_choice2', q3='$q3', q3_choice3='$q3_choice3', q4='$q4', q4_choice4='$q4_choice4', q5='$q5', q5_choice5='$q5_choice5', q6='$q6', q6_choice6='$q6_choice6', q7='$q7', q7_choice7='$q7_choice7', q8='$q8', q8_choice8='$q8_choice8', q9='$q9', q9_choice9='$q9_choice9', q10='$q10', q10_choice10='$q10_choice10', q11='$q11', q11_choice11='$q11_choice11', q12='$q12', q12_choice12='$q12_choice12', q13='$q13', q13_choice13='$q13_choice13', q14='$q14', q14_choice14='$q14_choice14', q15='$q15', q15_choice15='$q15_choice15' WHERE user_Id='$user_Id' AND track_assessment_date='$date_registered'");
			if($update) {
				$fetch2 = mysqli_query($conn, "SELECT * FROM tvl_strand_sort WHERE user_Id='$user_Id'");
				// $fetch2 = mysqli_query($conn, "SELECT * FROM tvl_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
				if(mysqli_num_rows($fetch2) > 0) {

					$delete = mysqli_query($conn, "DELETE FROM tvl_strand_sort WHERE user_Id='$user_Id'");
					// $delete = mysqli_query($conn, "DELETE FROM tvl_strand_sort WHERE user_Id='$user_Id' AND assessment_date='$date_registered'");
					if($delete) {
						$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q6_choice6', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q7_choice7', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q8_choice8', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q9_choice9', '$date_registered')");
						$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q10_choice10', '$date_registered')");

						$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q11_choice11', '$date_registered')");
						$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q12_choice12', '$date_registered')");
						$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q13_choice13', '$date_registered')");
						$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q14_choice14', '$date_registered')");
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

					$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q6_choice6', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q7_choice7', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q8_choice8', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q9_choice9', '$date_registered')");
					$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q10_choice10', '$date_registered')");

					$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q11_choice11', '$date_registered')");
					$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q12_choice12', '$date_registered')");
					$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q13_choice13', '$date_registered')");
					$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q14_choice14', '$date_registered')");
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

			$save = mysqli_query($conn, "INSERT INTO tvl_strand (user_Id, q1, q1_choice1, q2, q2_choice2, q3, q3_choice3, q4, q4_choice4, q5, q5_choice5, q6, q6_choice6, q7, q7_choice7, q8, q8_choice8, q9, q9_choice9, q10, q10_choice10, q11, q11_choice11, q12, q12_choice12, q13, q13_choice13, q14, q14_choice14, q15, q15_choice15, track_assessment_date) VALUES ('$user_Id', '$q1', '$q1_choice1', '$q2', '$q2_choice2', '$q3', '$q3_choice3', '$q4', '$q4_choice4', '$q5', '$q5_choice5', '$q6', '$q6_choice6', '$q7', '$q7_choice7', '$q8', '$q8_choice8', '$q9', '$q9_choice9', '$q10', '$q10_choice10', '$q11', '$q11_choice11', '$q12', '$q12_choice12', '$q13', '$q13_choice13', '$q14', '$q14_choice14', '$q15', '$q15_choice15', '$date_registered')");
			if($save) {

				$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q1_choice1', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q2_choice2', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q3_choice3', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q4_choice4', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q5_choice5', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q6_choice6', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q7_choice7', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q8_choice8', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q9_choice9', '$date_registered')");
				$save6 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q10_choice10', '$date_registered')");

				$save2 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q11_choice11', '$date_registered')");
				$save3 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q12_choice12', '$date_registered')");
				$save4 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q13_choice13', '$date_registered')");
				$save5 = mysqli_query($conn, "INSERT INTO tvl_strand_sort (user_Id, strand_answer, assessment_date) VALUES ('$user_Id', '$q14_choice14', '$date_registered')");
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

?>