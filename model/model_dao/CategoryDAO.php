<?php
//declare(strict_types=1);

require_once "model_pojo/Category.php";//pojo
class CategoryDAO extends Category


{
    private $table_name = "category";
    private $database=null;

    /**
     * Default constructor
     */
    public function __construct($DB)
    {
          //Dependency
          $this->database = $DB;
    }


    public function insertCategory()
    {
        $category_name=parent::getCategory_name();//pojo
    
        $columnName="category_name";
        $columnValue="'$category_name'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    

    public function deleteCategory()
    {
        $pk_name = "category_id";
        $pk_value = parent::getCategory_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateCategory()
    {
        $category_name = parent::getCategory_name();
    
        $columns="category_name='$category_name'";

        $pk_name="category_id";
        $pk_value = parent::getCategory_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }



    public function selectCategory()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name); //vo site daosi 
    }

}
