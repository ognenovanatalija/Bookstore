<?php
//declare(strict_types=1);

require_once "model_pojo/Books.php";//pojo
class BooksDAO extends Books
{
    private  $table_name = "books";
    private $database = null;


    /**
     * Default constructor
     */
    public function __construct($DB){
        //Dependency
        $this->database = $DB;
    }

    /**
     * 
     */

    public function insertBooks()
    {
        $books_name=parent::getBooks_name();//pojo
        $pages=parent::getPages();//pojo
        $price=parent::getPrice();//pojo
        $language_id=parent::getLanguage_id();//pojo
        $publisher_id=parent::getPublisher_id();//pojo
        $format_id=parent::getFormat_id();//pojo
        $category_id=parent::getCategory_id();//pojo
        $authors_id=parent::getAuthors_id();//pojo
        $stores_id=parent::getStores_id();//pojo
        $short_text=parent::getShort_text();//pojo
        $long_text=parent::getLong_text();//pojo
        $year=parent::getYear();//pojo

        $columnName="books_name,pages,price,language_id,publisher_id,format_id,category_id,authors_id,stores_id,short_text,long_text,year";
        $columnValue="'$books_name','$pages','$price','$language_id','$publisher_id','$format_id','$category_id','$authors_id','$stores_id','$short_text','$long_text','$year'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    /**
     * 
     */
    public function deleteBooks()
    {
        $pk_name = "books_id";
        $pk_value = parent::getBooks_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

    /**
     * 
     */
    public function updateBooks()
    {
        $books_name=parent::getBooks_name();//pojo
        $pages=parent::getPages();//pojo
        $price=parent::getPrice();//pojo
        $language_id=parent::getLanguage_id();//pojo
        $publisher_id=parent::getPublisher_id();//pojo
        $format_id=parent::getFormat_id();//pojo
        $category_id=parent::getCategory_id();//pojo
        $authors_id=parent::getAuthors_id();//pojo
        $stores_id=parent::getStores_id();//pojo
        $short_text=parent::getShort_text();//pojo
        $long_text=parent::getLong_text();//pojo
        $year=parent::getYear();//pojo

        $columns="books_name='$books_name',
                  pages='$pages',
                  price='$price',
                  language_id='$language_id',
                  publisher_id='$publisher_id',
                  format_id='$format_id',
                  category_id='$category_id',
                  authors_id='$authors_id',
                  stores_id='$stores_id',
                  short_text='$short_text',
                  long_text='$long_text',
                  year='$year'";

        $pk_name="books_id";
        $pk_value = parent::getBooks_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);

    }

    /**
     * 
     */
    public function selectBooks()
    {
        // TODO implement here
        return $this->database->selectRow($this->table_name." INNER JOIN languages
                                                            ON languages.language_id=books.language_id
                                                            INNER JOIN publisher
                                                            ON publisher.publisher_id=books.publisher_id
                                                            INNER JOIN formats
                                                            ON formats.format_id=books.format_id
                                                            INNER JOIN category
                                                            ON category.category_id=books.category_id
                                                            INNER JOIN authors
                                                            ON authors.authors_id=books.authors_id
                                                            INNER JOIN stores
                                                            ON stores.stores_id=books.stores_id");
    }   

}
