<?php
require_once "../lib/database.php";
require_once "model_dao/LanguagesDAO.php";
$data=json_decode(file_get_contents("php://input"));

// var_dump($data) //print array
// echo $data[0]->action;

//instance
$DB = new Database();
$objLanguagesDAO = new LanguagesDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$category_name=$data[0]->category_name;

		$objLanguagesDAO->setLanguage_name($language_name);//pojo

		$objLanguagesDAO->insertLanguages();
	break;
	case "update":
		$objLanguagesDAO->setLanguage_name('');
        

        $objLanguagesDAO->updateLanguages();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objLanguagesDAO->setLanguage_id($pk_value);

        $objLanguagesDAO->deleteLanguages();
	break;
}
?>
