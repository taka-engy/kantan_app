<!DOCTYPE html>
<html>
<head>
    <title>回答結果 - 質問 1</title>
</head>
<body>
    <h1>回答結果 - 質問 1</h1>
    
    <?php
    // 正解の選択肢 (1問目)
    $correctAnswer = 'B';
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $userAnswer = $_POST["choice"];
        echo '<p>あなたの回答: ' . $userAnswer . '</p>';
        echo '<p>正解: ' . $correctAnswer . '</p>';
        
        if ($userAnswer === $correctAnswer) {
            echo '<p>正解です！</p>';
        } else {
            echo '<p>不正解です。</p>';
        }
        
        // 2問目を出題するリンク
        echo '<a href="question2.php">次の質問へ進む</a>';
    } else {
        echo '<p>回答がありません。</p>';
    }
    ?>
</body>
</html>
