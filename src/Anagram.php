<?php
    class Anagram
    {
        function checkAnagram($word, $user_list)
        {

            $list_of_words = explode("\n", file_get_contents('https://docs.oracle.com/javase/tutorial/collections/interfaces/examples/dictionary.txt'));
            $list_of_anagrams = array();
            $list_of_fails = array();
            $correct_input_check = explode(", ", $word);
            $user_word = $correct_input_check[0];
            $user_word_chars = str_split($user_word);
            sort($user_word_chars);
            $sorted_user_word = implode($user_word_chars);
            foreach($user_list as $potential_anagram){
                $potential_anagram_chars =  str_split($potential_anagram);
                sort($potential_anagram_chars);
                $sorted_potential_anagram = implode($potential_anagram_chars);
                if(($sorted_potential_anagram == $sorted_user_word) && (in_array($potential_anagram,$list_of_words)) && ($potential_anagram != $user_word)){
                    array_push($list_of_anagrams, $potential_anagram);
                }else{
                    array_push($list_of_fails, $potential_anagram);
                }
            }
            sort($list_of_anagrams);
            return array($list_of_anagrams,$list_of_fails);

        }
    }

?>
