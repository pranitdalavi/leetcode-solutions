class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $array = [];

        for($i=1; $i<=$n; $i++){
            ($i % 3 == 0 || $i % 5 == 0) ?
                (
                    ($i % 3 == 0 && $i % 5 == 0) ? array_push($array,"FizzBuzz") :
                    (
                        ($i % 3 == 0) ? array_push($array,"Fizz") : array_push($array,"Buzz")
                    )
                ) 
            : array_push($array,"$i");
        }
        return $array;
    }
}