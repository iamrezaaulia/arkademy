<?php 
    $data = [
        ['a','c','b','e','d'],
        ['g','e','f']
    ];

    $datalain = [
        ['g','h','i','j'],
        ['a','c','b','e','d'],
        ['g','e','f']
    ];

    $datalain = sort_array($datalain);
    var_dump($datalain);

    function sort_array($datalain){
        foreach ($datalain as $index=>$value) {
            sort($value);
            $data[$index] = $value;
        }

        for($i=0;$i<count($data);$i++){
            $min = count($data[$i]);
            $pos = $i;
            for($j=$i;$j<count($data);$j++){
                if($min > count($data[$j])){
                    $min = count($data[$j]);
                    $pos = $j;
                }
            }

            $temp = $data[$pos];
            $data[$pos] = $data[$i];
            $data[$i] = $temp;
        }        

        return $data;
    }
?>
