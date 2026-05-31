class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num) {
        if ($num == 0) {
            return "0";
        }

        $hexChars = "0123456789abcdef";
        $result = "";

        // Process at most 8 hex digits for a 32-bit integer
        while ($num != 0 && strlen($result) < 8) {
            $digit = $num & 0xF; // last 4 bits
            $result = $hexChars[$digit] . $result;

            // Unsigned right shift by 4 bits
            $num = ($num >> 4) & 0x0FFFFFFF;
        }

        return $result;
    }
}