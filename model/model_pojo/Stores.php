<?php
//declare(strict_types=1);


class Stores
{
    //class attributes
    private  $stores_id;
    private  $stores_name;
    private  $stores_town;
    private  $stores_country;
    private  $stores_continent;
    private  $stores_address;
    private  $stores_address_number;
    private  $stores_email;
    private  $stores_number;
    private  $staff_id;

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
        $this->stores_id = $stores_id;
    }

    /**
     * @return
     */
    public function getStores_name(){
        return $this-> stores_name;
    }

    /**
     * @param null $stores_name
     */
    public function setStores_name($stores_name){
        $this->stores_name = $stores_name;
    }

    /**
     * @return
     */
    public function getStores_town(){
        return $this-> stores_town;
    }

    /**
     * @param null $stores_town
     */
    public function setStores_town($stores_town){
        $this-> stores_town = $stores_town;
    }

    /**
     * @return
     */
    public function getStores_country(){
        return $this-> stores_country;
    }

    /**
     * @param null $stores_country
     */
    public function setStores_country($stores_country){
        $this-> stores_country = $stores_country;
    }

    /**
     * @return
     */
    public function getStores_continent(){
        return $this-> stores_continent;
    }

    /**
     * @param null $stores_continent
     */
    public function setStores_continent($stores_continent){
        $this-> stores_continent = $stores_continent ;
    }

    /**
     * @return
     */
    public function getStores_address(){
        return $this-> stores_address;
    }

    /**
     * @param null $stores_address
     */
    public function setStores_address($stores_address){
        $this-> stores_address = $stores_address;
    }

    /**
     * @return
     */
    public function getStores_address_number(){
        return $this-> stores_address_number;
    }

    /**
     * @param null $stores_address_number
     */
    public function setStores_address_number($stores_address_number){
        $this->stores_address_number = $stores_address_number;
    }

    /**
     * @return
     */
    public function getStores_email(){
        return $this-> stores_email;
    }

    /**
     * @param null $stores_email
     */
    public function setStores_email($stores_email){
        $this-> stores_email = $stores_email;
    }

    /**
     * @return
     */
    public function getStores_number(){
        return $this-> stores_number;
    }

    /**
     * @param null $stores_number
     */
    public function setStores_number($stores_number){
        $this-> stores_number = $stores_number;
    }

    /**
     * @return
     */
    public function getStaff_id(){
        return $this-> staff_id;
    }

    /**
     * @param null $Staff_id
     */
    public function setStaff_id($staff_id){
        $this-> staff_id = $staff_id;
    }

}
