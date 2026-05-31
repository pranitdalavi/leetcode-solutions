class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $firstPositions = strpos($haystack, $needle);
        return $firstPositions == '' ? -1 : $firstPositions ;
    }
}