<?php 

class QuereyBuilder {

    protected $pdo;

    public function __construct($pdo)
    {

        $this->pdo = $pdo;

    }
    
    public function selectAll($table, $intoClass) {

        $statement = $this->pdo->prepare("select * from {$table}");
    
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }
}

