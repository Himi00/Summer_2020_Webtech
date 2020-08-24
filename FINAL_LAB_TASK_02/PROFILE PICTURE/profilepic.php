<?php

	if(isset($_POST['submit'])){
			$filedir = 'picture/'.$_FILES['photo']['name'];
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $filedir)){
				echo "Successfully Uploaded";
			}else{
				echo "Something Went Wrong";
			}
		}
?>