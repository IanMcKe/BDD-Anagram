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
            $this->assertEquals(array(array("no"),array("as")), $result);

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
            $this->assertEquals(array(array(),array("as","two","five","three")), $result);

        }

//3. A user should be able to enter a three letter word and potential anagram list and have the app identify the anagram.

//Input: Anagram word: "bat" / List of potential anagrams: tab,abt,bta,tba,bat,atb
//Output: array("bat","tab")

        function test_threeLetterWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "bat";
            $input_list = array("tab","abt","bta","tba","atb");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array(array("tab"),array("abt","bta","tba","atb")), $result);

        }
//4. If a user enters a word in their potential anagram list that is the exact same thing as the word they want to check against, the app should reject that word.

//Input: Anagram word: "bat" / List of potential anagrams: "tab","bat"
//Output: array("tab")


        function test_wordRejectsItself()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "bat";
            $input_list = array("tab","bat");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array(array("tab"),array("bat")), $result);

        }
//5. A user should be able to enter a five letter word and words into the potential anagram list of any length and the
//program will reject them accordingly.

//Input: Anagram word: nets / nest,sent,tens,falsdkfj,yodel,1234,sigh,sten,tsne


        function test_fourLetterWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "nets";
            $input_list = array("sent","nest","falsdkfj","yodel","1234","sigh","sten","tsne","nets","a","tens");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array(array("nest","sent","tens"),array("falsdkfj","yodel","1234","sigh","sten","tsne","nets","a")), $result);

        }

//6. The app should only read the first word if the user enters more than one word into the "word" form.

//Input: bat, bread / tab
//Output: array("tab")

        function test_correctInputCheck()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "bat, bread";
            $input_list = array("tab");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array(array("tab"),array()), $result);

        }

//7. The app should display words the user entered but were not anagrams in a separate list

//Input: Anagram word: "bat" / List of potential anagrams: tab,abt,bta,tba,bat,atb
//Output: array(array("tab"),array(abt,bta,tba,atb,bat))


        function test_failureList()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "bat";
            $input_list = array("tab","abt","bta","tba","bat","atb");

            //Act
            $result = $test_Anagram->checkAnagram($input_word, $input_list);

            //Assert
            $this->assertEquals(array(array("tab"), array("abt","bta","tba","bat","atb")), $result);

        }


    }

?>
