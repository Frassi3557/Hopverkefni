<html>
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Foreach lykkja fer í gegnum multidimensional fylkið sem heldur utan um orðtökin -->
    <?php foreach($ordtok as $key => $value): ?>
    <!-- Klasi sem heldur utan um allar upplýsingarnar í fylkinu -->
    <div class="group">
      <!-- Skrifar út orðtakið í h1 -->
      <h1><?php echo $ordtok[$key]['ordtak']?></h1>
      <!-- Klasi sem heldur utan um upplýsingar um orðtakið -->
      <div class="ordtak">
        <!-- Klasi sem heldur utan um útskýringuna á orðtakinu -->
        <div class="utskyring">
          <p><?php echo $ordtok[$key]['utskyring']?></p>
        </div>
        <p><?php echo $ordtok[$key]['uppruni']?></p>
        <!-- Klasi sem heldur utan um dæmið -->
        <div class="daemi">
          <p class="daemi-text">Dæmi:</p>
          <p><?php echo $ordtok[$key]['daemi']?></p>
        </div>
      </div>
    </div>
    <!-- Lokar lykkjunni -->
    <?php endforeach; ?>
  </body>
</html>
