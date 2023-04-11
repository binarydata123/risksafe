<?php

include_once("../config.php");
include_once("db.php");

class incidents {
	
	public function __construct(){}
	
	public function listIncidents($start, $end) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_incidents WHERE in_user=".$_SESSION["userid"]." ORDER BY idincident DESC, in_date DESC LIMIT " . $start . ", " . $end;
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
	
	public function listIncidentsForReport($startDate, $endDate) {
	
		$db=new db;
		$conn=$db->connect();
		$query="SELECT * FROM as_incidents WHERE in_user=".$_SESSION["userid"]." AND in_date >= "
		." '".date("Y-m-d", strtotime($startDate))."' AND in_date <= '".date("Y-m-d", strtotime($endDate))."' ORDER BY idincident DESC, in_date DESC";
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
		
	//ADD NEW incident
	public function addIncident($title, $date, $reported, $team, $descript, $impact, $priority, $status) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="INSERT INTO as_incidents VALUES (0, " . 
				"" . $_SESSION["userid"] . ", " .
				"'" . $title . "', " .
				"'" . date("Y-m-d", strtotime($date)) . "', " .
				"'" . $reported . "', " .
				"'" . $team . "', " .				
				"'" . str_replace("'", "\'", $descript) . "', " .
				"'" . str_replace("'", "\'", $impact) . "', " .
				"'" . $priority . "', " .
				"'" . $status . "');";
				
		if ($conn->query($query)) {
			$response=$conn->insert_id;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}
	
	//EDIT incident
	public function editIncident($id, $title, $date, $reported, $team, $descript, $impact, $priority, $status) {
	
		$db=new db();
		$conn=$db->connect();
		
		//idincident,in_user,in_title,in_date,in_reported,in_team,in_descript,in_impact,in_priority,in_status
		$query="UPDATE as_incidents SET " . 
				" in_title='" . $title . "', " .
				" in_date='" . date("Y-m-d", strtotime($date)) . "', " .
				" in_reported='" . $reported . "', " .
				" in_team='" . $team . "', " .
				" in_descript='" . str_replace("'", "\'", $descript) . "', " .
				" in_impact='" . str_replace("'", "\'", $impact) . "', " .
				" in_priority='" . $priority."', " .
				" in_status='" . $status . "' " . " WHERE idincident=" . $id;
		
		
		if ($conn->query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;	
	}
			
	public function deleteIncident($id) {
	
		$db=new db();
		$conn=$db->connect();		
		$query="DELETE FROM as_incidents WHERE idincident=".$id."";		
		
		if ($conn->multi_query($query)) {
			$response=true;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;		
	}

	public function getIncident($id) {
	
		$db=new db();
		$conn=$db->connect();
		
		$query="SELECT * FROM as_incidents WHERE idincident=".$id;
		
		if ($result=$conn->query($query)) {
			$row=$result->fetch_assoc();
			$response=$row;
		} else {
			$response=false;	
		}
		
		$db->disconnect($conn);
		return $response;
		
	}		
}

?>