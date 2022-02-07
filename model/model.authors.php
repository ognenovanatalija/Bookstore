<?php
require_once "../lib/database.php";
require_once "model_dao/AuthorsDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data) //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objAuthorsDAO = new AuthorsDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$authors_first_name=$data[0]->authors_first_name;
		$authors_last_name=$data[0]->authors_last_name;

		$objAuthorsDAO->setAuthors_first_name($authors_first_name);
		$objAuthorsDAO->setAuthors_last_name($authors_last_name);	
		
		$objAuthorsDAO->insertAuthors();
	break;
	case "update":
		$objAuthorsDAO->setAuthors_first_name("");
        $objAuthorsDAO->setAuthors_last_name("");

        $objAuthorsDAO->updateAuthors();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objAuthorsDAO->setAuthors_id($pk_value);

        $objAuthorsDAO->deleteAuthors();
	break;
    
}
?>
