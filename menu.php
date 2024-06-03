<?php require "php/functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="We have a wide collection of delicious and authentic Italian meals">
    <meta name="keywords" content="food, italian, pasta">
    <link rel="stylesheet" href="styles.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Aprió | Menu </title>
</head>
<body>
<?php include "includes/nav.php"?>

<main>
    <h1 class="menu-page">Menu</h1>


<h4 class="menu-blurb">Discover our gourmet menu, featuring a curated selection of exquisite dishes crafted with the finest ingredients. From luxurious starters to decadent desserts, each plate is a harmonious blend of flavors and artistry, promising an unforgettable dining experience. Indulge in culinary excellence with every bite.</h4>
    
        <?php $items = getMenuItems()?>
        
    <div class="menu-items">
        <?php 
            foreach($items as $item){

                ?>
               <div>
                  <h3 class="menu-title"><?php echo $item['name']?></h3>
                <div class="menu-image">
                   <img src="<?php echo "{$item['image']}" ?>" alt="menu image" class="grid-menu-img"> 
                </div>
                <p class="menu-description"><?php echo $item['description']?></p>
                <p class="menu-price">£<?php echo $item['price']?></p>  
               </div>
                
                
                
                

                <?php
            }
        ?>
    </div>
</main>

<?php include "includes/footer.php"?>
<script src="script.js"></script>
</body>
</html>