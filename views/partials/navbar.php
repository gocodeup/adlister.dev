


<nav>
    <ul class="desktop-menu" id="desktopMenu">

        <li>
            <a id="home" href="/">
                <img src="broccolilogo.png" class="yonsei-logo">VEGGIE CONNECT
            </a>
        </li>

        <li class="desktop-link">
            <a href="/home">HOME
            </a>
        </li>

        <li class="desktop-link">
            <a href="/item">VEGGIES FOR SALE
            </a>
        </li>

         <?php if (Auth::check()) : ?>

        <li class="desktop-link">
            <a href="/users/account?id=<?= Auth::id(); ?>">ACCOUNT
            </a>
        </li>
        
        <li class="desktop-link">
            <a href="/logout">LOGOUT
            </a>
        </li>
        
        <li class="desktop-link">
            <a href="/ads/create">CREATE LISTING
            </a>
        </li>
        
        <?php else : ?>
                    
        <li class="desktop-link">
            <a href="/login">LOGIN
            </a>
        </li>
                    
        <li class="desktop-link">
            <a href="/signup">SIGN-UP
            </a>
        </li>
        
        <?php endif; ?>
        
        
        <?php if (Auth::check()) : ?>
                
            <ul class="desktopMenu hidden-xs desktop-link">
                 <span class="navbar-text">WELCOME <?= Auth::user()->name; ?></span>
            </ul>
        
        <?php endif; ?>

        

            <li id="mobile-menu">
                <a id="home2" href="index.html">
                    <img src="broccolilogo.png" class="yonsei-logo">
                </a>

          
            </a>

            <a id="mobile-icon-container" href="#" onclick="responsiveMenu(); return false;">
                <img id="mobile-icon" src="https://eliya33.github.io/church/images/mobile-menu-icon-125x125.png" alt="Mobile Menu Icon">
            </a>
    
        </li>

    </ul>
</nav>
