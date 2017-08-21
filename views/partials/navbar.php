<?php
 require('main.css');
<nav>
    <ul class="desktop-menu" id="desktopMenu">

        <li>
            <a id="home" href="/">
                <img src="broccolilogo.png" class="yonsei-logo">VEGGIE LIST
            </a>
        </li>

    <li class="desktop-link">
        <a href="#">HOME
        </a>


    <li class="desktop-link">
        <a href="/items">VEGGIES FOR SALE
        </a>
    </li>

    <?php if (Auth::check()) : ?>

    <li class="desktop-link">
        <a href="/users/account?id=<?= Auth::id(); ?>">ACCOUNT
        </a>
    </li>

    <li class="desktop-link">
        <a href="/login">LOGIN
        </a>
    </li>

    <li class="desktop-link">
        <a href="/signup">SIGNUP
        </a>
    </li>

    <?php endif; ?>

    <ul class="nav navbar-nav navbar-right hidden-xs">
        <span class="navbar-text">WELCOME <?= Auth::user()->NAME; ?>
            
        </span>
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
