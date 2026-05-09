<?php 
    require_once "models/Student.php";

    class StudentController
    {
        public function register()
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $course = $_POST['course'];

                if(empty($name) || empty($email) || empty($course))
                    {
                        echo "All fields are required ";
                        return;
                    }
                $student = new Student($name , $email, $course);

                $fee = $student->getFee();
                include "views/result.php";
            }
            else{
                include "views/form.php";
            }
        }   
    }
?>
