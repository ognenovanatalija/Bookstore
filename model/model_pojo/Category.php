<?php
//declare(strict_types=1);


class Category
{
    //class attributes
    private  $category_id;
    private  $category_name;

  
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
    public function getCategory_name(){
        return $this->category_name;
    }

    /**
     * @param null $category_name
     */
    public function setCategory_name($category_name){
        $this->category_name=$category_name;
    }

}
