class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $magazine = str_split($magazine);

        for($i=0; $i<strlen($ransomNote); $i++){
            $key = array_search($ransomNote[$i], $magazine);
            
            if($key === false){
                return false;
            }

            unset($magazine[$key]);
        }
        return true;
    }
}