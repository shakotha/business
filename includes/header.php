 <html> 
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="index.html" id="logo">
        <h1>Ravi&rsquo;s Kitchen</h1>
        <h2>Home Cooked Indian Food</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.php" class = "<?php if ($section == "home") { echo "selected"; }?>">Home</a></li>
          <li><a href="about.php" class = "<?php if ($section == "about") {echo "selected"; }?>">About</a></li>
          <li><a href="contact.php" class = "<?php if ($section == "contact") { echo "selected"; }?>">Contact</a></li>
          <li><a href="menu.php" class = "<?php if ($section == "menu") { echo "selected"; }?>">Menu</a></li>
        </ul>
      </nav>
    </header>
  