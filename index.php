<?php
 require("indexbd.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/cold-drink-png-favpng-btjaQUJiEd5iKbHgjt6r9hv5e.jpg" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <title>the coffee shop app</title>
</head>
<body>
    <header class="header">
            <a class="logo-cafe" href="#">Bean Scene</a>
            <div>
                <a class="link-home" href="#">Home</a>
                <a class="link-menu" href="#"> Menu</a>
                <a class="link-about-us" href="#">About Us</a>
                <a class="link-contact-us" href="#">Contact Us</a>
                <a class="link-sign-in" href="registration.php">Sign In</a>
            </div>

            <div class="link-button">
                <a class="link-singup" href="#">SingUp</a>
            </div>

       <div>
            <p class="description-wish">We’ve got your morning covered with</p>
            <p class="logo-coffee">Coffee</p>
            <p class="description">It is best to start your day with a cup of coffee. Discover the
                best flavours coffee you will ever have. We provide the best
                for our customers.</p>
            <div class="link-button-Order-Now">
               <a class="link-Order-Now" href="#">Order Now</a>
            </div>
            
            <p class="description-coffee">Discover the best coffee</p>
            <p class="description-Bean-Scene">Bean Scene is a coffee shop that provides you with quality 
             coffee that helps boost your productivity and helps build your mood. 
             Having a cup of coffee is good, but having a cup of real coffee is greater. 
             There is no doubt that you will enjoy this coffee more than others you have ever tasted.
            </p>
            <div class="js-img-coffee-cup">
                <img class="img-coffee-cup" src="img/stylized-cup-coffee-out-coffee-beans-flat-lay.png" alt="">
            </div>
            <div class="button-Learn-More">
                <a class="link-Learn-More" href="#">Learn More</a>
            </div>
            <img class="coffee-blast" src="img/coffee_blast.png" alt="">
            <p class="wish-coffee">Enjoy a new blend of coffee style</p>
            <p class="recommendations">Explore all flavours of coffee with us. There is always a new cup worth experiencing</p>
       </div>

       <div>
         <img class="img-cappuccino" src="img/Cappuccino.png" alt="">
         <img class="img-chai-latte" src="img/Chai-Latte.png" alt="">
         <img class="img-macchiato" src="img/Macchiato.png" alt="">
         <img class="img-expresso" src="img/Expresso.png" alt="">
       </div>

       <div>
            <p class="img-title-Cappuccino">Cappuccino</p>
            <p class="img-cappuccino-skitka">Coffee 50% | Milk 50%</p>
            <p class="img-cappuccino-price">$8.50</p>

            <p class="img-title-Chai-Latte">Chai Latte</p>
            <p class="img-chai-latte-skitka">Coffee 50% | Milk 50%</p>
            <p class="img-chai-latte-price">$8.50</p>

            <p class="img-title-Macchiato">Macchiato</p>
            <p class="img-macchiato-skitka">Coffee 50% | Milk 50%</p>
            <p class="img-macchiato-price">$8.50</p>

            <p class="img-title-Expresso">Expresso</p>
            <p class="img-expresso-skitka">Coffee 50% | Milk 50%</p>
            <p class="img-expresso-price">$8.50</p>
       </div>
        
       <form action="create.php" method="post">
            <div class="link-button-Order-Now-cappuccino">
                <a name="Cappuccino" type="submit" class="Cappuccino-link-Order-Now" href="create.php?id=Cappuccino">Order Now</a>
            </div>
    
            <div class="link-button-Order-Now-chai-latte">
                <a type="submit" class="Chai-Latte-link-Order-Now" href="create.php?id=Chai-Latte">Order Now</a>
            </div>
    
            <div class="link-button-Order-Now-Macchiato">
                <a  type="submit"class="Macchiato-link-Order-Now" href="create.php?id=Macchiato">Order Now</a>
            </div>
    
            <div class="link-button-Order-Now-Expresso">
                <a type="submit" class="Expresso-link-Order-Now" href="create.php?id=Expresso">Order Now</a>
            </div>
       </form>

       <div class="div-question-coffee-shop">
            <p class="question-coffee-shop">Why are we different?</p>
       </div>

       <div>
         <p class="inscription-wishes">We don’t just make your coffee, we make your day!</p>
         <img class="img-coffee-blast" src="img/coffee_blast (1).png" alt="">
       </div> 

       <div class="Group-background-color-coffee">
            <img class="Group-background" src="img/background-Supreme-Beans.png" alt="">
            <img class="group-coffee" src="img/Supreme-Beans.png" alt="">
            <img class="background-high-quality" src="img/background-High-Quality.png" alt="">
            <img class="group-high-quality" src="img/High-Quality.png" alt="">
            <img class="background-Extraordinary" src="img/background-High-Quality.png" alt="">
            <img class="group-extraordinary" src="img/Extraordinary.png" alt="">
            <img class="background-Affordable-Price" src="img/background-High-Quality.png" alt="">
            <img class="group-affordable-price" src="img/Affordable-Price.png" alt="">
       </div>

        <p class="motivation-quote-coffee">Great ideas start with great coffee, Lets help you achieve that
           <p class="continuation-quote-coffee">Get started today.</p>
        </p>

       <div class="button-Join-Us">
            <a class="link-Join-Us" href="#">Join Us</a>
       </div>

       <div class="Rectangle-coffee">
         <img class="coffee" src="img/Group-coff.png" alt="">
         <img class="img-coffee-bean" src="img/coffee_bean.png" alt="">
         <div class="js-content">
             <img class="img-cup" src="img/cup.png" alt="">
         </div>
       </div>
       <div>
            <p class="coffee-amazing-morning">Get a chance to have an Amazing morning</p>
            <p class="life-coffee">We are giving you are one time opportunity to
                experience a better life with coffee.
            </p>
            <div class="background-button-order-now">
                <a class="coffee-order-now" href="#">Order Now</a>
            </div>
            <p class="feedback-coffee">Our coffee perfection feedback</p>
            <p class="reviews-customer">Our customers has amazing things to say about us</p>
    
            <img class="frame-background" src="img/frame-background.png" alt="">
            <img class="coffee-img" src="img/coffee_blast (2).png" alt="">
            <img class="img-blast" src="img/coffee_blast (3).png" alt="">
            <p class="staples">“</p>
            <p class="historical-description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset.....
            </p>
       </div>
    
       <div>
            <p class="author">Jonny Thomas</p>
            <p class="Project-Manager">Project Manager</p>
            <img class="icon" src="img/Johnny-Thomas-Project-Manager.png" alt="">
    
            
            <button class="but-arrow-right">
                <img class="arrow-right" src="img/arrows-right.png" alt="">
            </button>
            <button class="but-arrow-left">
                <img class="arrow-left" src="img/arrows-left.png" alt="">
            </button>
    
            <img class="img-group-coff" src="img/Group-coff.png" alt="">
            <div class="background-fotter-image">
                <img class="fotter-image" src="img/fotter_image.png" alt="">
            </div>
            <div class="pngwing">
                <img class="img-pngwing-cup" src="img/pngwing 1.png" alt="">
            </div>
            
            <div class="img-pngwing">
                <img class="img-cup-pngwing" src="img/pngwing 2.png" alt="">
            </div>
            
            <p class="Subscribe">Subscribe to get the Latest News</p>
            <p class="tips-and-special-offers">Don’t miss out on our latest news, updates, tips and special offers</p>
            <div class="search">
                <input type="text" id="input-field" class="search-txt" placeholder="Enter your mail"><button onclick="handleClick()" class="button-Suscribe">Suscribe</button>
            </div>
       </div>
        
       <div>
          <p class="Bean-Scene">Bean Scene</p>
          <p class="Lorem-Ipsum">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since 
            the 1500s, when an unknown printer took a galley 
            of type and scrambled it to make a type specimen book.
          </p>
          <div class="img-link-cellular-networks">
             <a class="img-link-Facebok" href="#"><img src="img/Facebok.png" alt=""></a>
             <a class="img-link-Instagram" href="#"><img src="img/Instagram.png" alt=""></a>
             <a class="img-link-Youtube" href="#"><img src="img/Youtube.png" alt=""></a>
             <a class="img-link-Twitter" href="#"><img src="img/Twitter.png" alt=""></a>
          </div>
       </div>

        <div>
            <div class="Group">
                <p class="about">About</p>
                <p class="description-p">
                    Menu
                    Features
                   News & Blogs
                   Help & Supports
                </p>
            </div>
    
            <div class="Group">
                <p class="Company">Company</p>
                <p class="description-Company">
                    How we work
                    Terms of service
                    Pricing
                    FAQ
                </p>
            </div>
    
            <div class="Group">
                <p class="Contact-Us">Contact Us</p>
                <p class="description-Contact-Us">
                    Akshya Nagar 1st Block 1st Cross, 
                    Rammurthy nagar, 
                    Bangalore-560016
                    +1 202-918-2132
                    beanscene@mail.com
                    www.beanscene.com
                </p>
            </div>
        </div>
    </header>
    <script src="create.php"></script>
    <script src="registration.php"></script>
    <script src="index.js"></script>
</body>
</html>