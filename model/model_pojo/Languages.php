<?php
//declare(strict_types=1);


class Languages
{
    //class attributes
    private  $language_id;
    private  $language_name;


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
    public function getLanguage_name(){
        return $this->language_name;
    }

    /**
     * @param null $language_name
     */
    public function setLanguage_name($language_name){
        $this->language_name=$language_name;
    }

}
