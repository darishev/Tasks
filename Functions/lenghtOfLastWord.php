<?php
function lengthOfLastWord(string $words):int
{

    $textCount = explode(' ',$words);

        foreach ($textCount as $key => $text){
            if ($text == ''){
                unset($textCount[$key]);
            }
        }
    $textCounts= array_key_last($textCount);
    return print(strlen($textCount[$textCounts]));

}




lengthOfLastWord('asd asd'); // 0
lengthOfLastWord('man in BlacK'); // 5

lengthOfLastWord('hello, world!  '); // 6