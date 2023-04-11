<?php

include_once("../config.php");
include_once("db.php");

class audit {

	
	public function __construct(){
		
		
	}
	
	public function listAudits($start, $end) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_auditcontrols WHERE con_user=".$_SESSION["userid"]." ORDER BY idcontrol DESC, con_date DESC LIMIT " . $start . ", " . $end;
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
	
	public function listAuditControlsForReport($startDate, $endDate) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_auditcontrols WHERE con_user=".$_SESSION["userid"]." AND con_date >= "
		." '".date("Y-m-d", strtotime($startDate))."' AND con_date <= '".date("Y-m-d", strtotime($endDate))."' ORDER BY idcontrol DESC, con_date DESC";
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
	
	
	//LISTS ALL USERS CONTROLS TO COMBO BOX
	public function listAllControls($user) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_ascontrols LEFT JOIN as_assessment ON as_ascontrols.ct_assessment=as_assessment.idassessment  WHERE as_assessment.as_user=".$user." ORDER BY as_ascontrols.ct_descript";
		
		$result=$conn->query($query);
		$response="";
		while ($row=$result->fetch_assoc()) {
			$response.='<option value="' . $row["idcontrol"] . '"';
			$response.='>' . $row["ct_descript"] . '</option>';
		}
		$db->disconnect($conn);
		return $response;
	
	}
	
	public function listCriteria($id,$start, $end) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_auditcriteria WHERE cri_control=".$id." ORDER BY idcriteria LIMIT " . $start . ", " . $end;
	
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
	
	public function listCriteriaForReport($id) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_auditcriteria WHERE cri_control=".$id." ORDER BY idcriteria";
	
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
	
	
	
	
	//ADD NEW AUDIT
	public function addAudit($company, $industry, $team, $task, $assessor, $site, $date, $time, $street, $building, $zipcode, $state, $country, $control) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="INSERT INTO as_auditcontrols VALUES (0, " . 
				"" . $_SESSION["userid"] . ", " .
				"'" . $company . "', " .
				"'" . $industry . "', " .
				"'" . $team . "', " .
				"'" . $task . "', " .
				"'" . $assessor . "', " .
				"'" . $site . "', " .
				"'" . date("Y-m-d", strtotime($date)) . "', " .
				"'" . $time . "', " .
				"'" . $street . "', " .
				"'" . $building . "', " .
				"'" . $zipcode . "', " .
				"'" . $state . "', " .
				"'" . $country . "', " .
				"'" . $control . "', " .
				"0,'','','',0);";
		
		if ($conn->query($query)) {
			$response=$conn->insert_id;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	//EDIT AUDIT
	public function editAudit($id, $company, $industry, $team, $task, $assessor, $site, $date, $time, $street, $building, $zipcode, $state, $country, $control) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="UPDATE as_auditcontrols SET " . 
				" con_company='" . $company . "', " .
				" con_industry='" . $industry . "', " .
				" con_team='" . $team . "', " .
				" con_task='" . $task . "', " .
				" con_assessor='" . $assessor . "', " .
				" con_site='" . $site . "', " .
				" con_date='" . date("Y-m-d", strtotime($date)) . "', " .
				" con_time='" . $time . "', " .
				" con_street='" . $street . "', " .
				" con_building='" . $building . "', " .
				" con_zipcode='" . $zipcode . "', " .
				" con_state='" . $state . "', " .
				" con_country='" . $country . "', " .
				" con_control='" . $control . "' WHERE idcontrol=" . $id;
		
		
		if ($conn->query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	//UPDATE CONTROL EFFECTIVNESS
	public function updateEffect($id, $effect, $observation, $rootcause, $treatment, $frequency) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="UPDATE as_auditcontrols SET " . 
				" con_effect='" . $effect . "', " .
				" con_observation='" . $observation . "', " .
				" con_rootcause='" . $rootcause . "', " .
				" con_treatment='" . $treatment . "', " .
				" con_frequency='" . $frequency . "' WHERE idcontrol=" . $id;
		
		
		if ($conn->query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function addCriteria($control, $question, $procedure, $expected, $outcome, $notes) {
	
		$db=new db();
		$conn=$db->connect();
		$query="INSERT INTO as_auditcriteria VALUES (0, " 
						. "" . $control . ", "
						. "'" . $question . "', "
						. "'" . $procedure . "', "
						. "'" . $expected . "', "
						. "" . $outcome . ", "
						. "'" . $notes . "');";

		if ($conn->query($query)) {
			$response=$conn->insert_id;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function editCriteria($id, $control,$question, $procedure, $expected, $outcome, $notes) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="UPDATE as_auditcriteria SET "
		        . "cri_control='" . $control . "', "
				. "cri_question='" . $question . "', "
				. "cri_procedure='" . $procedure . "', "
				. "cri_expected='" . $expected . "', "
				. "cri_outcome=" . $outcome . ", "
				. "cri_notes='" . $notes . "' WHERE idcriteria=" . $id;
		
		if ($conn->query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function deleteAudit($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="DELETE FROM as_auditcontrols WHERE idcontrol=".$id.";";
		$query.="DELETE FROM as_criteria WHERE cri_audit=".$id.";";
		
		if ($conn->multi_query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}

	
	public function deleteCriteria($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="DELETE FROM as_auditcriteria WHERE idcriteria=".$id.";";
		
		if ($conn->query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}

	
	public function getControlInfo($id) {
	
		$db=new db;
		$conn=$db->connect();
		
		$query="SELECT * FROM as_ascontrols LEFT JOIN as_assessment ON as_ascontrols.ct_assessment=as_assessment.idassessment  WHERE as_ascontrols.idcontrol=".$id;

		$info=array();

		$result=$conn->query($query);
		if ($row=$result->fetch_assoc()) {
			$info["control"]=$row["ct_descript"];
			$info["team"]=$row["as_team"];
			$info["task"]=$row["as_task"];
			$info["assessor"]=$row["as_assessor"];
		}
		
		$db->disconnect($conn);
		return json_encode($info);
	
	}
		
	public function getAudit($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="SELECT * FROM as_auditcontrols WHERE idcontrol=".$id;
		
		if ($result=$conn->query($query)) {
			$row=$result->fetch_assoc();
			$response=$row;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function getCriteria($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="SELECT * FROM as_auditcriteria WHERE idcriteria=".$id;
		
		if ($result=$conn->query($query)) {
			$row=$result->fetch_assoc();
			$response=$row;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	public function getControlName($id) {
		
		$db=new db();
		$conn=$db->connect();
		$result=$conn->query("SELECT * FROM as_ascontrols WHERE idcontrol=" . $id);
		$row=$result->fetch_assoc();
		$response=$row["ct_descript"];
		$db->disconnect($conn);
		return $response;
	}

	
	public function getNext($date, $freq) {
			
			if ($freq==0) {
				$next="Not set";
			} else {
				$next=strtotime($date)+($freq*24*60*60);
				$next=date("m/d/Y", $next);	
			}	
			return $next;
	}
	
	public function getFrequency($freq) {
			
			if ($freq==0) {
				return "Not set";
			} else if ($freq==1) {
				return "Daily";	
			} else if ($freq==7) {
					return "Weekly";
			} else if ($freq==30) {
					return "Monthly";
			} else if ($freq==182) {
					return "6 Monthly";
			} else if ($freq==365) {
					return "Yearly";
			}						
	}
	
	public function getEffectiveness($effe){
		if($effe == 0) {
			return "Not Selected";
		} else if($effe == 1){
			return "Ineffective";
		} else if($effe == 2){
			return "Effective";
		}
	}
	
	public function getOutcome($out){
		if($out == 0) {
			return "N/A";
		} else if($out == 1){
			return "Pass";
		} else if($out == 2){
			return "Fail";
		}
	} 
}

?>