<?php
function mergeStrings($word1, $word2) {
    $mergedString = '';
    $len1 = strlen($word1);
    $len2 = strlen($word2);
    $maxLength = max($len1, $len2);
    
    for ($i = 0; $i < $maxLength; $i++) {
        if ($i < $len1) {
            $mergedString .= $word1[$i];
        }
        if ($i < $len2) {
            $mergedString .= $word2[$i];
        }
    }
    
    return $mergedString;
}

// Test cases
$word1 = "abc";
$word2 = "pqr";
echo "Output: " . mergeStrings($word1, $word2) . "<br>";

$word1 = "ab";
$word2 = "pqrs";
echo "Output: " . mergeStrings($word1, $word2) . "<br>";
?>
