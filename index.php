<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>じゃんけんゲーム</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="header">
        <h1>これは僕とじゃんけんで遊べるゲームです</h1>
    </div>
    <div class="main">
        <h2 class="handExplanation">以下から出したい手を選択してね！</h2>
        <img class="jankenImage" src="data:image/jpeg;base64,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">
        <p class="optionHand">0 : グー </p>
        <p class="optionHand">1 : チョキ</p>
        <p class="optionHand">2 : パー</p>
        <form action="result.php" method="post">
            <select class="selectJanken" name="hand" id="hand">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <br>
            <button class="submitJanken" type="submit">じゃんけん！！</button>
        </form>
    </div>
    <div class="footer">
        created by Chihiro Yamada
    </div>
    

</body>
</html>
