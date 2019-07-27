<?php 
    function count_vowels($kalimat){
        $total = 0;
        $vowels = ['a', 'i', 'u', 'e', 'o'];

        for($i=0; $i<strlen($kalimat); $i++){
            if(in_array(strtolower($kalimat[$i]), $vowels)){
                $total++;
            }
        }

        return $total;
    }

    echo count_vowels("programmer");
    echo count_vowels("hmm..");
    
?>