<?php

  require_once 'src/Score.php';

  class ScoreTest extends PHPUnit_Framework_TestCase {

    function test_oneword () {

      //Arrange
      $test_score = new Score;
      $input = "a";
      //Act
      $result = $test_score->scoreCalc($input);
      //Assert
      $this->assertEquals(1, $result);
    }

    function test_twowords () {

      //Arrange
      $test_score = new Score;
      $input = "ae";
      //Act
      $result = $test_score->scoreCalc($input);
      //Assert
      $this->assertEquals(2, $result);
    }

    function test_twowords_different () {

      //Arrange
      $test_score = new Score;
      $input = "adc";
      //Act
      $result = $test_score->scoreCalc($input);
      //Assert
      $this->assertEquals(6, $result);
    }

  }

?>
