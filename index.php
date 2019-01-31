<!doctype html>
<html lang="jp">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <title>3問で診断！-あなたにオススメの趣味は？</title>
  </head>

  <body>
    <div class="container">
      <div class="text-center">
        <h1>あなたにオススメの趣味を3問でズバッと診断！</h1>
        何か趣味をはじめたいと思っているけど、何にしよう...そんなあなたにこの診断を捧げます。<br>
        簡単な質問に答えていくだけであなたの性格をふまえた趣味を提案！<br>
        さあ、早速ボタンを押して新しい世界への第一歩を踏み出しましょう。<br>
      </div>
      <div class = "quiz_field bg-light" >
        <div id = "question"></div>
        <div id = "choiceA"></div>
        <div id = "choiceB"></div>
        <div id = "answer"></div>
      </div>
      <button id = "start_btn" class="btn btn-info" data-click = "次へ" data-status = "FALSE">診断スタート！</button><br>
    </div>

   <script src="./js/ajax.js"></script>

  </body>
</html>