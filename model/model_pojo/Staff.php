<?php
//declare(strict_types=1);


class Staff
{

    private  $staff_id;
    private  $staff_first_name;
    private  $staff_last_name;
    private  $staff_town;
    private  $staff_country;
    private  $staff_continent;
    private  $staff_address;
    private  $staff_address_number;
    private  $staff_number;
    private  $staff_email;

    
    /**
     * @return
     */
    public function getStaff_id(){
        return $this->staff_id;
    }

    /**
     * @param null $staff_id
     */
    public function setStaff_id($staff_id){
        $this->staff_id=$staff_id;
    }

    /**
     * @return
     */
    public function getStaff_first_name(){
        return $this->Staff_first_name;
    }

    /**
     * @param null $staff_id
     */
    public function setStaff_first_name($Staff_first_name){
        $this->Staff_first_name=$Staff_first_name;
    }

    /**
     * @return
     */
    public function getStaff_last_name(){
        return $this->staff_last_name;
    }

    /**
     * @param null $staff_last_name
     */
    public function setStaff_last_name($staff_last_name){
        $this->staff_last_name=$staff_last_name;
    }

    /**
     * @return
     */
    public function getStaff_town(){
        return $this->staff_town;
    }

    /**
     * @param null $staff_town
     */
    public function setStaff_town($staff_town){
        $this->staff_town=$staff_town;
    }

    /**
     * @return
     */
    public function getStaff_country(){
        return $this->staff_country;
    }

    /**
     * @param null $staff_country
     */
    public function setStaff_country($staff_country){
        $this->staff_country=$staff_country;
    }

    /**
     * @return
     */
    public function getStaff_continent(){
        return $this->staff_continent;
    }

    /**
     * @param null $staff_continent
     */
    public function setStaff_continent($staff_continent){
        $this->staff_continent=$staff_continent;
    }

    /**
     * @return
     */
    public function getStaff_address(){
        return $this->staff_address;
    }

    /**
     * @param null $staff_address
     */
    public function setStaff_address($staff_address){
        $this->staff_address=$staff_address;
    }

    /**
     * @return
     */
    public function getStaff_address_number(){
        return $this->staff_address_number;
    }

    /**
     * @param null $staff_address_number
     */
    public function setStaff_address_number($staff_address_number){
        $this->staff_address_number=$staff_address_number;
    }

    /**
     * @return
     */
    public function getStaff_number(){
        return $this->staff_number;
    }

    /**
     * @param null $staff_number
     */
    public function setStaff_number($staff_number){
        $this->staff_number=$staff_number;
    }

    /**
     * @return
     */
    public function getStaff_email(){
        return $this->staff_email;
    }

    /**
     * @param null $staff_email
     */
    public function setStaff_email($staff_email){
        $this->staff_email=$staff_email;
    }

}
