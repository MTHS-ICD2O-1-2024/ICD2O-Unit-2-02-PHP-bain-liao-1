<!DOCTYPE html>
<!-- ICS2O-Unit2-02-JS -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Area & Perimeter program, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Bain Liao" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.light_blue-orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>The Area & Perimeter program, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Area & Perimeter program, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_and_perimeter.png" alt="area and perimeter" />
      </div>
      <div class="page-content">The dimensions of a rectangle are: 5 cm and 3 cm.</div>
      <br />
      <div id="multiply-math">
        <?php echo '<p>The area is: ' . (5 * 3) . 'cm² </p>'; ?>
      </div>
      <div id="add-math">
        <?php echo '<p>The perimeter is: ' . (2 * (5 + 3)) . 'cm </p>'; ?>
      </div>
      <br />
      <div class="page-content">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>