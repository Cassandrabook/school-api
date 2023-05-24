<?php

    class StudentApi {

        public function outputStudents(array $students):void {

            $json = [
                'student-count'=>count($students),
                'result'=>$students
            ];
            header("Content-Type: application/json");
            echo json_encode($json);
        }

    }
?>