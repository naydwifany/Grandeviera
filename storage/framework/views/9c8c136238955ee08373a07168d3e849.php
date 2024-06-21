<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandeviera</title>

    <!--Favicon Logo Web-->
    <link rel="shortcut icon" href="./assets/icon/nm.png" type="image/x-icon"/>

    <!--CSS-->
    <link rel="stylesheet" href="./dist/CSS/c-ouragent.css"/>
    <link rel="stylesheet" href="./dist/partials/navbarandfooter.css"/>

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

    <!--AOS Motion-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="ouragent-page">
    
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

    <!--Our Agent-->
    <div class="section-our-agent">
        <div class="container-page">
            <div class="container-title">
                <h1 data-aos="fade-up" data-aos-duration="1000">Our Agent</h1>
                <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>            
            <div class="container-agents" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <div class="agent-article">
                    <img src="./assets/images/imgrandom-1.jpg" alt="house-img">
                    <h3>Vittorio</h3>
                    <p>Team Leader</p>
                    <div class="three-buttons">
                        <button class="btn-emailagent"><i class="fa-solid fa-envelope"></i> Email</button>
                        <a href="https://wa.me/082112026200" class="btn-waagent"><i class="fa-brands fa-whatsapp"></i> WA</a>
                        <a href="https://www.instagram.com/vittoriozs/" class="btn-igagent"><i class="fa-brands fa-instagram"></i> IG</a>
                    </div>                    
                </div>  
                <div class="agent-article">
                    <img src="./assets/images/imgrandom-2.jpg" alt="house-img">
                    <h3>Raina</h3>
                    <p>Executive Secretary</p>
                    <div class="three-buttons">
                        <button class="btn-emailagent"><i class="fa-solid fa-envelope"></i> Email</button>
                        <a href="https://wa.me/085215819629" class="btn-waagent"><i class="fa-brands fa-whatsapp"></i> WA</a>
                        <a href="https://www.instagram.com/rainamahiraa/" class="btn-igagent"><i class="fa-brands fa-instagram"></i> IG</a>
                    </div>                    
                </div> 
                <div class="agent-article">
                    <img src="./assets/images/imgrandom-3.jpg" alt="house-img">
                    <h3>Nayla</h3>
                    <p>Project Manager</p>
                    <div class="three-buttons">
                        <button class="btn-emailagent"><i class="fa-solid fa-envelope"></i> Email</button>
                        <a href="https://wa.me/0851316726898" class="btn-waagent"><i class="fa-brands fa-whatsapp"></i> WA</a>
                        <a href="https://www.instagram.com/naydwifany/" class="btn-igagent"><i class="fa-brands fa-instagram"></i> IG</a>
                    </div>                                      
                </div>                                                                
            </div>
        </div>                
    </div>
    <!--Our Agent-->

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
</html><?php /**PATH D:\web_project\grandeviera\resources\views/c-ouragent.blade.php ENDPATH**/ ?>