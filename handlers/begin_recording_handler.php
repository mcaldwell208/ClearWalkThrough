<?php 
session_start();
require "../dao.php";
$dao = new dao();

// post variables
$teacher = $_POST['teacher'];
$date = $_POST['date'];
$period = $_POST['period'];
	$period = $dao -> cleanText($period);
$observer = $_SESSION['user']['userID'];

	// create observation record in db
	$dao -> createObservation($date, $teacher, $observer, $period);
	
	// get observation ID from db
	$obsIDs = $dao -> getObsID($date, $teacher, $observer, $period);
		foreach ($obsIDs as $obsID) {
			$obsID = $obsID["xternalID"];
		} // end foreach
	// get teacher name from users db
	$users = $dao -> getUserByID($teacher);
		foreach ($users as $user) {
			$firstname = $user["firstname"];
			$lastname = $user["lastname"];
		$tchrName = $firstname." ".$lastname;
		} // end foreach

	//set session variables
			$_SESSION['recording']['activated'] = true;
			$_SESSION['recording']['obsID'] = $obsID; 
			$_SESSION['recording']['teacherID'] = $teacher;
			$_SESSION['recording']['teacherName'] = $tchrName;
			$_SESSION['recording']['obsDate'] = $date;
			$_SESSION['recording']['classPeriod'] = $period;
			$_SESSION['recording']['startTime'] = time();

		// return to observation recording page
		header("Location:../obs_recorder.php");
	

