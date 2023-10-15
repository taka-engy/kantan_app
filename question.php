<!DOCTYPE html>
<html>
<head>
    <title>3択問題</title>
</head>
<body>
    <h1>3択問題</h1>
    
    <?php
    // 質問と選択肢のデータ
    $question = '次の内、最も大きな惑星はどれですか？';
    $choices = [
        'A. 地球',
        'B. 木星',
        'C. 金星',
    ];
    
    echo '<p>質問: ' . $question . '</p>';
    
    echo '<form action="check_answer.php" method="post">';
    foreach ($choices as $choice) {
        echo '<input type="radio" name="choice" value= "'.$choice.'" > ' . $choice . '<br>';
    }
    echo '<br>';
    echo '<button type="submit">回答を送信</button>';
    echo '</form>';
    ?>
</body>
</html>
