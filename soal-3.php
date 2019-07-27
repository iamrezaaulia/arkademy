<?php
    cetak_gambar(5);

    function cetak_gambar($panjang){
        for($j=1; $j<=$panjang; $j++){
            // selain bagian tengah
            if(ceil($panjang/2) != $j){ 
                for($i=1; $i<=$panjang; $i++){
                    if($i == 1 || $i == $panjang){
                        echo "* ";
    
                        if($i == $panjang)
                            echo "<br/>";
    
                    }else{
                        echo "= ";
                    }
                }
            }else{ //bagian tengah
                for($i=1;$i<=$panjang;$i++){
                    echo "* ";
                    
                    if($i == $panjang){
                        echo "<br/>";
                    }
                }
            }
        }
    }
?>