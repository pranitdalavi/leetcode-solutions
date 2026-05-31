class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $result = 0;

        for($i=0; $i<strlen($columnTitle); $i++){
            $temp = ord($columnTitle[$i]) - ord('A') + 1;
            $result = $result * 26 + $temp;
        }
        return $result;
    }
}