<?php

    class ClassApi {

        public function outputClasses(array $classes):void {

            $json = [
                'student-count'=>count($classes),
                'result'=>$classes
            ];
            header("Content-Type: application/json");
            echo json_encode($json);
        }

    }
?>