<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
</head>
<body>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <h1>Grandeviera</h1>
                </div>
                <ul class="menu">
                    <h1>Grandeviera</h1>
                    <h3>Overview</h3>
                    <?php echo csrf_field(); ?>
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
                        <?php if(auth()->guard()->check()): ?>
                            <a href="ourhouse">Our House</a>
                        <?php else: ?>
                            <a href="javascript:void(0)" onclick="confirmLogin()">Our House</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <i class="fa-solid fa-thumbs-up"></i>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="ouragent">Our Agent</a>
                        <?php else: ?>
                            <a href="javascript:void(0)" onclick="confirmLogin()">Our Agent</a>
                        <?php endif; ?>
                    </li>
                </ul>
                <div class="login">
                    <?php if(Auth::check()): ?>
                        <?php if(session('user_status') === 'agent' || session('user_status') === 'buyer'): ?>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="button" class="login-btn" onclick="confirmLogout()">Logout</button>
                            </form>
                        <?php else: ?>
                            <button class="login-btn" onclick="window.location.href = 'login';">Login</button>
                        <?php endif; ?>
                    <?php else: ?>
                        <button class="login-btn" onclick="window.location.href = 'login';">Login</button>
                    <?php endif; ?>
                    
                    <!--Button Hamburger-->
                    <button class="hamburger hamburger--spin" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>          
        </div>
    </header>

    <script>
        function confirmLogin() {
            if (confirm("You have to login to select the details. Do you want to login?")) {
                window.location.href = 'login';
            }
        }

        function confirmLogout() {
            if (confirm('Are you sure you want to logout?')) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>
</body>
</html><?php /**PATH D:\grandeviera trial\resources\views/navbar.blade.php ENDPATH**/ ?>