<?php
/**
 * Controls database connection
 *
 * @author Kyle Vermeulen <kyle@fishgate.co.za
 */

class Connection {
    
    /**
     * Initiates a PDO database connection and return the database handle.
     * 
     * @return \PDO
     */
    public function dbConnect() {
        try {
            return new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
}

