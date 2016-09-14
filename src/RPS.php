<?php
    class RPS
    {
        private $player1Calls;
        private $player2Calls;
        private $winner;
        private $AI;

        function __construct($player1Calls = "Rock", $player2Calls = "Rock", $AI = false)
        {
            $this->player1Calls = $player1Calls;
            $this->player2Calls = $player2Calls;
            if ($AI) {
                switch (rand (1, 3)) {
                    case 1:
                        $this->player2Calls = "Rock";
                        break;
                    case 2:
                        $this->player2Calls = "Paper";
                        break;
                    case 3:
                        $this->player2Calls = "Scissors";
                        break;
                }
            }
            $this->declareWinner();
        }

        function declareWinner()
        {
            if ($this->player1Calls == $this->player2Calls) {
                $this->winner = "Draw";
            } else if ($this->player1Calls == "Rock" && $this->player2Calls == "Scissors" ||
            $this->player1Calls == "Paper" && $this->player2Calls == "Rock" ||
            $this->player1Calls == "Scissors" && $this->player2Calls == "Paper") {
                $this->winner = "You win";
            } else {
                $this->winner = "You lose";
            }
            return $this->winner;
        }

        function getWinner()
        {
            return $this->winner;
        }

        function getPlayer1Calls()
        {
            return $this->player1Calls;
        }

        function getPlayer2Calls()
        {
            return $this->player2Calls;
        }

        function save()
        {
            array_unshift($_SESSION['games'], $this);
        }

        static function clearHistory()
        {
            $_SESSION['games'] = array();
        }
    }
 ?>
