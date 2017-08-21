<?php
require('public/css/main.css');
require('public/css/navbar.js');

<nav>
    <ul class="desktop-menu" id="desktopMenu">

        <li>
            <a id="home" href="/">
                <img src="broccolilogo.png" class="yonsei-logo">VEGGIE LIST
            </a>
        </li>

        <li class="desktop-link">
            <a href="#">HOME</a>


        <li class="desktop-link">
            <a href="/items">VEGGIES FOR SALE
            </a>
        </li>

         <?php if (Auth::check()) : ?>

        <li>
            <a href="/users/account?id=<?= Auth::id(); ?>">Account
            </a>
        </li>
        
        <li>
            <a href="/logout">Logout
            </a>
        </li>
        
        <li>
            <a href="/items/create">Create Post
            </a>
        </li>
        
        <?php else : ?>
                    
        <li>
            <a href="/login">Login
            </a>
        </li>
                    
        <li>
            <a href="/signup">Signup
            </a>
        </li>
        
        <?php endif; ?>
        
        
        <?php if (Auth::check()) : ?>
                
            <ul class="desktopMenu hidden-xs">
                 <span class="navbar-text">Welcome <?= Auth::user()->name; ?></span>
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
