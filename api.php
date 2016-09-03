<?php include 'config.php'; 
session_start();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
if(!empty($action)){
	switch($action){
		case 'insert_data' : 
				$name = $_SESSION['name'];
				$id = $_SESSION['id'];
				echo $name;
				echo $id;
				$query = "SELECT * FROM `fb_details` ;";
				$res = mysqli_query($connect, $query);
                              if (mysqli_num_rows($res) > 0) {       
                              while($row = mysqli_fetch_assoc($res)) {
                              	if($row['name'] == $name && $row['id'] = $id)
                              	{
                              		echo "already registerd";

                              	}
                              	else{

                              		$query = "INSERT INTO `fb_details` VALUES ('NULL','".$name."','".$id."');";
			if ($connect->query($query) === TRUE) {
				   echo "success";
				} 
                              		
                              	}
                              }
                          }

			

	}
}


?>