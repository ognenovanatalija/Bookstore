<?php
//declare(strict_types=1);
require_once "model_pojo/Publisher.php";//pojo

class PublisherDAO extends Publisher
{

    private  $table_name = "publisher";

    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }


    public function insertPublisher()
    {
        $publisher_name=parent::getPublisher_name();//pojo
        $publisher_country=parent::getPublisher_name();//pojo
        
        $columnName="publisher_name,publisher_country";
        $columnValue="'$publisher_name','$publisher_country'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

   
    public function deletePublisher()
    {
        $pk_name = "publisher_id";
        $pk_value = parent::getPublisher_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

    
    public function updatePublisher()
    {
        $publisher_name=parent::getPublisher_name();
        $publisher_country=parent::getPublisher_country();
        $columns="publisher_name='$publisher_name'
                  publisher_country='$publisher_country'";

        $pk_name = "publisher_id";
        $pk_value = parent::getPublisher_id();
        
       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }

    public function selectPublisher()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
