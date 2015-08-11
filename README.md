## Anagram app built with BBD methodology

## Ian McKenney and Don Schemmel

## Spec

1. A user should be able to enter a two letter word and potential anagram list and have the app identify the anagram.
  * Input: Anagram word: "no" /  List of potential Anagrams: on,as
  * Output: "on is an anagram of no"

2. A user should be able to enter a two letter word and words into the potential anagram list of any length and the
program will reject them accordingly.
  * Input: Anagram word: "no" / List of potential Anagrams: as,two,five,three
  * Output: array()

3. A user should be able to enter a three letter word and potential anagram list and have the app identify the anagram.
  * Input: Anagram word: "bat" / List of potential anagrams: tab,abt,bta,tba,bat,atb
  * Output: array("bat","tab")

4. If a user enters a word in their potential anagram list that is the exact same thing as the word they want to check against, the app should reject that word.
  * Input: Anagram word: "bat" / List of potential anagrams: "tab","bat"
  * Output: array("tab")

5. A user should be able to enter a five letter word and words into the potential anagram list of any length and the program will reject them accordingly.
  * Input: Anagram word: nets / nest,sent,tens,falsdkfj,yodel,1234,sigh,sten,tsne
  * Output: array("nest","sent","tens")

6. The app should only read the first word if the user enters more than one word into the "word" form.
  * Input: bat, bread / tab
  * Output: array("tab")

7. The app should display words the user entered but were not anagrams in a separate list
  * Input: Anagram word: "bat" / List of potential anagrams: tab,abt,bta,tba,bat,atb
  * Output: array(array("bat","tab"),array(abt,bta,tba,atb))
