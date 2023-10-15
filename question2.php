<!DOCTYPE html>
<html>
<head>
    <title>3択問題 - 質問 2</title>
</head>
<body>
    <h1>3択問題 - 質問 2</h1>
    
    <?php
    // 質問と選択肢のデータ (2問目)
    $question = '最も大きな天体は何ですか？';
    $choices = [
        'A. 地球',
        'B. 太陽',
        'C. 月',
    ];
    
    echo '<p>質問: ' . $question . '</p>';
    
    echo '<form action="check_answer2.php" method="post">';
    foreach ($choices as $choice) {
        echo '<input type="radio" name="choice" value="' . substr($choice, 0, 1) . '"> ' . $choice . '<br>';
    }
    echo '<br>';
    echo '<button type="submit">回答を送信</button>';
    echo '</form>';
    ?>
</body>
</html>
