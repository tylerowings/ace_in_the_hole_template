<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Tyler Smith Owings">
    <title>Ace in the Hole</title>
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Unica+One|Yantramanav" rel="stylesheet"> 
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/generic.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    
</head>
<body>
    
<?php include 'header.php'; ?>  
    
<main>
<img src="images/image.jpg" alt="">
<section class="section group">
    <div class="col span_2_of_3">  
        <h1>Header 1</h1>
        <h2>Header 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="sidebar">
    <div class="col span_1_of_3">
        <img src="images/image.jpg" alt="">
        <h3>Header 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    </div>
</section>
    
<?php include 'footer.php'; ?>
    
</main>
<!-- HAMBURGER MENU SCRIPT -->
<script>

    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });
</script>
</body>
</html>