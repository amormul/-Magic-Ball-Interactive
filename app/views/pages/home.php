<form method="POST" novalidate>
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