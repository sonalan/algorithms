<?php
/* 3. Longest Substring Without Repeating Characters
 * https://leetcode.com/problems/longest-substring-without-repeating-characters
 */

/**
 * @param $string
 * @return int
 */
function getLongestSubstring($string){
    // check if string leng lower then 2 
    if(strlen($string)<2) return strlen($string);


    $hash =[];
    $maxLenght=0;
    $sArray = str_split($string);
    $j=0;
    foreach($sArray as $i=>$v){

        if(array_key_exists($sArray[$i],$hash)) {
            $j = max($j,$hash[$sArray[$i]] + 1);

        }

        $hash[$sArray[$i]] = $i;
        $maxLenght = max($maxLenght, $i - $j + 1);
        echo $i."-".$j."-".$sArray[$i]."-".$hash[$sArray[$i]]."-".$maxLenght."-".implode("",$hash)."\n";
    }
    return $maxLenght;
}
echo getLongestSubstring("abcdefghijklmnoabcdedfgabcdefabcdefghijklmnoprst");

// for console run
// php longtest-substring.php
