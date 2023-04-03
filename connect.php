<?php
const dsn = 'sql:project.sql';
const user = 'dbuser';
const password = 'dbpass';

class DBconnect
{
    public function connect()
    {
        try {
            $pdo = new PDO(dsn, user, password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
