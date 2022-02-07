<?php
//declare(strict_types=1);

require_once "model_pojo/Stores.php"; //pojo
class StoresDAO extends Stores
{

    private  $table_name = "stores";
    private $database = null;

    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }


    public function insertStores()
    {
        $stores_name=parent::getStores_name();
        $stores_town=parent::getStores_town();
        $stores_country=parent::getStores_country();
        $stores_continent=parent::getStores_continent();
        $stores_address=parent::getStores_address();
        $stores_address_number=parent::getStores_address_number();
        $stores_email=parent::getStores_email();
        $stores_number=parent::getStores_number();
        $staff_id=parent::getStaff_id();
        
        $columnName="stores_name,stores_town,stores_country,stores_continent,stores_address,stores_address_number,stores_email,stores_number,staff_id";
        $columnValue="'$stores_name','$stores_town','$stores_country','$stores_continent','$stores_address','$stores_address_number','$stores_email','$stores_number','$staff_id'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

   
    public function deleteStores()
    {
        $pk_name = "stores_id";
        $pk_value = parent::getStores_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateStores()
    {
        $stores_name=parent::getStores_name();
        $stores_town=parent::getStores_town();
        $stores_country=parent::getStores_country();
        $stores_continent=parent::getStores_continent();
        $stores_address=parent::getStores_address();
        $stores_address_number=parent::getStores_address_number();
        $stores_email=parent::getStores_email();
        $stores_number=parent::getStores_number();
        $staff_id=parent::getStaff_id();
        
        $columns="stores_name='$stores_name',
                stores_town='$stores_town'
                stores_country='$stores_country',
                stores_continent='$stores_continent'
                stores_address='$stores_address',
                stores_address_number='$stores_address_number'
                stores_email='$stores_email',
                stores_number='$stores_number'
                staff_id='$staff_id'";

        $pk_name="stores_id";
        $pk_value = parent::getStores_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }

   
    public function selectStores()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
