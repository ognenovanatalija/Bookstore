<?php
//declare(strict_types=1);


class Authors
{
    //class attributes
    private  $authors_id;
    private  $authors_first_name;
    private  $authors_last_name;


    /**
     * @return
     */


       //setter

    public function setAuthors_id($authors_id)
    {
        $this->authors_id=$authors_id;
    }

    public function setAuthors_first_name($authors_first_name)
    {
        $this->authors_first_name=$authors_first_name;
    }

    public function setAuthors_last_name($authors_last_name)
    {
        $this->authors_last_name=$authors_last_name;
    }


       //getter

    public function getAuthors_id(){
        return $this->authors_id;
    }

    public function getAuthors_first_name(){
        return $this->authors_first_name;
    }

    public function getAuthors_last_name(){
        return $this->authors_last_name;
    }

  


}
