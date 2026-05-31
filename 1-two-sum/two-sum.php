class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $numIndex => $numValue){
            for($i=$numIndex+1; $i<= count($nums); $i++){
                $checkTrue = $nums[$numIndex] + $nums[$i] == $target; 
                if($checkTrue){
                    return [$numIndex,$i];
                }
            }
        }
    }
}