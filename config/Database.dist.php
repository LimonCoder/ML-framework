<?php
class Database extends PDO
{
    protected $debug = false;
    
    public function __construct($type, $host, $databaseName, $username, $password)
    {
        parent::__construct($type . ':host=' . $host . ';dbname=' . $databaseName . ';charset=utf8', $username, $password);
        $this->exec('SET CHARACTER SET utf8');
    }

    public function UserSelect()
    {
        $sth = $this->prepare('select * from users');

        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
