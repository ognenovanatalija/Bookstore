<?php
require_once "../lib/database.php";
require_once "model_dao/StaffDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objStaffDAO = new StaffDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$staff_first_name=$data[0]->staff_first_name;
		$staff_last_name=$data[0]->staff_last_name;
		$staff_town=$data[0]->staff_town;
		$staff_country=$data[0]->staff_country;
		$staff_continent=$data[0]->staff_continent;
		$staff_address=$data[0]->staff_address;
		$staff_address_number=$data[0]->staff_address_number;
		$staff_number=$data[0]->staff_number;
		$staff_email=$data[0]->staff_email;

		$objStaffDAO->setStaff_first_name($staff_first_name);//pojo
		$objStaffDAO->setStaff_last_name($staff_last_name);//pojo	
		$objStaffDAO->setStaff_town($staff_town);//pojo
		$objStaffDAO->setStaff_country($staff_country);//pojo	
        $objStaffDAO->setStaff_continent($staff_continent);//pojo
		$objStaffDAO->setStaff_address($staff_address);//pojo	
        $objStaffDAO->setStaff_address_number($staff_address_number);//pojo
	    $objStaffDAO->setStaff_number($staff_number);//pojo
		$objStaffDAO->setStaff_email($staff_email);//pojo
        
		$objStaffDAO->insertStaff();//dao
	break;
	case "update":
		$objStaffDAO->setStaff_first_name('');//pojo
		$objStaffDAO->setStaff_last_name('');//pojo	
		$objStaffDAO->setStaff_town('');//pojo
		$objStaffDAO->setStaff_country('');//pojo	
        $objStaffDAO->setStaff_continent('');//pojo
		$objStaffDAO->setStaff_address('');//pojo	
        $objStaffDAO->setStaff_address_number('');//pojo
	    $objStaffDAO->setStaff_number('');//pojo
		$objStaffDAO->setStaff_email('');//pojo
        

        $objStaffDAO->updateStaff();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objStaffDAO->setStaff_id($pk_value);

        $objStaffDAO->deleteStaff();
	break;
}
?>