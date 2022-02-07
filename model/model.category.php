<?php
require_once "../lib/database.php";
require_once "model_dao/CategoryDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objCategoryDAO = new CategoryDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$category_name=$data[0]->category_name;

		$objCategoryDAO->setCategory_name($category_name);//pojo
		
		$objCategoryDAO->insertCategory();//dao
	break;
	case "update":
		$objCategoryDAO->setCategory_name('');

        $objCategoryDAO->updateCategory();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objCategoryDAO->setCategory_id($pk_value);

        $objCategoryDAO->deleteCategory();
	break;
}
?>
