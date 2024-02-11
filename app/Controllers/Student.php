<?php

namespace App\Controllers;

class Student extends BaseController{

    public function index() {
        //call the model and model will give student details
        $students = [
            [
                "rollNumber" => 1,
                "name" => "Aman",
                "class" => "XII",                
            ],
            [
                "rollNumber" => 2,
                "name" => "Sagar",
                "class" => "XI",                
            ],
            [
                "rollNumber" => 3,
                "name" => "Sahil",
                "class" => "X",                
            ]
        ];
        return view('Student/index.php', ["students" => $students]);
    }

}

?>