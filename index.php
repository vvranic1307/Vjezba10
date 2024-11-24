<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brojač riječi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        textarea, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Brojač riječi</h1>
        <form method="post" action="">
            <label for="recenica">Unesite rečenicu:</label>
            <textarea id="recenica" name="recenica" rows="4" placeholder="Unesite rečenicu za brojanje riječi..." required></textarea>
            <button type="submit">Prebroji riječi</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $recenica = isset($_POST['recenica']) ? $_POST['recenica'] : "";

            // Brojanje riječi
            $brojRijeci = str_word_count($recenica);

            // Prikaz rezultata
            echo '<div class="result">';
            echo '<strong>Broj riječi:</strong> ' . $brojRijeci;
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
