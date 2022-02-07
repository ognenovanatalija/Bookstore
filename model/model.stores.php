<?php
require_once "../lib/database.php";
require_once "model_dao/StoresDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objStoresDAO = new StoresDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
        $stores_name=$data[0]->stores_name;
        $stores_town=$data[0]->stores_town;
        $stores_country=$data[0]->stores_country;
        $stores_continent=$data[0]->stores_continent;
        $stores_address=$data[0]->stores_address;
        $stores_address_number=$data[0]->stores_address_number;
        $stores_email=$data[0]->stores_email;
        $stores_number=$data[0]->stores_number;
        $staff_id=$data[0]->staff_id;

		$objStoresDAO->setStores_name($stores_name);//pojo
		$objStoresDAO->setStores_town($stores_town);//pojo	
		$objStoresDAO->setStores_country($stores_country);//pojo
        $objStoresDAO->setStores_continent($stores_continent);
        $objStoresDAO->setStores_address($stores_address);
        $objStoresDAO->setStores_address_number($stores_address_number);
        $objStoresDAO->setStores_email($stores_email);
        $objStoresDAO->setStores_number($stores_number);
        $objStoresDAO->setStaff_id($staff_id);

		$objStoresDAO->insertStores();//dao
	break;
	case "update":
		$objStoresDAO->setStores_name('');//pojo
		$objStoresDAO->setStores_town('');//pojo	
		$objStoresDAO->setStores_country('');//pojo
        $objStoresDAO->setStores_continent('');
        $objStoresDAO->setStores_address('');
        $objStoresDAO->setStores_address_number('');
        $objStoresDAO->setStores_email('');
        $objStoresDAO->setStores_number('');
        $objStoresDAO->setStaff_id('');

        $objStoresDAO->updateStores();
    break;
	case "delete":
        $pk_value=$data[0]->pk_value;
		$objStoresDAO->setStores_id($pk_value);

        $objStoresDAO->deleteStores();
	break;
}
?>
