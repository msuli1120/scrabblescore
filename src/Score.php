<?php
  class Score {

    function scoreCalc ($user_input) {
      $score_array = array (array (), array ("A","E","I","O","U","L","N","R","S","T"), array ("D","G"), array ("B","C","M"), array ("F","H","V","W","Y"), array ("K"), array (), array(), array ("J","X"), array (), array("Q","Z"));

      $input = strtoupper($user_input);
      $input_array = str_split($input);
      $score = 0;

      foreach($input_array as $letter){
        foreach ($score_array as $key=>$value) {
          if(in_array($letter, $value)){
            $score += $key;
          }
        }
      }
      return $score;
    }



  }
?>
