<?php

/**
 * Class RequestHandler handles user requests.
 */
class RequestHandler {
    /**
     * Handles the incoming request and displays the response.
     */
    public function handleRequest(): void {
        $response = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new Validator();
            $question = $_POST['question'] ?? '';

            // Validate the question
            if ($validator->validateQuestion($question)) {
                $magicBall = new MagicBall();
                $response = $magicBall->getRandomResponse();
            } else {
                $response = "The question must not be empty";
            }
        }

        $this->showPage($response); // Display the page with the response
    }

    /**
     * Displays the page with an optional response.
     *
     * @param string|null $response The response to display.
     */
    private function showPage(?string $response = null): void {
        include 'app/views/template/index_template.php';
    }
}