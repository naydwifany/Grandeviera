<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandeviera</title>

    <!--Favicon Logo Web-->
    <link rel="shortcut icon" href="./assets/icon/nm.png" type="image/x-icon"/>

    <!--CSS-->
    <link rel="stylesheet" href="./dist/CSS/g-signup.css"/>

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

<body id="signup-page">
    <!--Header-->
    <header>
        <div class="container">
            <!--Navbar-->
            <div class="navbar">
                <div class="logo">
                    <h1>Grandeviera</h1>
                </div>
                <ul class="menu">
                    <h1>Grandeviera</h1>
                    <h3>Overview</h3>
                    <li>
                        <i class="fa-solid fa-house"></i>
                        <a href="homepage">Home</a>
                    </li>                    
                    <li>
                        <i class="fa-solid fa-address-card"></i>
                        <a href="homepage#about">About Us</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-gear"></i>
                        <a href="homepage#services">Services</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-house-circle-check"></i>
                        <a href="ourhouse">Our House</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-thumbs-up"></i>
                        <a href="ouragent">Our Agent</a>
                    </li>
                </ul>
                <div class="login">
                    <button class="login-btn" onclick="window.location.href = 'login';">Login</button>
                   
                    <!--Button Hamburger-->
                    <button class="hamburger hamburger--spin" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                      </button>
                </div>
            </div>

            <!--Form Box-->
            <div class="container-formbox">
                <h1>
                    Sign Up
                </h1>
                <div class="input-box">
                    <form action="<?php echo e(route('signup.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-box">
                            <div>
                                <input type="email" class="input-field" placeholder="Email ID" name="email" required>
                                <i class="bx bx-user"></i>
                            </div>
                            <div>
                                <input type="text" class="input-field" placeholder="Username" name="username" required>
                                <i class="bx bx-user"></i>
                            </div>
                            <div>
                                <input type="password" class="input-field" placeholder="Create Password" name="password" id="password" required>
                                <i class="bx bx-lock-alt"></i>
                            </div>
                            <div>
                                <input type="password" class="input-field" placeholder="Confirm Password" name="password_confirmation" id="confirm-password" required>
                                <i class="bx bx-lock-alt"></i>
                            </div>    
                            <button type="submit">Create Account</button>                                                    
                        </div>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </form>                                                     
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <!--Header-->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="box">
                    <h2>Grandeviera</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <div class="footer-icon">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-square-reddit"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
                </div>
                <div class="box">
                    <h3>Menu</h3>
                    <a href="homepage">Home</a>
                    <a href="homepage#about">About Us</a> 
                    <a href="homepage#services">Services</a>
                    <a href="ourhouse">Our House</a>
                    <a href="ouragent">Our Agent</a>
                </div>
                <div class="box">
                    <h3>Company</h3>
                    <a href="#">Blog</a>
                    <a href="#">Our Apps</a>
                    <a href="#">Brochure</a>
                </div>
                <div class="box">
                    <h3>Contact Us</h3>
                    <p><i class="fa-solid fa-envelope"></i> grandeviera@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> (021) - 1234 - 5678</p>
                    <p><i class="fa-solid fa-location-dot"></i> Golf Hill Arcadia, Riverside, Jakarta</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Copyright -->
    <div class="copyright">
        <p>&copy; 2024 <span>Grandeviera.</span> All Rights Reserved.</p>
    </div>
    <!-- Copyright -->

  
    <!--JS Home Page-->
    <script src="./dist/JavaScript/javascript.js"></script>
    
</body>
</html><?php /**PATH D:\web_project\grandeviera\resources\views/g-signup.blade.php ENDPATH**/ ?>