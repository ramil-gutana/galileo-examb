<?php
    header('Content-Type: application/json');
    $data['success']='true';
    $data['employees']=[
        [
            "id"=>"1",
            "first_name"=>"John",
            "last_name"=>"Doe",
            "birthday"=>"1990-05-07",
            "gender"=>
                [
                "male"=>true,
                "female"=>false
                ],
            "knownLanguage"=>[
                "English",
                "Japanese",
                "Chinese"
            ]
            
        ],
        [
            "id"=>"2",
            "first_name"=>"Lina",
            "last_name"=>"Art",
            "birthday"=>"1994-08-05",
            "gender"=>
                [
                "male"=>false,
                "female"=>true
                ],
            "knownLanguage"=>[
                "English",
                "Japanese",
            ]
            
        ]
    ];
    echo json_encode($data);


?>