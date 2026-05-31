class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $temp = $columnNumber;

        for($i=0; $i<strlen($temp); $i++){
            $columnNumber =  $columnNumber - 1;
            $mod = $columnNumber%26;
            $columnNumber = intdiv($columnNumber, 26);
            
            $a[] = chr(65 + $mod);

            if ($columnNumber == 0) {
                break;
            }
        }
        return implode("", array_reverse($a));
    }
}