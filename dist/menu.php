<!-- Main Menu -->
<nav id="Menu" class="Menu-container">
    <div class="Shape-menu_bg">
        <img src="img/Waves-Small-Right.svg" alt="Waves-Small-Left" class="Shape-menu Shape-menu_1">
        <img src="img/Waves-Small-Right.svg" alt="Waves-Small-Right" class="Shape-menu Shape-menu_2">
    </div>
    <a href="">
            <img src="img/Logo.svg" alt="Logo juan carmona" class="Menu-logo">
        </a>
        <h2 class="Title Subtitle">Juan Carmona</h2>
    <ul class="Menu-list">
        <li class="Menu-item <?php echo ($page == "home" ? "Menu-item_active" : "")?>">
            <a href="index.php" class=" <?php echo ($page == "home" ? "Page_active" : "")?>">Home</a>
        </li>
        <li class="Menu-item <?php echo ($page == "projects" ? "Menu-item_active" : "")?>">
            <a href="projects.php" class=" <?php echo ($page == "projects" ? "Page_active" : "")?>">Projects</a>
        </li>
        <li class="Menu-item <?php echo ($page == "services" ? "Menu-item_active" : "")?>">
            <a href="services.php" class=" <?php echo ($page == "services" ? "Page_active" : "")?>">Services</a>
        </li>
        <li class="Menu-item <?php echo ($page == "contact" ? "Menu-item_active" : "")?>">
            <a href="contact.php" class=" <?php echo ($page == "contact" ? "Page_active" : "")?>">Contact</a>
        </li>                        
    </ul>
    <a href="mailto:hello@juancarmona.co" class="Email-menu">Hello@juancarmona.co</a>
</nav>
<!-- Main Menu -->
  <div id="Hamb-btn" class="Hamburger-container_btn">
    <span class="Hamb-line Hamb-line1"></span>
    <span class="Hamb-line Hamb-line2"></span>
    <span class="Hamb-line Hamb-line3"></span>
  </div>  