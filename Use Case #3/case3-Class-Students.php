<?php

class Students
{
    public string $group;
    public string $name;
    public int $score;

    public function __construct(string $group, string $name, int $score)
    {
        $this->group = $group;
        $this->name = ucfirst($name);
        $this->score = $score;
    }
}