<?php 
    class Student
    {
        public $name;
        public $email;
        public $course;

        public function __construct($name , $email , $course)
        {
            $this->name = $name;
            $this->email = $email;
            $this->course = $course;
        }

        public function getFee()
        {
            $fees = 
            [
                "CSE" => 5000,
                "BBA" => 1000,
                "EEE" => 4000,
            ]
        }
    }
?>