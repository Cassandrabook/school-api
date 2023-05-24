<?php
    include_once 'partials/connect.php';

    class StudentModel {
        private $pdo;

        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function getStudents() {
            $statement = $this->pdo->prepare('SELECT students.*, class.name AS class_name FROM students JOIN class ON students.class_id=class.id');
            $statement->execute();

            return $statement->fetchAll();
        }
    }

?>