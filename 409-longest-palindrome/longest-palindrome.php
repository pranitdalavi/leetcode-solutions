class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {
        $s = str_split($s);
        $count = array_count_values($s);
        $sum = 0;
        $flag = false;

        foreach($count as $key => $value){
            if($value%2 == 0){
                $sum = $sum + $value;
            }else if($value%2 != 0){
                $sum = $sum + $value - 1;
                $flag = true;
            }
        }

        if($flag){
            $sum = $sum + 1;
        }

        return $sum;
    }
}