<?php
    include_once 'partials/connect.php';

    class ClasstModel {
        private $pdo;

        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function getClasses() {
            $statement = $this->pdo->prepare('SELECT * FROM class;');
            $statement->execute();

            return $statement->fetchAll();
        }
    }

?>