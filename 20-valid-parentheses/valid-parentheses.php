class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        $stringArray = str_split($s);
        $length = strlen($s);

        for($i=0; $i<$length; $i++){
            if(in_array($s[$i],['(','[','{'])){
                
                array_push($stack,$s[$i]);
                
            }else{
                $lastParenthesis = array_pop($stack);
                if($lastParenthesis !== $map[$s[$i]]){
                    echo "Invalid parenthesis";
                    return false;
                }
            }
        }
        
        return empty($stack);
    }
}