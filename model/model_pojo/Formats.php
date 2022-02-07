<?php
//declare(strict_types=1);


class Formats
{
    //class attributes
    private  $format_id;
    private  $format_name;

   
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
    public function getFormat_name(){
        return $this->format_name;
    }

    /**
     * @param null $format_name
     */
    public function setFormat_name($format_name){
        $this->format_name=$format_name;
    }

}
