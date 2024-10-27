<?php

class RequestHandler {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $magicBall = new MagicBall();
            $response = $magicBall->getRandomResponse();
            $this->showPage($response);
        } else {
            $this->showPage();
        }
    }

    private function showPage($response = null) {
        include 'app/views/pages/home.php';
    }
}
