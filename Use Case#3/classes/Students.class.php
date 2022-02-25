<?php

class Students
{
    public string $name;
    public int $score;

    public function __construct(string $name, int $score)
    {
        $this->name = ucfirst($name);
        $this->score = $score;
    }
}