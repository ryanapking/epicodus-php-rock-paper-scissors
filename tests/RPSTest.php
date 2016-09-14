<?php
    require_once __DIR__.'/../src/RPS.php';

    class RPSTest extends PHPUnit_Framework_TestCase
    {
        function test_declareWinner_rockRock()
        {
            // Arrange
            $test_RPS = new RPS("Rock", "Rock");
            // Act
            $result = $test_RPS->declareWinner();
            // Assert
            $this->assertEquals("Draw", $result);
        }

        function test_declareWinner_rockScissors()
        {
            // Arrange
            $test_RPS = new RPS("Rock", "Scissors");
            // Act
            $result = $test_RPS->declareWinner();
            // Assert
            $this->assertEquals("Player 1 wins", $result);
        }

        function test_declareWinner_paperRock()
        {
            // Arrange
            $test_RPS = new RPS("Paper", "Rock");
            // Act
            $result = $test_RPS->declareWinner();
            // Assert
            $this->assertEquals("Player 1 wins", $result);
        }

        function test_declareWinner_paperScissors()
        {
            // Arrange
            $test_RPS = new RPS("Paper", "Scissors");
            // Act
            $result = $test_RPS->declareWinner();
            // Assert
            $this->assertEquals("Player 2 wins", $result);
        }
    }
 ?>
