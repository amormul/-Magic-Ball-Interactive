<?php

/**
 * Class MagicBall generates a random response to user questions.
 */
class MagicBall
{
    /**
     * @var array List of possible responses.
     */
    private array $responses;

    /**
     * Initializes the MagicBall class with a set of responses.
     */
    public function __construct() {
        $this->responses = [
            "Yes",
            "No",
            "Maybe",
            "Not sure",
            "Try again"
        ];
    }

    /**
     * Returns a random response.
     *
     * @return string A random response from the list.
     */
    public function getRandomResponse(): string {
        return $this->responses[array_rand($this->responses)];
    }
}