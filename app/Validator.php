<?php

/**
 * Class Validator for validating incoming data.
 */
class Validator {
    /**
     * Checks if the question is valid.
     *
     * @param string $question The question to validate.
     * @return bool True if valid, otherwise false.
     */
    public function validateQuestion(string $question): bool {
        return !empty($question) && strlen($question) <= 255;
    }
}