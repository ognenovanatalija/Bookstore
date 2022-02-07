<?php
//declare(strict_types=1);

require_once "model_pojo/Authors.php"; //pojo
class AuthorsDAO extends Authors
{

    private  $table_name = "authors";
    private $database = null;

    /**
     * Default constructor
     */


    public function __construct($DB){
         
        //Dependency
         $this->database = $DB;

    }

   

    public function insertAuthors()
    {
        
        $authors_first_name=parent::getAuthors_first_name();//pojo
        $authors_last_name=parent::getAuthors_last_name();//pojo
        
        $columnName="authors_first_name,authors_last_name";
        $columnValue="'$authors_first_name','$authors_last_name'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php


        // TODO implement here
        //CALL __insert_authors('authors_first_name','authors_last_name')
        //INSERT INTO authors (authors_first_name, authors_last_name)
        //VALUES (authors_first_name_new, authors_last_name_new);
        //callStoredProcedureWithParams("__insert_authors","'Louise','Tou'")
    }


    public function deleteAuthors()
    {
        $pk_name = "authors_id";
        $pk_value = parent::getAuthors_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateAuthors()
    {
        $authors_first_name = parent::getAuthors_first_name();
        $authors_last_name = parent::getAuthors_last_name();
        
        $columns="authors_first_name='$authors_first_name',
                  authors_last_name='$authors_last_name'";

        $pk_name="authors_id";
        $pk_value = parent::getAuthors_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }

   
    public function selectAuthors()
    {
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}

