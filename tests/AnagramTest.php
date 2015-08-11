<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

//1. A user should be able to enter a two letter word and potential anagram list and the app identify the anagram.

//Input: Anagram word: "on" /  List of potential Anagrams: no
//Output: array("no")

        function test_twoLetterWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "on";
            $input_list = array("no","as");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array("no"), $result);

        }
// 2. A user should be able to enter a two letter word and words into the potential anagram list of any length and the
// program will reject them accordingly.
//
// Input: Anagram word: "no" / List of potential Anagrams: as,two,five,three


        function test_twoLetterWordWithThreeLetterWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "on";
            $input_list = array("as","two","five","three");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array(), $result);

        }

//3. A user should be able to enter a three letter word and potential anagram list and have the app identify the anagram.

//Input: Anagram word: "bat" / List of potential anagrams: tab,abt,bta,tba,bat,atb
//Output: array("bat","tab")

        function test_threeLetterWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "bat";
            $input_list = array("tab","abt","bta","tba","bat","atb");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array("bat","tab"), $result);

        }

    }

?>
