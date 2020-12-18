<?php 

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', '');
        
        } catch (PDOException $e) {
        
            die("can't connect : " . $e->getMessage());
        }
}

function returnAllResults($pdo) {

    $statement = $pdo->prepare('select * from todos');

    $statement-> execute();
    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}


?>