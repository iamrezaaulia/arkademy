<?php

    $query = "
        SELECT `name.name`, `work.name`, `kategori.salary`
        FROM `name` INNER JOIN `work`
        ON `name.id_work` = `work.id` 
        INNER JOIN `kategori`
        ON `work.id_salary` = `kategori.id`
    ";
    
    return $query;
?>


  