<?php

include_once("../config.php");
include_once("db.php");
 
class users {
	
	
	public function __construct(){
		
		
	}

	
	public function addUser($mail, $password, $name, $phone, $location, $company, $otp,$comaddress, $city, $state, $postcode, $country) {
		
		$password_md5=md5($password);
		$datetime=date("Y-m-d H:i:s");
		$expire=date("Y-m-d H:i:s",time()+(14*24*60*60));
		
		$db=new db;
		$conn=$db->connect();
		$query="INSERT INTO users VALUES (0, 
				'" . $mail . "', 
				'" . $password_md5 . "', 
				'" . $name . "', 
				'" . $phone . "', 
				'" . $location . "', 
				'" . $company . "', 
				'" . $comaddress . "', 
				'" . $city . "', 
				'" . $state . "', 
				'" . $postcode . "', 
				'" . $country . "', 
				" . "0" . ", 
				'" . $otp. "',
				'" . $datetime . "', 
				'" . $expire . "');";
		
				
		if ($conn->query($query)) {
			$query="INSERT INTO as_context VALUES (0, " . $conn->insert_id . ", '','','','','','','','','','','');";
			if ($conn->query($query)) {
				return true;
			} else {
				return false;	
			}
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
		
	}
	
	public function updateUser($id, $mail, $password, $name, $phone, $location, $company, $comaddress, $city, $state, $postcode, $country) {
		
		$db=new db;
		$conn=$db->connect();
			
		$password_md5=md5($password);
		
		//check password
		$query="SELECT * FROM users WHERE iduser=" . $id;
		$result=$conn->query($query);
		$usr=$result->fetch_assoc();
		
		if ($usr["u_password"]==$password_md5) {
			$query="UPDATE users SET
					u_mail='" . $mail . "', 
					u_name='" . $name . "', 
					u_phone='" . $phone . "', 
					u_location='" . $location . "', 
					c_company='" . $company . "', 
					c_address='" . $comaddress . "', 
					c_city='" . $city . "', 
					c_state='" . $state . "', 
					c_postcode='" . $postcode . "', 
					u_complete=1, 
					c_country='" . $country . "' WHERE iduser=" . $id;

		} else {
			$query="UPDATE users SET
					u_mail='" . $mail . "', 
					u_password='" . $password_md5 . "', 
					u_name='" . $name . "', 
					u_phone='" . $phone . "', 
					u_location='" . $location . "', 
					c_company='" . $company . "', 
					c_address='" . $comaddress . "', 
					c_city='" . $city . "', 
					c_state='" . $state . "', 
					c_postcode='" . $postcode . "', 
					u_complete=1, 
					c_country='" . $country . "' WHERE iduser=" . $id;
		}
	
				
		if ($conn->query($query)) {
			return true;
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
	}
	
	public function checkUser($mail) {
		
		$db=new db;
		$conn=$db->connect();
		
		//check username/mail
		$query="SELECT * FROM users WHERE u_mail='" . $mail . "';";
		$result=$conn->query($query);
				
		if ($result->num_rows>0) {
			return true;
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
		
	}
	
	public function getUser($userid) {
		
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM users WHERE iduser=" . $userid . " LIMIT 0,1";
		if ($result=$conn->query($query)) {
			if ($row=$result->fetch_assoc()) {
				$filtered = array_map('htmlspecialchars', array_map('stripslashes', $row)); 
				return $filtered;
			}
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
		
	}
	
	
	public function loginUser($mail, $password) {
		
		$db=new db;
		$conn=$db->connect();
		$password=md5($password);
			
		$query="SELECT * FROM users WHERE u_mail='" . $mail . "' AND u_password='" . $password . "';";
		
		if (trim($mail)<>"" and trim($password)<>"" and $result=$conn->query($query) and $result->num_rows>0) {
			$row=$result->fetch_assoc();
			$_SESSION["logged"]=true;
			$_SESSION["email"]=$row["u_mail"];
			$_SESSION["name"]=$row["u_name"];
			$_SESSION["userid"]=$row["iduser"];
			return true;
		} else {
			$this->logoutUser();
			return false;	
		}

	$db->disconnect($conn);	
		
	}
	
	public function logoutUser() {
			
	  unset($_SESSION["logged"]);
	  unset($_SESSION["email"]);
	  unset($_SESSION["name"]);
	  unset($_SESSION["userid"]);
	  return true;	
	
	}
	
	public function isLogged() {
			
	  	if (isset($_SESSION["logged"]) and $_SESSION["logged"]==true) {
	  		return true;	
		} else {
			return false;	
		}
	
	}
	
	public function updateContext($id, $objectives, $processes, $products, $projects, $systems, $relationships, $internallosses, $externallosses, $competitors, $environment, $regulatory) {
		
		$db=new db;
		$conn=$db->connect();
			
		$query="UPDATE as_context SET
				cx_objectives='" . str_replace("'", "\'", $objectives) . "', 
				cx_processes='" . str_replace("'", "\'", $processes) . "', 
				cx_products='" .str_replace("'", "\'", $products) . "', 
				cx_projects='" . str_replace("'", "\'", $projects) . "', 
				cx_systems='" . str_replace("'", "\'", $systems) . "', 
				cx_relation='" . str_replace("'", "\'", $relationships) . "', 
				cx_internallosses='" . str_replace("'", "\'", $internallosses) . "', 
				cx_externallosses='" . str_replace("'", "\'", $externallosses) . "', 
				cx_competitors='" . str_replace("'", "\'", $competitors) . "', 
				cx_environment='" . str_replace("'", "\'", $environment) . "',
				cx_regulatory='" . str_replace("'", "\'", $regulatory) . "' WHERE idcontext=" . $id;


		if ($conn->query($query)) {
			return true;
		} else {
			return false;	
		}
		
		$db->disconnect($conn);

		
	}
		
	public function getContext($userid) {
		
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_context WHERE cx_user=" . $userid . " LIMIT 0,1";
		if ($result=$conn->query($query)) {
			if ($row=$result->fetch_assoc()) {
				$filtered = array_map('htmlspecialchars', array_map('stripslashes', $row)); 
				return $filtered;
			}
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
		
	}

	// update otp
	public function updateOtp($mail,$otp) {
   
		$db=new db;
		$conn=$db->connect();
	
			$query="UPDATE users SET 
					u_otp='" . $otp . "' WHERE u_mail='" . $mail . "';";

		if ($conn->query($query)) {
			return true;
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
	}
	

//update password
	public function updateEmailUser($mail,$password) {
   
		$db=new db;
		$conn=$db->connect();
		//check password
		// $query="SELECT * FROM users WHERE u_mail=" . $mail;
		
		// $result=$conn->query($query);
		// $usr=$result->fetch_assoc()
			

		$query="UPDATE users SET 
		u_password='" .md5($password). "' WHERE u_mail='" . $mail . "';";


	// echo $query;
				
		if ($conn->query($query)) {
			return true;
		} else {
			return false;	
		}
		
		$db->disconnect($conn);
	}
	
}


?>