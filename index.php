
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
   <title>Welcome To Aprió</title>
</head>
<body>
<?php include "includes/nav.php"?>

    <header class="header-img">
        
        <img src="images/restaurant-banner.png" alt="picture of fine dining Italian Dish" class="desktop-header" >
        <img src="images/mobile-header.png" alt="picture of fine dining Italian Dish" class="mobile-header" width="375px" >
    </header>
    <main>
        <section>
            <h1>Our Top Rated Dishes</h1>
            <p class="dishes-blurb">Carefully crafted by a world renowned Chef.</p>
            <div class="top-dishes">
            <img src="images/gnocchi.png" alt="gnocchi" class="dishes">
            <img src="images/pasta.png" alt="pasta" class="dishes">
            <img src="images/spaghetti.png" alt="spaghetti" class="dishes"> 
            </div>
           <div class="booking-btn">
            <button class="book-btn"><a href="https://www.opentable.com/start/home" target="_blank">Book Now</a></button>
           </div>
            
        </section>
       
        <div class="grid-section">
          <h1>About Us</h1>
            <div class="text-image">
                <div>
                    <img src="images/chef.png" alt="Chef in uniform" class="grid-item grid-img">
                </div>

                <div>
                   <p class="grid-text grid-item">Renowned for his culinary innovation and artistry, Chef René Redzepi has revolutionized fine dining with his pioneering restaurant, Aprió, in London. Often hailed as the best chef in the world, Redzepi's emphasis on foraging and local, seasonal ingredients has set new standards in contemporary cuisine. His dedication to exploring and reinventing Italian cuisine has earned him multiple Michelin stars and global acclaim.</p>   
                </div>
               
            </div>
            
          
             <div class="text-image">
                <div>
                     <p class="grid-text">At Aprió, we are committed to excellence by using only the finest ingredients. Each component is meticulously selected for superior quality, freshness, and flavor. We source the best local and seasonal produce to ensure an unforgettable dining experience. Every bite reflects our passion for culinary perfection and dedication to quality. This commitment makes each meal truly exceptional and memorable.</p>
                </div>
                 <div>
                     <img src="images/ingredients.png" alt="spoons with spices on" class="grid-img">
                 </div>
              
             </div>
               
              
            
           <div class="text-image">
            <div>
               <img src="images/prep.png" alt="Hands prepping food" class="grid-img"> 
            </div>
             <div>
                 <p class="grid-text">We pride ourselves on the meticulous presentation of our dishes. Each plate is a work of art, crafted with precision and creativity to delight both the eyes and the palate. Our chefs meticulously design every element to ensure it not only tastes exquisite but also looks stunning. Attention to detail is paramount, making each dish a visual and culinary masterpiece. This commitment ensures your dining experience is truly exceptional, memorable from the first glance to the last bite.</p>
             </div>
               
           </div>
               
            
        </div>
     <?php include "includes/footer.php"?>
    </main>
    <script src="script.js"></script>
</body>
</html>