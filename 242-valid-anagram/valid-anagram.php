class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $sSplit = (str_split($s));
        $tSplit = (str_split($t));
        sort($sSplit);
        sort($tSplit);
        return $sSplit === $tSplit;
    }
}