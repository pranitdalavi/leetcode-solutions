    class Solution {

        /**
        * @param String $a
        * @param String $b
        * @return String
        */
        function addBinary($a, $b) {
            $a = strrev($a);
            $b = strrev($b);
            $carry = 0;
            $z = [];

            $maxString = strlen($a) > strlen($b) ? strlen($a) : strlen($b);

            for($i=0; $i < $maxString; $i++){
                $x = isset($a[$i]) ? $a[$i] : 0;
                $y = isset($b[$i]) ? $b[$i] : 0;
        
                $sum = $x + $y + $carry;

                $z[] = $sum % 2;   
                $carry = intdiv($sum, 2);
            }

            if ($carry) {
                $z[] = $carry;
            }

            return strrev(implode('', $z));
        }
    }