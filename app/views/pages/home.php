<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <title>Magic Ball</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Magic Ball</h1>
            </header>
            <main>
                <form method="POST">
                    <label for="question">Задайте своє питання:</label>
                    <input type="text" id="question" name="question" required>
                    <button type="submit">Запитати</button>
                </form>
                <div class="ball-container">
                    <div class="magic-ball <?= isset($_POST['question']) ? 'shake' : ''; ?>">
                        <div class="inner-ball">
                            <?= isset($response) ? $response : ''; ?>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <p>&copy; 2024 Magic Ball</p>
            </footer>
        </div>
    </body>
</html>
