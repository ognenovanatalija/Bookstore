<?php
require_once "../lib/database.php";
require_once "model_dao/FormatsDAO.php";
$data=json_decode(file_get_contents("php://input"));

// var_dump($data) //print array
// echo $data[0]->action;

//instance
$DB = new Database();
$objFormatsDAO = new FormatsDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$format_name=$data[0]->format_name;
		$objFormatsDAO->setFormat_name($format_name);//pojo
		
		$objFormatsDAO->insertFormats();//dao
	break;
	case "update":
		$objFormatsDAO->setFormat_name('');
        

        $objFormatsDAO->updateFormats();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objFormatsDAO->setFormat_id($pk_value);

        $objFormatsDAO->deleteFormats();
	break;
}
?>
