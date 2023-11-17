<nav>
    <ul>
        <li><a class = "<?php if ($_SERVER['REQUEST_URI'] === '/') { echo 'active'; } ?>" href="/">Home</a></li>
        <li><a class = "<?php if ($_SERVER['REQUEST_URI'] === '/about') { echo 'active'; } ?>" href="about">About</a></li>
        <li><a class = "<?php if ($_SERVER['REQUEST_URI'] === '/contact') { echo 'active'; } ?>" href="contact">Contact</a></li>
    </ul>
</nav>