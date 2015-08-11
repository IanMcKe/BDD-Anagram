## Anagram app built with BBD methodology

## Ian McKenney and Don Schemmel

## Spec

1. A user should be able to enter a two letter word and potential anagram list and have the app identify the anagram.

Input: Anagram word: "no" /  List of potential Anagrams: on,as
Output: "on is an anagram of no"

2. A user should be able to enter a two letter word and words into the potential anagram list of any length and the
program will reject them accordingly.

Input: Anagram word: "no" / List of potential Anagrams: as,two,five,three
Output: array()

3. A user should be able to enter a three letter word and potential anagram list and have the app identify the anagram.

Input: Anagram word: "bat" / List of potential anagrams: tab,abt,bta,tba,bat,atb
Output: array("bat","tab")
