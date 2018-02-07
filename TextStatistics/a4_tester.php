<?php 
define('PUNCUTATION', ['!', '~', '`','^', '(', ')', '_','{','}','[',']','|','\\', ';', ':','"', "'", ',', '.', '?']);
define('WORDCHARS', ['@','#','%','$','&','+','-','=','<','>','*', '/']);
define('VOWELS', ['a', 'e', 'i', 'o', 'u', 'y']);

define('input', filter_input(INPUT_POST, 'text'));


//#1: Find # of characters. done
function characters() {
    return strlen(input);
}//end chars


//#2: # of letters in text. done
function letters() {
    $total = [];
    for ($i = 0; $i < strlen(input); $i++ ) {
        if (ctype_alpha(input[$i])) {
            $total[] = input[$i];
        }
    }
    
    return count($total);
}//end letters


#3: # of consonants in text - BROKEN, reading all includ vowels
function consonants()
{
    $result = [];
    $vowels = 0;
    $consonant = 0;
    for ($i = 0; $i <= strlen(input) - 1; $i++) {
        if (ctype_alpha(input[$i])) {
            if (in_array(input[$i], VOWELS) != true) {
                $consonant++;
            } else {
                $vowels++;
            }
        }
    }
    return $consonant;
}//end consonants


//#4: digits - BROKEN, printing 3?
function digits(){
  $result = [];
  for ($i = 0; $i <= strlen(input) - 1; $i++) {
      if (ctype_digit(input[$i])) {
        $result[] = input[$i];
      }
  }

  return count($result);
}//end digits


//#5: white-spaces DONE
function white(){
    return substr_count(input, " ");
}//end white spaces


//#6: Word characters - BROKEN
function wordchars(){
    //$total []; if this is used the page breaks
    $wordchars = 0;
    $non = 0;
    
    for($i = 0; $i <= strlen(input) -1; $i++){
        if(in_array(input[$i], WORDCHARS)){
            $wordchars++;
        }else{
            $non++;
        }
    }
    return $wordchars;
}//end wordchar    


//#7 Punctuation - BROKEN, returns nothing
function punctuation(){
    //$total []; //if this is used the page breaks
    $punct = 0;
    $non = 0;
    
    for($i = 0; $i <= strlen(input) -1; $i++){
        if(in_array(input[$i], PUNCUTATION)){
            $punct++;
        }else{
            $non++;
        }
    }
    return $punct;
}

//#8 Each word occurances - BROKEN
function wordOccurrence()
{
    $occurs = array_count_values(str_word_count(strtolower(input), 1));
    foreach ( $occurs as $word=> $frequency) {
        print  $word  . " occurs " . $frequency . " times ";
    }
}//end each word count
