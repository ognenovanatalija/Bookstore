<?php
//declare(strict_types=1);

require_once "model_pojo/Languages.php";//pojo
class LanguagesDAO extends Languages
{

    private  $table_name = "languages";
    private $pk_name = "language_id";
    private $database = null;


    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }

   
    public function insertLanguages()
    {
        $Language_name=parent::getLanguage_name();//pojo
      
        
        $columnName="language_name";
        $columnValue="'$language_name'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    
    public function deleteLanguages()
    {
        
        $pk_value = parent::getLanguage_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);
    }

   
    public function updateLanguages()
    {
        $language_name = parent::getLanguage_name();
       
        
        $columns="language_name='$language_name'";

        
        $pk_value = parent::getLanguage_id();
        
       $this->database->updateRow($this->table_name,$columns,$this->pk_name,$pk_value);
    }

    
    public function selectLanguages()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
