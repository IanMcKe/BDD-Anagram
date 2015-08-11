<?php
    class Anagram
    {
        function checkAnagram($user_word, $user_list)
        {

            $list_of_words = explode("\n", file_get_contents('http://www.puzzlers.org/pub/wordlists/unixdict.txt'));
            $list_of_anagrams = array();
            $user_word_chars = str_split($user_word);
            sort($user_word_chars);
            $sorted_user_word = implode($user_word_chars);
            foreach($user_list as $potential_anagram){
                $potential_anagram_chars =  str_split($potential_anagram);
                sort($potential_anagram_chars);
                $sorted_potential_anagram = implode($potential_anagram_chars);
                if(($sorted_potential_anagram == $sorted_user_word) && (in_array($potential_anagram,$list_of_words))){
                    array_push($list_of_anagrams, $potential_anagram);
                }
            }

            return $list_of_anagrams;

        }
    }


    //
    // $words = explode("\n", file_get_contents('http://www.puzzlers.org/pub/wordlists/unixdict.txt'));
    // foreach ($words as $word) {
    //     $chars = str_split($word);
    //     sort($chars);
    //     $anagram[implode($chars)][] = $word;
    // }
    //
    // $best = max(array_map('count', $anagram));
    // foreach ($anagram as $ana)
    //     if (count($ana) == $best)
    //         print_r($ana);
    //

?>
