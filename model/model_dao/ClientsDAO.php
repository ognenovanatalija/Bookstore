<?php
//declare(strict_types=1);

require_once "model_pojo/Clients.php"; //pojo
class ClientsDAO extends Clients
{

    private  $table_name = "clients";
    private $database = null;
    
    public function __construct($DB)
    {
        //Dependency
        $this->database = $DB;
    }


    public function insertClients()
    {
        
        $clients_first_name=parent::getClients_first_name();//pojo
        $clients_last_name=parent::getClients_last_name();//pojo
        $clients_town=parent::getClients_town();//pojo
        $clients_country=parent::getClients_country();//pojo
        $clients_continent=parent::getClients_continent();//pojo
        $clients_address=parent::getClients_address();//pojo
        $clients_address_number=parent::getClients_address_number();//pojo
        $clients_number=parent::getClients_number();//pojo
        $clients_number=parent::getClients_email();//pojo
        $clients_username=parent::getClients_username();//pojo
        $clients_password=parent::getClients_password();//pojo
       

        
        $columnName="clients_first_name,clients_last_name,clients_town,clients_country,clients_continent,clients_address,clients_address_number,clients_number,clients_email,clients_username,clients_password";
        $columnValue="'$clients_first_name','$clients_last_name','$clients_town','$clients_country','$clients_continent','$clients_address',' $clients_address_number','$clients_number','$clients_email','$clients_username','$clients_password'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    
    public function deleteClients()
    {
        $pk_name = "clients_id";
        $pk_value = parent::getClients_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);


    }

    
    public function updateClients()
    {
        $clients_first_name=parent::getClients_first_name();//pojo
        $clients_last_name=parent::getClients_last_name();//pojo
        $clients_town=parent::getClients_town();//pojo
        $clients_country=parent::getClients_country();//pojo
        $clients_continent=parent::getClients_continent();//pojo
        $clients_address=parent::getClients_address();//pojo
        $clients_address_number=parent::getClients_address_number();//pojo
        $clients_number=parent::getClients_number();//pojo
        $clients_email=parent::getClients_email();//pojo
        $clients_username=parent::getClients_username();//pojo
        $clients_password=parent::getClients_password();//pojo

       
        
        $columns="clients_first_name='$clients_first_name',
                  clients_last_name='$clients_last_name'
                  clients_town='$clients_town'
                  clients_country='$clients_country'
                  clients_continent='$clients_continent'
                  clients_address='$clients_address'
                  clients_address_number='$clients_address_number'
                  clients_email='$clients_email'
                  clients_username='$clients_username'
                  clients_password='$clients_password'";

        $pk_name="clients_id";
        $pk_value = parent::getClients_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }

    
    public function selectClients()
    {
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
