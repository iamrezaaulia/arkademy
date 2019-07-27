<?php
    function biodata(){
        $data = [
            "name" => "Reza Aulia",
            "age" =>  25,
            "address" => "Jl. Ateuk Jawo No.5, Kec. Baiturrahman, Kota Banda Aceh",
            "hobbies" => ["Futsal", "Game", "Movies"],
            "isMarried" => false,
            "listSchool" => [
                "SD Negeri 5 Bireuen" => "2000 - 2006",
                "MTsS Ulumuddin Lhokseumawe" => "2006 - 2009",
                "SMA Sukma Bangsa Bireuen" => "2009 - 2012",
                "FMIPA Kimia - Universitas Syiah Kuala" => "2012 - 2018",
            ],
            "skills" => [
                "HTML" => "Beginner",
                "CSS" => "Beginner",
                "Javascript" => "Beginner",
                "PHP" => "Beginner",
                "Bootstrap" => "Beginner",
                "Laravel" => "Beginner",
                "Database - MySQL" => "Beginner",
                "Photoshop" => "Beginner",
            ],
            "interestInCoding" => true
        ];
        return json_encode($data);
    }

    echo biodata();

?>