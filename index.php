<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexual reproduction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <nav style="margin-bottom: 20px;">
        <div class="logo">
            <img src="images/zadit.png" alt="Logo">
        </div>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#menu">Menu</a>
        <a href="login.php"><button class="order-button" >Login</button>
            </button></a>
        <a href="register.php"><button class="order-btn" >Register</button>
            </button></a>
        
    </nav>

    <section id="home">
        <div class="container">
        <h2 style="color:aliceblue; margin-left:20px; ">Welcome to Empower Health</h2>
        <p>Your health matters</p>
    </div>
        <div class="learn-more">
          <p style="font-size: 18px; margin-bottom:5px; margin-right:100px; font-weight:50px">Be empowerd about health education </p>
            <a href="more.php"><button style="margin-left: 10px;  margin-bottom:30px;">Learn More</button></a>
        </div>
   
          
    </section>





    <section id="about">
        <h1>About Us</h1>
         <div class="image-text-wrapper">
         <img src="images/zadit.png" alt="Coffee Shop Image">
           
                 <p>At EmpowerHealth, we understand that sexual and reproductive health is 
                  not merely a matter of physical well-being but also encompasses emotional and social dimensions. 
                  That's why our educational content is designed to address a wide range of topics, including anatomy, 
                  intimacy, consent, and relationships. We believe that by fostering open and honest conversations around these subjects, we can help break down stigma and promote
                   healthier attitudes towards sexuality and reproductive health.
                    </p>

                    
         </div>
            
    </section>


<section id="menu">
  <h1>Our Products</h1>
    <div class="image-grid">
        <div class="image-info">
          <img src="images/cocolate.jpg" alt="Coffee 1">
          <p class="price">350sh</p>
          <p class="product-name">Bady chocolate cream</p>
          <a href="order.php"><button class="order-button" onclick="fillProductInfo('Bady chocolate cream', '350sh')">Order Now</button>
          </button></a>
        </div>
    
        <div class="image-info">
          <img src="images/edrive.jpg" alt="Coffee 2">
          <p class="price">400sh</p>
          <p class="product-name">Edrive pills</p>
          <a href="order.php"><button class="order-button" onclick="fillProductInfo('Edrive pills', '400sh')">Order Now</button>
          </button></a>
        </div>
    
        <div class="image-info">
          <img src="images/natural.jpg" alt="Coffee 3">
          <p class="price">350sh</p>
          <p class="product-name">Natural supliment</p>
          <a href="order.php"><button class="order-button" onclick="fillProductInfo('Natural suppliment', '350sh')">Order Now</button>
            </button></a>
        </div>
    
        <div class="image-info">
          <img src="images/man.jpg" alt="Coffee 4">
          <p class="price">500sh</p>
          <p class="product-name">Man pills</p>
          <a href="order.php"><button class="order-button" onclick="fillProductInfo('Man pills', '500sh')">Order Now</button>
            </button></a>
        </div>
    
        <div class="image-info">
          <img src="images/pad.jpg" alt="Coffee 5">
          <p class="price">70sh</p>
          <p class="product-name">Pads</p>
          <a href="order.php"><button class="order-button" onclick="fillProductInfo('Pads', '70sh')">Order Now</button>
            </a>
        </div>
    
        <div class="image-info">
          <img src="images/pills.jpg" alt="Coffee 6">
          <p class="price">300sh</p>
          <p class="product-name">Family Planning pills</p>
          <a href="order.php"><button class="order-button"onclick="fillProductInfo('familly planning', '500sh')">Order Now</button>
           </a>
        </div>
      </div>


    </section>







<section id="contact">
    <div class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-form">
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="name" style="color: black;">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email" style="color: black;">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message" style="color: black;">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</section>


<section id="footer">
    <div class="footer">
        <div class="footer-column">
          <h3>About Us</h3>
          <a href="#"> <i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a>
          <a href="#">Twitter</a>
          <a href="#">Instagram</a>
          <a href="#">LinkedIn</a>
        </div>
    
        <div class="footer-column">
          <h3>Quick Links</h3>
          <a href="#">Home</a>
          <a href="#">Products</a>
          <a href="#">Services</a>
          <a href="#">FAQ</a>
        </div>
    
        <div class="footer-column">
          <h3>Contact Us</h3>
          <div class="footer-icons">
            <div class="icon">&#x1F4CD;</div> 
            <a href="#">Nakuru, City</a>
          </div>
          <div class="footer-icons">
            <div class="icon">&#x260E;</div> 
            <a href="#">+254707395450</a>
          </div>
          <div class="footer-icons">
            <div class="icon">&#9993;</div> 
            <a href="mailto:info@example.com">empowerhealth@gmail.com</a>
          </div>
        </div>
      </div>

</section>















<script>
  var images=[

"url('images/education.jpg')",
"url('images/masai.jpg')",

]
function changeBackground() {
    var bg = images[Math.floor(Math.random() * images.length)];
    document.getElementById('home').style.backgroundImage = bg;
}

// Change background every  5 secondsc:\Users\hp\Downloads\coffe1.jpg c:\Users\hp\Downloads\coffee4.jpg c:\Users\hp\Downloads\coffee3.jpg c:\Users\hp\Downloads\logo.jpg
setInterval(changeBackground, 2000);

// Initial background change
changeBackground();





document.getElementById("contactForm").addEventListener("submit", function() {
// Clear the input fields after form submission
document.getElementById("name").value = "";
document.getElementById("email").value = "";
document.getElementById("message").value = "";
});
</script>

 

        
    
    </body>
    </html>