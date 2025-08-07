<?php 
    $hand = $_POST['hand'];
    $rand = rand(0, 2); 
    function exchangeJanken($rand){
        switch ($rand) {
            case 0:
                return "グー";
                break;
        
            case 1:
                return "チョキ";
                break;
            case 2:
                return "パー";
                break;
            default:
                break;
        }
    }
    function judgeJanken($hand, $rand){
        switch($hand){
            case 0:
                switch($rand){
                    case 0:
                        return "あいこ";
                        break;
                    case 1:
                        return "あなたの勝ち";
                        break;
                    case 2;
                        return "僕の勝ち";
                        break;
                }
                break;
            case 1:
                switch($rand){
                    case 0:
                        return "僕の勝ち";
                        break;
                    case 1:
                        return "あいこ";
                        break;
                    case 2;
                        return "あなたの勝ち";
                        break;
                }
                break;
            case 2:
                switch($rand){
                    case 0:
                        return "あなたの勝ち";
                        break;
                    case 1:
                        return "僕の勝ち";
                        break;
                    case 2;
                        return "あいこ";
                        break;
                }
                break;
            default:
                break;

        }
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>じゃんけんゲーム</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="header">
        <h1>じゃんけんの結果</h1>
    </div>
    <div class="main">
        <?php 
        $myHand = exchangeJanken($rand);
        $yourHand = exchangeJanken($hand);
        $judgeHand = judgeJanken($hand, $rand);
        ?>
       <h2>僕は<?php echo $myHand ?>を出しました。</h2>
       <h2>あなたは<?php echo $yourHand ?>を出しました。</h2>
       <h2>結果は<?php echo $judgeHand ?>です！</h2>
       <div class="space"></div>
       <a href="index.php">もう一度じゃんけんに挑戦する</a>
    

</body>
</html>