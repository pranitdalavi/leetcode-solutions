class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $trimString = preg_replace("/[^a-z0-9]/", "", strtolower(trim($s)));
        return strrev($trimString) == $trimString ? true : false;
    }
}