<?php
//declare(strict_types=1);


class Clients
{
    //class attributes
    private  $clients_id;
    private  $clients_first_name;
    private  $clients_last_name;
    private  $clients_town;
    private  $clients_country;
    private  $clients_continent;
    private  $clients_address;
    private  $clients_address_number;
    private  $clients_number;
    private  $clients_email;
    private  $clients_username;
    private  $clients_password;

    
    /**
     * @return
     */

    public function getClients_id(){
        return $this->clients_id;
    }

    /**
     * @param null $clients_id
     */

    public function setClients_id($clients_id){
        $this->clients_id=$clients_id;
    }

    /**
     * @return
     */
    public function getClients_first_name(){
        return $this->clients_first_name;
    }

    /**
     * @param null $clients_first_name
     */
    public function setClients_first_name($clients_first_name){
        $this->clients_first_name=$clients_first_name;
    }

    /**
     * @return
     */
    public function getClients_last_name(){
        return $this->clients_last_name;
    }

    /**
     * @param null $clients_last_name
     */
    public function setClients_last_name($clients_last_name){
        $this->clients_last_name=$clients_last_name;
    }

    /**
     * @return
     */
    public function getClients_town(){
        return $this->clients_town;
    }

    /**
     * @param null $clients_town
     */
    public function setClients_town($clients_town){
        $this->clients_town=$clients_town;
    }

    /**
     * @return
     */
    public function getClients_country(){
        return $this->clients_town;
    }

    /**
     * @param null $clients_country
     */
    public function setClients_country($clients_country)
    {
        $this->clients_town=$clients_town;
    }

    /**
     * @return
     */
    public function getClients_continent(){
        return $this->clients_continent;
    }

    /**
     * @param null $clients_continent
     */
    public function setClients_continent($clients_continent){
        $this->clients_continent=$clients_continent;
    }

    /**
     * @return
     */
    public function getClients_address(){
        return $this->clients_address;
    }

    /**
     * @param null $clients_address
     */
    public function setClients_address($clients_address)
    {
        $this->clients_address=$clients_address;
    }

    /**
     * @return
     */
    public function getClients_address_number(){
        return $this->clients_address_number;
    }

    /**
     * @param null $clients_address_number
     */
    public function setClients_address_number($clients_address_number){
        $this->clients_address_number=$clients_address_number;
    }

    /**
     * @return
     */
    public function getClients_number(){
        return $this->clients_number;
    }

    /**
     * @param null $clients_number
     */
    public function setClients_number($clients_number){
        $this->clients_number=$clients_number;
    }

    /**
     * @return
     */
    public function getClients_email(){
        return $this->clients_email;
    }

    /**
     * @param null $clients_email
     */
    public function setClients_email($clients_email){
        $this->clients_email=$clients_email;
    }
    /**
     * @return
     */
    

    public function getClients_username(){
        return $this->clients_username;
    }
    /**
     * @param null $clients_username
     */
    public function setClients_username($clients_username){
        $this->clients_username=$clients_username;
    }

    /**
     * @return
     */
    public function getClients_password(){
        return $this->clients_password;
    }

    /**
     * @param null $clients_password
     */
    public function setClients_password($clients_password){
        $this->clients_password=$clients_password;
    }

}
