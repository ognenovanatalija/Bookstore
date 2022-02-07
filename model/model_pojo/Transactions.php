<?php
//declare(strict_types=1);


class Transactions
{
    //class attributes
    private  $transactions_id;
    private  $quantity;
    private  $transactions_date;
    private  $books_id;
    private  $clients_id;

    /**
     * @return
     */
    public function getTransactions_id(){
        return $this->transactions_id;
    }

    /**
     * @param null $transactions_id
     */
    public function setTransactions_id($transactions_id){
        $this->transactions_id = $transactions_id;
    }

    /**
     * @return
     */
    public function getQuantity(){
        return $this->quantity;
    }

    /**
     * @param null $quantity
     */
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    /**
     * @return
     */
    public function getTransactions_date(){
        return $this->transactions_date;
    }

    /**
     * @param null $transactions_date
     */
    public function setTransactions_date($transactions_date){
        $this->transactions_date = $transactions_date;
    }

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
        $this-> books_id = $books_id;
    }

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
        $this-> clients_id = $clients_id;
    }

}
