<?php
require_once "../lib/database.php";
require_once "model_dao/PublisherDAO.php";
$data=json_decode(file_get_contents("php://input"));

// var_dump($data) //print array
// echo $data[0]->action;

//instance
$DB = new Database();
$objPublisherDAO = new PublisherDAO($DB);

$action=$data[0]->action;
switch($action){

	case "insert":
		$publisher_name=$data[0]->publisher_name;
		$publisher_country=$data[0]->publisher_country;

		$objPublisherDAO->setPublisher_name($publisher_name);//pojo
		$objPublisherDAO->setPublisher_country($publisher_country);//pojo	

		$objPublisherDAO->insertPublisher();
	
		break;

    case "update":
		
			$objPublisherDAO->setPublisher_name('');//pojo
			$objPublisherDAO->setPublisher_country('');//pojo	
			
			$objPublisherDAO->updatePublisher();
		
		break;

	case "delete":
		    $pk_value=$data[0]->pk_value;
			$objPublisherDAO->setPublisher_id($pk_value);
	
			$objPublisherDAO->deletePublisher();
		break;
}
?>