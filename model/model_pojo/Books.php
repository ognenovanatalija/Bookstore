<?php
//declare(strict_types=1);
class Books
{

    private  $books_id;
    private  $books_name;
    private  $pages;
    private  $price;
    private  $language_id;
    private  $publisher_id;
    private  $format_id;
    private  $category_id;
    private  $authors_id;
    private  $stores_id;
    private  $short_text;
    private  $long_text;
    private  $year;

    /**
     * @return
     */


    public function getBooks_id(){
        return $this->books_id;
    }

    /**
     * @param null $books_id
     */

    public function setBooks_id($books_id){
        $this->books_id=$books_id;
    }

    /**
     * @return
     */

    public function getBooks_name(){
        return $this->books_name;
    }

    /**
     * @param VAR $books_name
     */

    public function setBooks_name($books_name)
    {
        $this->books_name=$books_name;
    }

    /**
     * @return
     */

    public function getPages(){
        return $this->pages;
    }

    /**
     * @param null $pages
     */

    public function setPages($pages){
        $this->pages=$pages;
    }

    /**
     * @return
     */

    public function getPrice(){
        return $this->price;
    }

    /**
     * @param null $price
     */

    public function setPrice($price){
        $this->price=$price;
    }

    /**
     * @return
     */
    public function getLanguage_id(){
       return $this->language_id;
    }

    /**
     * @param null $language_id
     */

    public function setLanguage_id($language_id){
        $this->language_id=$language_id;
    }

    /**
     * @return
     */
    public function getPublisher_id(){
        return $this->publisher_id;
    }

    /**
     * @param null $publisher_id
     */
    public function setPublisher_id($publisher_id){
        $this->publisher_id=$publisher_id;
    }

    /**
     * @return
     */

    public function getFormat_id(){  
        return $this->format_id;
    }

    /**
     * @param null $format_id
     */

    public function setFormat_id($format_id){
        $this->format_id=$format_id;
    }

    /**
     * @return
     */

    public function getCategory_id(){
        return $this->category_id;
    }

    /**
     * @param null $category_id
     */


    public function setCategory_id($category_id){
        $this->category_id=$category_id;
    }

    /**
     * @return
     */

    public function getAuthors_id(){   
        return $this->authors_id;
    }

    /**
     * @param null $authors_id
     */

    public function setAuthors_id($authors_id){
        $this->authors_id=$authors_id;
    }

    /**
     * @return
     */

    public function getStores_id(){
        return $this->stores_id;
    }

    /**
     * @param null $stores_id
     */

    public function setStores_id($stores_id){
        $this->stores_id=$stores_id;
    }

    /**
     * @return
     */

    public function getShort_text(){
        return $this->short_text;
    }

    /**
     * @param null $short_text
     */
    
    public function setShort_text($short_text){
        $this->short_text=$short_text;
    }

    /**
     * @return
     */
    public function getLong_text(){
        return $this->long_text;
    }

    /**
     * @param null $long_text
     */

    public function setLong_text($long_text){
        $this->long_text=$long_text;
    }

    /**
     * @return
     */

    public function getYear(){
        return $this->year;
    }

    /**
     * @param null $year
     */

    public function setYear($year){
        $this->year=$year;
    }

}
