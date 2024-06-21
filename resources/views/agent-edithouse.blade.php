<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandeviera</title>

    <!--Favicon Logo Web-->
    <link rel="shortcut icon" href="./assets/icon/nm.png" type="image/x-icon"/>

    <!--CSS-->
    <link rel="stylesheet" href="./dist/CSS/agent-edithouse.css"/>
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

</head>

<body id="agentedithouse-page">

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

    <!--Agent Edit House-->
    <div class="section-agent-edit-house">
        <div class="container-page">
            <div>
                <h1>Edit Your House</h1>
            </div>
            <div class="container-upload-image">
                <input type="file" id="upload-file" accept="image/*">
            </div>
            <div class="conainer-text">
                <div class="title">
                    <p>Title:</p>
                    <input type="text" class="input-field" placeholder="Title" id="title">
                </div>
                <div class="ltlb">
                    <p>LT and LB:</p>
                    <input type="text" class="input-field" placeholder="Lt Lb" id="ltbl">
                </div>
                <div class="price">
                    <p>Price:</p>
                    <input type="text" class="input-field" placeholder="Rp " id="price">
                </div>
                <div class="details">
                    <p>Details:</p>
                    <input type="text" class="input-field" placeholder="Details" id="details">
                </div>
                <div class="location">
                    <p>Location:</p>
                    <input type="text" class="input-field" placeholder="Location" id="location">
                </div>
            </div>                    
            <div class="two-buttons">
                <button class="btn-cancel">Cancel</button> 
                <button class="btn-save">Save</button> 
            </div>
        </div>                
    </div>
    <!--Agent Edit House-->

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
    
</body>
</html>