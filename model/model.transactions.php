<?php
require_once "../lib/database.php";
require_once "model_dao/TransactionsDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objTransactionsDAO = new TransactionsDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$quantity=$data[0]->quantity;
		//$transactions_date=$data[0]->transactions_date;
		$books_id=$data[0]->books_id;
		$clients_id=$data[0]->clients_id;

		$objTransactionsDAO->setQuantity($quantity);//pojo
		//$objTransactionsDAO->setTransactions_date($transactions_date);//pojo	
		$objTransactionsDAO->setBooks_id($books_id);//pojo
        $objTransactionsDAO->setClients_id($clients_id);//pojo

		$objTransactionsDAO->insertTransactions();//dao
	break;
	case "update":
		$objTransactionsDAO->setQuantity();//pojo
		$objTransactionsDAO->setTransactions_date();//pojo	
		$objTransactionsDAO->setBooks_id();//pojo
        $objTransactionsDAO->setClients_id();//pojo
        
        $objTransactionsDAO->updateTransactions();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;
		$objTransactionsDAO->setTransactions_id($pk_value);

        $objTransactionsDAO->deleteTransactions();
	break;
}
?>
