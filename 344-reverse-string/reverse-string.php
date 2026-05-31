class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $temp = '';

        for($i=0; $i<count($s)/2; $i++){
            $temp = $s[count($s)-$i-1];
            $s[count($s)-$i-1] = $s[$i];
            $s[$i] = $temp;
        }

        return $s;
    }
}