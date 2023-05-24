<?php

require_once 'view/student-api.php';
require_once 'model/student-model.php';

$pdo = connect($host, $dbname, $password, $charset);
$studentModel = new StudentModel($pdo);
$studentApi = new StudentApi();

if (isset($_GET['action'])) {
    $chosenAction = filter_var($_GET['action'], FILTER_SANITIZE_SPECIAL_CHARS);

    if ($chosenAction == 'students') {
        $studentApi->outputStudents($studentModel->getStudents());
    }
}


?>