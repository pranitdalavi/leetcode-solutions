class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $sSplit = str_split($s);
        $countValues = array_count_values($sSplit);
        $flag = false;

        for($i=0; $i<count($sSplit); $i++){
            if($countValues[$sSplit[$i]] == 1){
                $firstNotrepetingIndex = $i;
                $flag = true;
                break;
            }
        }
        return $flag == false ? -1 : $firstNotrepetingIndex;
    }
}