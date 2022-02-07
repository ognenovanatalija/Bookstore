<?php
//declare(strict_types=1);


class Publisher
{
    //class attributes
    private  $publisher_id;
    private  $publisher_name;
    private  $publisher_country;

   
    /**
     * @return
     */
    public function getPublisher_id(){
        return $this->publisher_id;
    }

    /**
     * @param  $value
     */
    public function setPublisher_id($publisher_id){
        $this->publisher_id=$publisher_id;
    }

    /**
     * @return
     */
    public function getPublisher_name(){
        return $this->publisher_name;
    }

    /**
     * @param  $value
     */
    public function setPublisher_name($publisher_name){
        $this->publisher_name=$publisher_name;
    }

    /**
     * @return
     */
    public function getPublisher_country(){
        return $this->publisher_country;
    }

    /**
     * @param  $value
     */
    public function setPublisher_country($publisher_country){
        $this->publisher_country=$publisher_country;
    }

}
