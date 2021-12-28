<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-headset"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo APPNAME ?> <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php
    for ($i = 0; $i < count(MENU); $i++) {
        if (count(MENU[$i]['submenu']) < 1) {
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href=" . URI . MENU[$i]["link"] . ">";
            echo "<i class='" . MENU[$i]['icono'] . "'></i>";
            echo "<span>" . MENU[$i]['titulo'] . "</span>";
            echo "</a>";
            echo "</li>";
        } elseif (count(MENU[$i]['submenu']) > 0) {

            $subm = MENU[$i]['submenu'];

            echo "<li class='nav-item'>";
            echo "<a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#" . MENU[$i]['titulo'] . "' aria-expanded='True' aria-controls='" . MENU[$i]['titulo'] . "'>";
            echo "<i class='" . MENU[$i]['icono'] . "'></i>";
            echo "<span>" . MENU[$i]['titulo'] . "</span>";
            echo "</a>";
            echo "<div id='" . MENU[$i]['titulo'] . "' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>";
            echo "<div class='bg-white py-2 collapse-inner'>";
            for ($j = 0; $j < count($subm); $j++) {
                echo "<a class='collapse-item' href='" . $subm[$j]['link'] . "'>" . $subm[$j]['titulo'] . "</a>";
            }
            echo "</div>";
            echo "</div>";
            echo "</li>";
        }
    }
    ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>