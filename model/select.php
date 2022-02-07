<?php
require_once "../lib/database.php";
$DB = new Database();
$data=array();

//$data=json_decode(file_get_contents("php://input"));
//var_dump($data)//print array

//url ?variable = value
//model/select.php?table_name = marki
$table_name=$_GET["table_name"];

switch ($table_name) {
    case "books":
        require_once "model_dao/BooksDAO.php";
        $objBooksDAO = new BooksDAO($DB);
        $results = $objBooksDAO->selectBooks();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("books_id"=>$row["books_id"],
                         "books_name"=>$row["books_name"],
                         "pages"=>$row["pages"],
                         "price"=>$row["price"],
                         "language_id"=>$row["language_id"],
                         "publisher_id"=>$row["publisher_id"],
                         "format_id"=>$row["format_id"],
                         "category_id"=>$row["category_id"],
                         "authors_id"=>$row["authors_id"],
                         "stores_id"=>$row["stores_id"],
                         "short_text"=>$row["short_text"],
                         "long_text"=>$row["long_text"],
                         "year"=>$row["year"],
                         //authors
                         "authors_first_name"=>$row["authors_first_name"],
                         "authors_last_name"=>$row["authors_last_name"],
                         //category
                         "category_name"=>$row["category_name"],
                         //formats
                         "format_name"=>$row["format_name"],
                         //languages
                         "language_name"=>$row["language_name"],
                         //publisher
                         "publisher_name"=>$row["publisher_name"],
                         "publisher_country"=>$row["publisher_country"],
                         //stores
                         "stores_name"=>$row["stores_name"],
                         "stores_country"=>$row["stores_country"],
                         "stores_email"=>$row["stores_email"]
        );
        }

    break;

    case "authors":
        require_once "model_dao/AuthorsDAO.php";
        $objAuthorsDAO = new AuthorsDAO($DB);
        $results = $objAuthorsDAO->selectAuthors();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("authors_id"=>$row["authors_id"],
                         "authors_first_name"=>$row["authors_first_name"],
                         "authors_last_name"=>$row["authors_last_name"]
        );
        }
    break;

    case "category":
        require_once "model_dao/CategoryDAO.php";
        $objCategoryDAO = new CategoryDAO($DB);
        $results = $objCategoryDAO->selectCategory();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("category_id"=>$row["category_id"],
                         "category_name"=>$row["category_name"]
        );
        }
    break;

    case "clients":
        require_once "model_dao/ClientsDAO.php";
        $objClientsDAO = new ClientsDAO($DB);
        $results = $objClientsDAO->selectClients();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("clients_id"=>$row["clients_id"],
                         "clients_first_name"=>$row["clients_first_name"],
                         "clients_last_name"=>$row["clients_last_name"],
                         "clients_town"=>$row["clients_town"],
                         "clients_country"=>$row["clients_country"],
                         "clients_continent"=>$row["clients_continent"],
                         "clients_address"=>$row["clients_address"],
                         "clients_address_number"=>$row["clients_address_number"],
                         "clients_number"=>$row["clients_number"],
                         "clients_email"=>$row["clients_email"],
                         "clients_username"=>$row["clients_username"],
                         "clients_password"=>$row["clients_password"]
        );
        }

        
    break;

    case "formats":
        require_once "model_dao/FormatsDAO.php";
        $objFormatsDAO = new FormatsDAO($DB);
        $results = $objFormatsDAO->selectFormats();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("format_id"=>$row["format_id"],
                         "format_name"=>$row["format_name"]
        );
        }
    break;

    case "languages":
        require_once "model_dao/LanguagesDAO.php";
        $objLanguagesDAO = new LanguagesDAO($DB);
        $results = $objLanguagesDAO->selectLanguages();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("language_id"=>$row["language_id"],
                         "language_name"=>$row["language_name"]
        );
        }
    break;

    case "publisher":
        require_once "model_dao/PublisherDAO.php";
        $objPublisherDAO = new PublisherDAO($DB);
        $results = $objPublisherDAO->selectPublisher();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("publisher_id"=>$row["publisher_id"],
                         "publisher_name"=>$row["publisher_name"],
                         "publisher_country"=>$row["publisher_country"]
        );
        }
    break;

    case "staff":
        require_once "model_dao/StaffDAO.php";
        $objStaffDAO = new StaffDAO($DB);
        $results = $objStaffDAO->selectStaff();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("staff_id"=>$row["staff_id"],
                         "staff_first_name"=>$row["staff_first_name"],
                         "staff_last_name"=>$row["staff_last_name"],
                         "staff_town"=>$row["staff_town"],
                         "staff_country"=>$row["staff_country"],
                         "staff_continent"=>$row["staff_continent"],
                         "staff_address"=>$row["staff_address"],
                         "staff_address_number"=>$row["staff_address_number"],
                         "staff_number"=>$row["staff_number"],
                         "staff_email"=>$row["staff_email"]
        );
        }

    break;

    case "stores":
        require_once "model_dao/StoresDAO.php";
        $objStoresDAO = new StoresDAO($DB);
        $results = $objStoresDAO->selectStores();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("stores_id"=>$row["stores_id"],
                         "stores_name"=>$row["stores_name"],
                         "stores_town"=>$row["stores_town"],
                         "stores_country"=>$row["stores_country"],
                         "stores_continent"=>$row["stores_continent"],
                         "stores_address"=>$row["stores_address"],
                         "stores_address_number"=>$row["stores_address_number"],
                         "stores_email"=>$row["stores_email"],
                         "stores_number"=>$row["stores_number"],
                         "staff_id"=>$row["staff_id"]
        );
        }
    break;

    case "transactions":
        require_once "model_dao/TransactionsDAO.php";
        $objTransactionsDAO = new TransactionsDAO($DB);
        $results = $objTransactionsDAO->selectTransactions();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("transactions_id"=>$row["transactions_id"],
                         "quantity"=>$row["quantity"],
                         "transactions_date"=>$row["transactions_date"],
                         "books_id"=>$row["books_id"],
                         "clients_id"=>$row["clients_id"],
                        //table_name books
                         "books_name"=>$row["books_name"],
                         "pages"=>$row["pages"],
                         "price"=>$row["price"],
                         "language_id"=>$row["language_id"],
                         "publisher_id"=>$row["publisher_id"],
                         "format_id"=>$row["format_id"],
                         "category_id"=>$row["category_id"],
                         "authors_id"=>$row["authors_id"],
                         "stores_id"=>$row["stores_id"],
                         "short_text"=>$row["short_text"],
                         "long_text"=>$row["long_text"],
                         "year"=>$row["year"],
                         //languages
                         "language_name"=>$row["language_name"],
                         //clients
                         "clients_first_name"=>$row["clients_first_name"],
                         "clients_last_name"=>$row["clients_last_name"],
                         "clients_town"=>$row["clients_town"],
                         "clients_country"=>$row["clients_country"]
        );
        }
    break;
}

echo json_encode($data);
?>