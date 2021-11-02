<?php   
    function anagram($string_1, $string_2)
    {
        if (count_chars($string_1, 1) == count_chars($string_2, 1))
            return 'yes';
        else 
            return 'no';       
    }
  
    print_r(anagram('program', 'grampro')."<br/>");
    print_r(anagram('card', 'cart'));
?>