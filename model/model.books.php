<?php
require_once "../lib/database.php";
require_once "model_dao/BooksDAO.php";
$data=json_decode(file_get_contents("php://input"));

// var_dump($data)//print array
// echo $data[0]->action;

//instance
$DB = new Database();
$objBooksDAO = new BooksDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
        $books_name=$data[0]->books_name;
        $pages=$data[0]->pages;
        $price=$data[0]->price;
        $language_id=$data[0]->language_id;
        $publisher_id=$data[0]->publisher_id;
        $format_id=$data[0]->format_id;
        $category_id=$data[0]->category_id;
        $authors_id=$data[0]->authors_id;
        $stores_id=$data[0]->stores_id;
        $long_text=$data[0]->long_text;
        $short_text=$data[0]->short_text;
        $year=$data[0]->year;
        
        $objBooksDAO->setBooks_name($books_name); //pojo
        $objBooksDAO->setPages($pages); //pojo
        $objBooksDAO->setPrice($price); //pojo
        $objBooksDAO->setLanguage_id($language_id); //pojo
        $objBooksDAO->setPublisher_id($publisher_id); //pojo
        $objBooksDAO->setFormat_id($format_id); //pojo
        $objBooksDAO->setCategory_id($category_id); //pojo
        $objBooksDAO->setAuthors_id($authors_id); //pojo
        $objBooksDAO->setStores_id($stores_id); //pojo
        $objBooksDAO->setLong_text($long_text); //pojo
        $objBooksDAO->setShort_text($short_text); //pojo
        $objBooksDAO->setYear($year);//pojo
		
		$objBooksDAO->insertBooks();//dao
	break;

	case "update":
        $books_name=$data[0]->books_name;
        $pages=$data[0]->pages;
        $price=$data[0]->price;
        $language_id=$data[0]->language_id;
        $publisher_id=$data[0]->publisher_id;
        $format_id=$data[0]->format_id;
        $category_id=$data[0]->category_id;
        $authors_id=$data[0]->authors_id;
        $stores_id=$data[0]->stores_id;
        $long_text=$data[0]->long_text;
        $short_text=$data[0]->short_text;
        $year=$data[0]->$year;
        
        $objBooksDAO->setBooks_name($books_name); //pojo
        $objBooksDAO->setPages($pages); //pojo
        $objBooksDAO->setPrice($price); //pojo
        $objBooksDAO->setLanguage_id($language_id); //pojo
        $objBooksDAO->setPublisher_id($publisher_id); //pojo
        $objBooksDAO->setFormat_id($format_id); //pojo
        $objBooksDAO->setCategory_id($category_id); //pojo
        $objBooksDAO->setAuthors_id($authors_id); //pojo
        $objBooksDAO->setStores_id($stores_id); //pojo
        $objBooksDAO->setLong_text($long_text); //pojo
        $objBooksDAO->setShort_text($short_text); //pojo
        $objBooksDAO->setYear($year);//pojo
	
        $objBooksDAO->updateBooks();
	break;

    case "delete":
        $pk_value=$data[0]->pk_value;

        $objBooksDAO->setBooks_id($pk_value);
        
        $objBooksDAO->deleteBooks();
    break;
}
?>
