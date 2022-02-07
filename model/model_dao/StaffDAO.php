<?php
//declare(strict_types=1);

require_once "model_pojo/Staff.php";//pojo
class StaffDAO extends Staff
{

    private  $table_name = "staff";
    private $database = null;

    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }

    
    public function insertStaff()
    {
        
        $staff_first_name=parent::getStaff_first_name();//pojo
        $staff_last_name=parent::getStaff_last_name();//pojo
        $staff_town=parent::getStaff_town();//pojo
        $staff_country=parent::getStaff_country();//pojo
        $staff_continent=parent::getStaff_continent();//pojo
        $staff_address=parent::getStaff_address();//pojo
        $staff_address_number=parent::getStaff_address_number();//pojo
        $staff_number=parent::getStaff_number();//pojo
        $staff_email=parent::getStaff_email();//pojo
       
        
        $columnName="staff_first_name,staff_last_name,staff_town,staff_country,staff_continent,staff_address,staff_address_number,staff_number,staff_email";
        $columnValue="'$staff_first_name','$staff_last_name','$staff_town','$staff_country','$staff_continent','$staff_address','$staff_address_number','$staff_number','$staff_email'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    
    public function deleteStaff()
    {
        $pk_name = "staff_id";
        $pk_value = parent::getStaff_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

    
    public function updateStaff()
    {
        $staff_first_name=parent::getStaff_first_name();//pojo
        $staff_last_name=parent::getStaff_last_name();//pojo
        $staff_town=parent::getStaff_town();//pojo
        $staff_country=parent::getStaff_country();//pojo
        $staff_continent=parent::getStaff_continent();//pojo
        $staff_address=parent::getStaff_address();//pojo
        $staff_address_number=parent::getStaff_address_number();//pojo
        $staff_number=parent::getStaff_number();//pojo
        $staff_email=parent::getStaff_email();//pojo

        $columns="staff_first_name= '$staff_first_name'
                 staff_last_name= '$staff_last_name'
                 staff_town= '$staff_town'
                 staff_country= '$staff_country'
                 staff_continent= '$staff_continent'
                 staff_address= '$staff_address'
                 staff_address_number= '$staff_address_number'
                 staff_number= '$staff_number'
                 staff_email= '$staff_email'";

        $pk_name="staff_id";
        $pk_value = parent::getStaff_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }

    
    public function selectStaff()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
