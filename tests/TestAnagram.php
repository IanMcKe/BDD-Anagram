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
            $input = "on";
            //$input_list = array("no","as");

            //Act
            $result = $test_Anagram->checkAnagram($input);

            //Assert
            $this->assertEquals(array("no"), $result);

        }


    }

?>
