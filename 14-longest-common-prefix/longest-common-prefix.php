class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if($strs[0] == "" || count($strs) == 1){
            return $strs[0];
        }

        $minCountOfString = min(array_map('strlen', $strs));
        $lowestString = [];
    
        $smallestStrings = array_filter($strs, function($string) use ($minCountOfString) {
            return strlen($string) == $minCountOfString;
        });
        
        $flag = false;
        
        for($i=0; $i<$minCountOfString; $i++){
            foreach($strs as $value){
                if($value[$i] == array_values($smallestStrings)[0][$i]){
                    $flag = true;
                }else{
                    $flag = false;
                    break;
                }
            }
            if($flag == true){
                $lowestString[] = array_values($smallestStrings)[0][$i];
            }else{
                break;
            }
        }

        return implode('',$lowestString);
    }
}