<?php


    class GameData {

        public $id;

        public $playerOneName;
        public $playerTwoName;

        public $playerOneTotalScore;
        public $playerTwoTotalScore;

        public $playerOneDartScore;
        public $playerTwoDartScore;
        

        function __construct($playerOneName = null, $playerTwoName = null, $playerOneTotalScore = null, $playerTwoTotalScore = null, $playerOneDartScore = null, $playerTwoDartScore = null) {

            $this -> playerOneName = $playerOneName;
            $this -> playerTwoName = $playerTwoName;
            $this -> playerOneTotalScore = $playerOneTotalScore;
            $this -> $playerTwoTotalScore = $playerTwoTotalScore;
            $this -> $playerOneDartScore = $playerOneDartScore;
            $this -> $playerTwoDartScore = $playerTwoDartScore;
            
        }

        public function description() {

            echo "<br>Cia description funkcijos rezultatas. playerOneName - " . $this->playerOneName .  ", playerTwoName - " . $this->playerTwoName . 
            ", playerOneTotalScore - " . $this->playerOneTotalScore .  ", playerTwoTotalScore - " . $this->playerTwoTotalScore. ", playerOneDartScore - " .
             $this->playerOneDartScore .  ", playerTwoDartScore - " . $this->playerTwoDartScore."<br>" ;
        }

        public function __toString() {

            return "<br>Cia toString funkcijos rezultatas. playerOneName - " . $this->playerOneName .  ", playerTwoName - " . $this->playerTwoName . 
            ", playerOneTotalScore - " . $this->playerOneTotalScore .  ", playerTwoTotalScore - " . $this->playerTwoTotalScore. ", playerOneDartScore - " .
             $this->playerOneDartScore .  ", playerTwoDartScore - " . $this->playerTwoDartScore."<br>" ;
        }


    }
?>