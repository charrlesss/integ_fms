<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}


if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}

if($action == "save_leave"){
	$save = $crud->save_leave();
	if($save)
		echo $save;
}

if($action == "save_reimbursement"){
	$save = $crud->save_reimbursement();
	if($save)
	echo $save;
}

if($action == "update_reimbursement"){
	$save = $crud->update_reimbursement();
	if($save)
	echo $save;
}

if($action == "save_compensation"){
	$save = $crud->save_compensation();
	if($save)
	echo $save;
}

if($action == "delete_payroll"){
	$save = $crud->delete_payroll();
	if($save)
		echo $save;
}

if($action == "calc_payroll"){
	$save = $crud->calc_payroll();
	if($save)
	echo $save;
}