class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $tempA = [];
        $tempB = [];
        $patternA = [];
        $patternB = [];
        $incrementA = 0;
        $incrementB = 0;

        for($i=0; $i<strlen($s); $i++){
            if(!isset($tempA[$s[$i]])){
                $tempA[$s[$i]] = $incrementA;
                $incrementA++;
            }else{
                $tempA[$s[$i]] = $tempA[$s[$i]];
            }
            $patternA[] = $tempA[$s[$i]];
        }

        for($i=0; $i<strlen($t); $i++){
            if(!isset($tempB[$t[$i]])){
                $tempB[$t[$i]] = $incrementB;
                $incrementB++;
            }else{
                $tempB[$t[$i]] = $tempB[$t[$i]];
            }
            $patternB[] = $tempB[$t[$i]];
        }

        if (array_values($patternA) === array_values($patternB)) {
            return true;
        }else{
            return false;
        }
    }
}