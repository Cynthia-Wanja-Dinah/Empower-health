var images=[

    "url('images/education.jpg')",
    "url('images/sexual.jpg')",
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