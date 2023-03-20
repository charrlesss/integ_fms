<?php
session_start();
ini_set('display_errors', 1);
Class Action{
    private $db;

    public function __construct(){
        ob_start();
        include 'db_connect.php';

        $this->db = $conn;
    }
    function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

    function login(){
		extract($_POST);
		$qry = $this->db->query("SELECT * FROM users where username = '".$username."' and password = '".$password."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}

    function logout(){
        session_destroy();
        foreach ($_SESSION as $key => $value) {
            unset($_SESSION[$key]);
        }
        header("location:/fms/admin/index.php");
    }

    function save_leave(){
		extract($_POST);
		$data = " leaveReason = '$status_label' ";
        $data .= ",leaveStartDate = '$lsd'";
        $data .=",leaveEndDate = '$led'";
        $data .=",leaveType = '$cars'";
        $data .= ",id ='$emp'";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO leavetbl set ".$data);
		}else{
			$save = $this->db->query("UPDATE leavetbl set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}

	function save_reimbursement(){
		extract($_POST);
		$pending = 'pending';
		$data = " id = '$emp1' ";
		$data .= ",title ='$title1' ";
		$data .=",dateReimbursment = '$dateReimbursment'";
		$data .= ",statu_claims = '$pending' ";
		$data .= ",amt = '$amt'";
		$data .=",note = '$note'";
		if(empty($id)){
				$save = $this->db->query("INSERT INTO claims SET ".$data);
		}else{
			$save = $this->db->query("UPDATE claims set ".$data." where id=".$id);
		}
		if($save)
		return 1;
	}

	function update_reimbursement(){
		extract($_POST);
		// $pending = 'approved';
		// $data = " id = '$emp1' ";
		// $data .= ",title ='$title1' ";
		// $data .=",dateReimbursment = '$dateReimbursment'";
		$data = "statu_claims = '$cars' ";
		// $data .= ",amt = '$amt'";
		// $data .=",note = '$note'";
		if(empty($id)){
				$save = $this->db->query("UPDATE claims set ".$data." where claimId=".$cid);
		}else{
			$save = $this->db->query("UPDATE claims set ".$data." where claimId=".$cid);
		}
		if($save)
		return 1;
	}

	function save_compensation(){
		extract($_POST);
		// $pending = 'pending';
		$data = " id = '$emp11' ";
		$data .= ",ss ='$ss' ";
		$data .= ",pagIbg ='$ph' ";
		$data .= ",phlhealth ='$pagibig' ";
		$data .= ",salary ='$salary' ";
		// $data .=",dateReimbursment = '$dateReimbursment'";
		// $data .= ",statu_claims = '$pending' ";
		// $data .= ",amt = '$amt'";
		// $data .=",note = '$note'";
		if(empty($id)){
				$save = $this->db->query("INSERT INTO compensation SET ".$data);
		}else{
			$save = $this->db->query("UPDATE compensation set ".$data." where id=".$id);
		}
		if($save)
		return 1;
	}

	function delete_payroll(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM payroll where id = ".$id);
		if($delete)
			return 1;
	}


	function calc_payroll(){
		extract($_POST);
		$am_in = "08:00";
		$am_out = "12:00";
		$pm_in = "13:00";
		$pm_out = "17:00";

		$pay = $this->db->query("SELECT * FROM payroll where id = ".$id)->fetch_array();
	}
}