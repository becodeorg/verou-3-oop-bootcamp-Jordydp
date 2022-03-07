<?php

class Group extends Students
{
    public array $group;
    


    public function __construct(array $group = [], string $name = '', int $score = 0)
    {
        $this->group = $group;
        parent::__construct($name, $score);
    }

    public function getName() {
        return $this->group;
    }


    public function calcAvarage () {
        $totalScore = 0;
        foreach($this->group as $groupMember){
            $totalScore += $groupMember->score;
        };
        $groupMembers = count($this->group);

        $avvarageScore = $totalScore / $groupMembers;

        return $avvarageScore;
    }

    public function sortGroup() {
        usort($this->group, function($studentOne, $studentTwo){
            return $studentOne->score <=> $studentTwo->score;
        });
        print_r($this->group);

    }

}