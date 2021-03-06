function allLongestStrings($inputArray) {
    
    $strLengths = array_map('strlen', $inputArray);
    $keys = array_keys($strLengths, max($strLengths));
    $allLongestStrings = array_values(array_intersect_key($inputArray, array_flip($keys)));
    
    return $allLongestStrings;
}
