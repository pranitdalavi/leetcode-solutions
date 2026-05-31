class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        return strlen(reset(array_reverse(explode(' ',trim($s)))));
    }
}