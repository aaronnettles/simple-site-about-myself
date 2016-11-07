<?php

require_once("member.php");

session_start();

// home content
$content = '
	<div align="center">
		<form action="member_files.php" method="post" enctype="multipart/form-data">
		    <br />Select Image<br /><br /><br />
		    <input type="file" name="data_file" id="data_file">
		    <input type="submit" value="Upload" name="upload">
		</form>
	</div>
';

if(!empty($_SESSION["valid_member"])) {
	$member = new Member($_SESSION["valid_member"]);

	// upload a file
	if(!empty("data_file") && !empty($_POST["upload"])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["data_file"]["name"]);
		$upload_success = 1;

		// test if file already exists
		if(file_exists($target_file)) {
		    $content .= '<p><br />That file already exists.<br /></p>';
		    $upload_success = 0;
		}

		// determine file size
		if($_FILES["data_file"]["size"] > 500000) {
		    $content .= '<p><br />Your file exceeds the size limit.<br /></p>';
		    $upload_success = 0;
		}

		// test if $upload_success is set to 0 by an error
		if($upload_success == 0) {
		    $content .= '<p><br />Your file was not uploaded.<br /></p>';
		} else { // if each test was passed, try to upload file
		    if(!empty("data_file") && move_uploaded_file($_FILES["data_file"]["tmp_name"], $target_file)) {
		        $content .= '<p><br />The file ' . basename($_FILES["data_file"]["name"]) . ' has been uploaded.<br /></p>';
		    } else {
		        $content .= '<p><br />There was an error uploading your file.<br /></p>';
		    }
		}
	}

	$member->main($content);
} else {
	print '
		window.location="visitor_member_entrance.php";
	';
}

?>