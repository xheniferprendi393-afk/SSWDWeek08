<?php

class Team {

    public $name;
    public $totalPoints;
    public $totalGames;
    public $totalGoals;

    function __construct($teamName) {
        $this->name = $teamName;
        $this->totalPoints = 0;
        $this->totalGames = 0;
        $this->totalGoals = 0;
    }

    function finalScore($homeScore, $awayScore) {

        if ($homeScore > $awayScore) {
            $this->totalPoints += 3;
        }
        else if ($homeScore == $awayScore) {
            $this->totalPoints += 1;
        }

        $this->totalGoals += $homeScore;
        $this->totalGames += 1;
    }

}

?>