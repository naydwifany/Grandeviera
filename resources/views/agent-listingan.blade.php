<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandeviera</title>

    <!--Favicon Logo Web-->
    <link rel="shortcut icon" href="./assets/icon/nm.png" type="image/x-icon"/>

    <!--CSS-->
    <link rel="stylesheet" href="./dist/CSS/agent-listingan.css"/>
    <link rel="stylesheet" href="./dist/partials/navbarandfooter.css">

    <!--Jonsuh Hamburger-->
    <link rel="stylesheet" href="./dist/CSS/hamburgers.css"/>

    <!--Font Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!--Font Awsome CDN-->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />

    <!--Link Swiper's CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--AOS Motion-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="agentlistingan-page">
        
    <!-- Header -->
    <div id="navbar-container"></div>
    <script>
        fetch('./dist/partials/navbar.html')
            .then(response => response.text())
            .then(data => {
                console.log (data); /*untuk mengecheck apa saja yang dipanggil*/
                document.getElementById('navbar-container').innerHTML = data;
            })
            .catch(error => console.error('Error loading navbar:', error));
    </script>
    <!-- Header -->

    <!--Agent Listingan-->
    <div class="section-agent-listingan">
        <div class="container-page">
            <div class="container-title">
                <h1 data-aos="fade-up" data-aos-duration="1000">Your List</h1>
                <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>            
            <div class="container-listingan" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <div class="container-items">
                    <div class="image">
                        <img src="./assets/images/imgrandom-1.jpg" alt="house-img">
                    </div>
                    <div class="three-text">
                        <h3>Kemang</h3>
                        <p>LT: 1000m&sup2 LT: 500m&sup2</p>
                        <h4>Rp 1.000.000.000</h4>
                    </div>
                    <div class="two-buttons">
                        <a href="c-ourhousedetails.html" class="btn-viewdetails">View Details</a>
                        <button class="btn-favorite"><i class="fa-regular fa-heart"></i> Favorite</button>  
                    </div>                     
                </div> 
                <div class="container-items">
                    <div class="image">
                        <img src="./assets/images/imgrandom-1.jpg" alt="house-img">
                    </div>
                    <div class="three-text">
                        <h3>Kemang</h3>
                        <p>LT: 1000m&sup2 LT: 500m&sup2</p>
                        <h4>Rp 1.000.000.000</h4>
                    </div>
                    <div class="two-buttons">
                        <a href="c-ourhousedetails.html" class="btn-viewdetails">View Details</a>
                        <button class="btn-favorite"><i class="fa-regular fa-heart"></i> Favorite</button>  
                    </div>                     
                </div> 
                <div class="container-items">
                    <div class="image">
                        <img src="./assets/images/imgrandom-1.jpg" alt="house-img">
                    </div>
                    <div class="three-text">
                        <h3>Kemang</h3>
                        <p>LT: 1000m&sup2 LT: 500m&sup2</p>
                        <h4>Rp 1.000.000.000</h4>
                    </div>
                    <div class="two-buttons">
                        <a href="c-ourhousedetails.html" class="btn-viewdetails">View Details</a>
                        <button class="btn-favorite"><i class="fa-regular fa-heart"></i> Favorite</button>  
                    </div>                     
                </div>                                                                             
            </div>
        </div>                
    </div>
    <!--Agent Listingan-->

    <!-- Footer -->
    <div id="footer-container"></div>
    <script>
        fetch('./dist/partials/footer.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-container').innerHTML = data;
            })
            .catch(error => console.error('Error loading footer:', error));
    </script>
    <!-- Footer -->

  
    <!--JS Home Page-->
    <script src="./dist/JavaScript/javascript.js"></script>
    
    <!--AOS Motion-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>