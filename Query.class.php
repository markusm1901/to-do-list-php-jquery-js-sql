<?php
// require("./classes/Data.class.php");
require('DBconnect.class.php');
class Query extends DBconnect
{

    public function sendSelectQuery($query)
    {
        $dbh = $this->connect();
        $dbh->query($query);
        $data = $dbh->query($query);
        return $data;
    }
    public function sendInsertQuery($query){
        $dbh = $this->connect();
        $dbh->query($query);
    }
    public function SingleRecordQuery($query)
    {
        $dbh = $this->connect();
        $dbh->query($query)->fetch();
        $record = $dbh->query($query)->fetch();
        // $data = $dbh->query($query);
        return $record;
    }
}
