<?php
class MagicBall
{
    private $responses;
    public function __construct() {
        $this->responses = [
            "Так",
            "Ні",
            "Можливо",
            "Не впевнений",
            "Спробуй ще раз"
        ];
    }
    public function getRandomResponse() {
        return $this->responses[array_rand($this->responses)];
    }
}