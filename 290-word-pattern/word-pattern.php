class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        
        $tempA = [];
        $tempB = [];
        $patternA = [];
        $patternB = [];
        $incrementA = 0;
        $incrementB = 0;
        $explodedString = explode(' ',$s);

        for($i=0; $i<strlen($pattern); $i++){
            if(!isset($tempA[$pattern[$i]])){
                $tempA[$pattern[$i]] = $incrementA;
                $incrementA++;
            }else{
                $tempA[$pattern[$i]] = $tempA[$pattern[$i]];
            }
            $patternA[] = $tempA[$pattern[$i]];
        }

        for($i=0; $i<count($explodedString); $i++){
            if(!isset($tempB[$explodedString[$i]])){
                $tempB[$explodedString[$i]] = $incrementB;
                $incrementB++;
            }else{
                $tempB[$explodedString[$i]] = $tempB[$explodedString[$i]];
            }
            $patternB[] = $tempB[$explodedString[$i]];
        }

        if (array_values($patternA) === array_values($patternB)) {
            return true;
        }else{
            return false;
        }
    }
}