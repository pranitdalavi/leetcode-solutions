class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowelsArray = ['a','e','i','o','u','A','E','I','O','U'];
        $vowelsArray = array_flip($vowelsArray);

        $left = 0;
        $right = strlen($s) - 1;

        while($left < $right){
            
            if(!isset($vowelsArray[$s[$left]])){
                $left++;
            }else if(!isset($vowelsArray[$s[$right]])){
                $right--;
            }else{
                $temp = $s[$left];
                $s[$left] = $s[$right];
                $s[$right] = $temp;

                $left++;
                $right--;
            }
        }
        return $s;
    }
}