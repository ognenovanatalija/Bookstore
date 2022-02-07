<?php
require_once "../lib/database.php";
require_once "model_dao/ClientsDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objClientsDAO = new ClientsDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$clients_first_name=$data[0]->clients_first_name;
		$clients_last_name=$data[0]->clients_last_name;
		$clients_town=$data[0]->clients_town;
		$clients_country=$data[0]->clients_country;
		$clients_continent=$data[0]->clients_continent;
		$clients_address=$data[0]->clients_address;
		$clients_address_number=$data[0]->clients_address_number;
		$clients_number=$data[0]->clients_number;
		$clients_email=$data[0]->clients_email;
		$clients_username=$data[0]->clients_username;
		$clients_password=$data[0]->clients_password;


		$objClientsDAO->setClients_first_name($clients_first_name);//pojo
		$objClientsDAO->setClients_last_name($clients_last_name);//pojo	
		$objClientsDAO->setClients_town($clients_town);//pojo
		$objClientsDAO->setClients_country($clients_country);//pojo	
        $objClientsDAO->setClients_continent(clients_continent);//pojo
		$objClientsDAO->setClients_address($clients_address);//pojo	
        $objClientsDAO->setClients_address_number($clients_address_number);//pojo
		$objClientsDAO->setClients_number($clients_number);//pojo
		$objClientsDAO->setClients_email($clients_email);//pojo
        $objClientsDAO->setClients_username($clients_username);//pojo
		$objClientsDAO->setClients_password($clients_password);//pojo	

		$objClientsDAO->insertClients();//dao
	break;
	case "update":
		$objClientsDAO->setClients_first_name('');//pojo
		$objClientsDAO->setClients_last_name('');//pojo	
		$objClientsDAO->setClients_town('');//pojo
		$objClientsDAO->setClients_country('');//pojo	
        $objClientsDAO->setClients_continent('');//pojo
		$objClientsDAO->setClients_address('');//pojo	
        $objClientsDAO->setClients_address_number('');//pojo
		$objClientsDAO->setClients_number('');//pojo
		$objClientsDAO->setClients_email('');//pojo
        $objClientsDAO->setClients_username('');//pojo
		$objClientsDAO->setClients_password('');//pojo	

        $objClientsDAO->updateClients();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objClientsDAO->setClients_id($pk_value);

        $objClientsDAO->deleteClients();
	break;
}
?>