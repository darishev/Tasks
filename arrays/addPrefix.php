<?php
    $names = ['john', 'smith', 'karl'];

     function addPrefix($names,$prefix = null):string
     {
         if(isset($names) and $prefix){
             for ($i = 0; $i < count($names); $i++) {
                 $newNames= "{$prefix} {$names[$i]}";
                 return $newNames;
             }
         }
         else{
                return'Префикс отсуствует';
         }
     }
