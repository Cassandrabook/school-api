<?php
    require_once 'view/student-api.php';
    require_once 'model/student-model.php';
    require_once 'model/class-model.php';
    require_once 'view/class-api.php';
    require_once 'partials/connect.php';
    
    $pdo = connect($host, $dbname, $password, $charset);
    $studentModel = new StudentModel($pdo);
    $studentApi = new StudentApi();
    $classModel = new ClassModel($pdo);
    $classApi = new ClassApi();
    
    if (isset($_GET['action'])) {
        $chosenAction = filter_var($_GET['action'], FILTER_SANITIZE_SPECIAL_CHARS);
    
        if ($chosenAction == 'students') {
            $studentApi->outputStudents($studentModel->getStudents());
        }
    
        if ($chosenAction == 'classes') {
            $classApi->outputClasses($classModel->getClasses());
        }
    
        if ($chosenAction == 'student') {
            if (isset($_GET['id'])) {
                $studentApi->outputStudents($studentModel->getStudentsByClassId($_GET['id']));
            }
        }

        if ($chosenAction == 'class') {
            if (isset($_GET['id'])) {
                $classApi->outputClasses($classModel->getClass($_GET['id']));
            }
        }
    }
?>


