<!-- start navbar  -->
<div class="col-md-12  ">
    <div class="nav">
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
                        <i class="fas fa-home tm-nav-fa-icon"></i>
                        <span>Home</span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
                        <i class="fas fa-users tm-nav-fa-icon"></i>
                        <span>About Us</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item dropdown">
                    <a href="/products" class="<?= urlIs('/products') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-map tm-nav-fa-icon"></i>
                        Products
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <hr>
                <li>
                    <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> data-bg-img=" constructive_bg_04.jpg" data-page="#tm-section-4">
                        <i class="fas fa-comments tm-nav-fa-icon"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- end navbar  -->