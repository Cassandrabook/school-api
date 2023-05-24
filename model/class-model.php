<?php
    include_once 'partials/connect.php';

    class ClassModel {
        private $pdo;

        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function getClasses() {
            $statement = $this->pdo->prepare('SELECT * FROM class;');
            $statement->execute();

            return $statement->fetchAll();
        }

        public function getClass($classId) {
            $statement = $this->pdo->prepare('SELECT * FROM class WHERE id = :classId');
            $statement->bindValue(':classId', $classId, PDO::PARAM_INT);
            $statement->execute();
    
            return $statement->fetch();
        }
    }

?>