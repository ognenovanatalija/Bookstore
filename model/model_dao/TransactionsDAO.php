<?php
//declare(strict_types=1);

require_once "model_pojo/Transactions.php";
class TransactionsDAO extends Transactions
{

    private  $table_name = "transactions";
    private $database = null;

    public function __construct($DB){
        //Dependency
        $this->database = $DB;
    }

 
    public function insertTransactions()
    {
        $quantity=parent::getQuantity();
        //$transactions_date=parent::getTransactions_date();
        $books_id=parent::getBooks_id();
        $clients_id=parent::getClients_id();

        $columnName="quantity,transactions_date,books_id,clients_id";
        $columnValue="'$quantity',now(),'$books_id','$clients_id'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    
    public function deleteTransactions()
    {
        $pk_name = "transactions_id";
        $pk_value = parent::getTransactions_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

   
    public function updateTransactions()
    {
        $quantity=parent::getQuantity();
        $transactions_date=parent::getTransactions_date();
        $books_id=parent::getBooks_id();
        $clients_id=parent::getClients_id();
        
        $columns=   "quantity='$quantity',
                    transactions_date='$transactions_date'
                    books_id='$books_id',
                    clients_id='$clients_id'";

        $pk_name="transactions_id";
        $pk_value = parent::getTransactions_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }


    public function selectTransactions()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name." INNER JOIN books ON books.books_id=transactions.books_id 
                                                            INNER JOIN languages
                                                            ON languages.language_id=books.language_id
                                                            INNER JOIN clients
                                                            ON clients.clients_id=transactions.clients_id"); 
    }

}
