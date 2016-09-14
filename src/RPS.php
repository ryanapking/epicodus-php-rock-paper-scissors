<?php
    class RPS
    {
        private $player1Calls;
        private $player2Calls;
        private $winner;

        function __construct($player1Calls = "Rock", $player2Calls = "Rock")
        {
            $this->player1Calls = $player1Calls;
            $this->player2Calls = $player2Calls;
            $this->declareWinner();
        }

        function declareWinner()
        {
            if ($this->player1Calls == $this->player2Calls) {
                return "Draw";
            } else if ($this->player1Calls == "Rock" && $this->player2Calls == "Scissors" ||
            $this->player1Calls == "Paper" && $this->player2Calls == "Rock" ||
            $this->player1Calls == "Scissors" && $this->player2Calls == "Paper") {
                return "Player 1 wins";
            } else {
                return "Player 2 wins";
            }
        }

        function getWinner()
        {
            return $this->winner;
        }
    }
 ?>
