<?php
function reverseVowels($s) {
    // Define vowels set
    $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $strArr = str_split($s); // Convert string to array
    
    $vowelIndices = array(); // Store indices of vowels found
    foreach ($strArr as $index => $char) {
        if (in_array($char, $vowels)) {
            $vowelIndices[] = $index;
        }
    }
    
    // Reverse vowels
    $vowelCount = count($vowelIndices);
    for ($i = 0; $i < $vowelCount / 2; $i++) {
        $temp = $strArr[$vowelIndices[$i]];
        $strArr[$vowelIndices[$i]] = $strArr[$vowelIndices[$vowelCount - $i - 1]];
        $strArr[$vowelIndices[$vowelCount - $i - 1]] = $temp;
    }
    
    return implode('', $strArr); // Convert array back to string
}

// Test case
$s = "hello";
echo "Output: " . reverseVowels($s) . "\n";
?>
