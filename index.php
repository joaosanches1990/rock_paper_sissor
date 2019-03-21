<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rock Paper Scissor</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <h1>Rock Paper Scissors</h1>
    </header>
    <div class="score-board">
      <div id= "user-label" class="badge">player</div>
      <div id= "computer-label" class="badge">comp</div>
      <span id="user-score">0</span>:<span id="computer-score">0</span>
    </div>

    <div class="result">
      <p>Paper wins over Rock. You Win!</p>
    </div>
    <div class="choices">
      <div class="choice" id="r">
        <img src="media/rock.png" alt="">
      </div>
      <div class="choice" id= "p">
        <img src="media/paper.png" alt="">
      </div>
      <div class="choice" id= "s">
        <img src="media/scissors.png" alt="">
      </div>
    </div>
    <p id="action-message">Make your choice</p>
      <script src="app.js" charset="utf-8"></script>
  </body>
</html>
