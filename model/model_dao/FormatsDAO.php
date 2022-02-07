<?php
//declare(strict_types=1);

require_once "model_pojo/Formats.php";//pojo
class FormatsDAO extends Formats
{

    private  $table_name = "formats";
    private $database = null;

    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }

    
    public function insertFormats(){
        $format_name=parent::getFormat_name();//pojo
       
        $columnName="format_name";
        $columnValue="'$format_name'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

  
    public function deleteFormats(){
        $pk_name = "formats_id";
        $pk_value = parent::getFormats_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateFormats(){
        $format_name = parent::getFormat_name();
       
        $columns="format_name='$format_name'";

        $pk_name="format_id";
        $pk_value = parent::getFormat_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }


    public function selectFormats(){
        // TODO implement here
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
