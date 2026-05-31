class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $count = [];

    for ($i = 0; $i < strlen($t); $i++) {
        $count[$t[$i]] = ($count[$t[$i]] ?? 0) + 1;
    }

    for ($i = 0; $i < strlen($s); $i++) {
        $count[$s[$i]]--;
    }

    foreach ($count as $char => $val) {
        if ($val > 0) {
            return $char;
        }
    }

    }
}