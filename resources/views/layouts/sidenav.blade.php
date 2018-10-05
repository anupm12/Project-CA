<ul class="list-group list-group-custom mr-3">
    <li class="list-group-item {{ Request::is('admin/home') ? 'active' : '' }}""><a href="#"><i class="fas fa-tachometer-alt"></i>Dasboard</a></li>
    <li class="list-group-item {{ Request::is('admin/hero') ? 'active' : '' }}""><a href="#" data-toggle="collapse" data-target="#hero-section"><i class="fas fa-file"></i>Hero
            Section<i class="fas fa-angle-down"></i></a></li>
    <div id="hero-section" class="collapse">
        <li class="list-group-item list-group-item-collaspse"><i class="fas fa-font"></i><a href="#">Text</a></li>
        <li class="list-group-item list-group-item-collaspse"><i class="fas fa-image"></i><a href="#">Carousel</a></li>
    </div>
    <li class="list-group-item {{ Request::is('admin/about') ? 'active' : '' }}"><a href="#"><i class="fas fa-user-circle"></i>About</a></li>
            <li class="list-group-item {{ Request::is('admin/news') ? 'active' : '' }}"><a href="#"><i class="fas fa-newspaper"></i>News</a></li>
    <li class="list-group-item {{ Request::is('admin/services') ? 'active' : '' }}"><a href="#"><i class="fas fa-cogs"></i>Services</a></li>
    <li class="list-group-item {{ Request::is('admin/social') ? 'active' : '' }}"><a href="#"><i class="fab fa-twitter"></i>Social Media Links</a></li>
    <li class="list-group-item"><a href="#"><i class="fas fa-address-card"></i>Contact</a></li>
</ul>
