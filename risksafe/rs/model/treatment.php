<?php

include_once("../config.php");
include_once("db.php");

class treatment {

	
	public function __construct(){
		
		
	}
	
	public function listTreatments($start, $end) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_treatments WHERE tre_user=".$_SESSION["userid"]." ORDER BY idtreatment DESC, tre_start DESC LIMIT " . $start . ", " . $end;
		if ($result=$conn->query($query)) {	
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			$response=$data;
		} else {
			$response=false;	
		}
		$db->disconnect($conn);
		return $response;
	
	}
	
	
	//LISTS ALL USERS TREATMENTS TO COMBO BOX
	public function listAllTreatments($user) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_astreat LEFT JOIN as_assessment ON as_astreat.tr_assessment=as_assessment.idassessment WHERE as_assessment.as_user=".$user." ORDER BY as_astreat.tr_descript";
		
		$result=$conn->query($query);
		$response="";
		while ($row=$result->fetch_assoc()) {
			$response.='<option value="' . $row["idtreat"] . '"';
			$response.='>' . $row["tr_descript"] . '</option>';
		}
		$db->disconnect($conn);
		return $response;
	
	}
	
	public function listTreatmentsForReport() {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_treatments WHERE tre_user=".$_SESSION["userid"]." ORDER BY idtreatment DESC";
		if ($result=$conn->query($query)) {	
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			$response=$data;
		} else {
			$response=false;	
		}
		$db->disconnect($conn);
		return $response;
	
	}
	
	//ADD NEW TREATMENT
	public function addTreatment($assessor, $team, $treatment, $cost_ben, $progress, $owner, $start, $due, $status) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="INSERT INTO as_treatments VALUES (0, " . 
				"" . $_SESSION["userid"] . ", " .
				"'" . $team . "', " .
				"'" . $assessor . "', " .
				"'" . $treatment . "', " .
				"'" . $cost_ben . "', " .
				"'" . str_replace("'", "\'", $progress) . "', " .
				"'" . $owner . "', " .
				"'" . date("Y-m-d", strtotime($start)) . "', " .
				"'" . date("Y-m-d", strtotime($due))  . "', " .
				"" . $status . ");";
		
		
		if ($conn->query($query)) {
			$response=$conn->insert_id;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	//EDIT AUDIT
	public function editTreatment($id, $assessor, $team, $treatment, $cost_ben, $progress, $owner, $start, $due, $status) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="UPDATE as_treatments SET " . 
				" tre_assessor='" . $assessor . "', " .
				" tre_team='" . $team . "', " .
				" tre_treatment='" . $treatment . "', " .
				" tre_cost_ben='" . $cost_ben . "', " .
				" tre_progress='" . str_replace("'", "\'", $progress) . "', " .
				" tre_owner='" . $owner . "', " .
				" tre_start='" . date("Y-m-d", strtotime($start)) . "', " .
				" tre_due='" . date("Y-m-d", strtotime($due)) . "', " .
				" tre_status=" . $status . " WHERE idtreatment=" . $id;
		
		
		if ($conn->query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function deleteTreatment($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="DELETE FROM as_treatments WHERE idtreatment=".$id.";";
		
		if ($conn->multi_query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}


	
	public function getTreatmentInfo($id) {
	
		$db=new db;
		$conn=$db->connect();
		
		$query="SELECT * FROM as_astreat LEFT JOIN as_assessment ON as_astreat.tr_assessment=as_assessment.idassessment  WHERE as_astreat.idtreat=".$id;

		$info=array();

		$result=$conn->query($query);
		if ($row=$result->fetch_assoc()) {
			$info["treatment"]=$row["tr_descript"];
			$info["team"]=$row["as_team"];
			$info["assessor"]=$row["as_assessor"];
		}
		
		$db->disconnect($conn);
		return json_encode($info);
	
	}
		
	public function getTreatment($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="SELECT * FROM as_treatments WHERE idtreatment=".$id;
		
		if ($result=$conn->query($query)) {
			$row=$result->fetch_assoc();
			$response=$row;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function getTreatmentName($id) {
		
		$db=new db();
		$conn=$db->connect();
		$result=$conn->query("SELECT * FROM as_astreat WHERE idtreat=" . $id);
		$row=$result->fetch_assoc();
		$response=$row["tr_descript"];
		$db->disconnect($conn);
		return $response;
	}

	
	public function getDays($start, $due) {
			
			$next=strtotime($due)-strtotime($start);
			$next=ceil($next/60/60/24);
	
			return $next;
	}
}

?>