<?php

/**
 *  @var string dsn         path for sqllite format database
 *  @var string user        username for database   
 *  @var string password    password for databse     
 */

const dsn = "mysql:host=localhost;dbname=lists";
const user = 'root';
const password = '';

/**
 * 'Class Dbconnect, make a PDO connection with database'
 *  The class should be inherited by every class that needs to communicate with the database
 * 
 * @access proteced     there is no need to be this class public, only, derived classes should have access to class Dbconnect  
 */
class DBconnect
{
    /**
     *  'Method connection'
     *  PDO exeptions handling 
     *  PDO attributes: PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
     * 
     * @access protected
     * @throws PDOException     If PDO exeption occurs, class will throw it away and echo exeption massage on the user screen
     * @retrun PDO[] 
     */

    protected function connect()
    {
        try {
            $pdo = new PDO(dsn, user, password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            throw $e;
        }
    }
}
