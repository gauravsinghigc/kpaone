<section class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="main-navigation-bar">
                <?php
                $ActiveMainLink = ReturnSessionalValues("active_link", "ACTIVE_MAIN_LINK", "Home");
                foreach (NAVIGATION_MENUS as $key => $value) {
                    if ($key == $ActiveMainLink) {
                        $ActiveMainLinkClass = "active";
                    } else {
                        $ActiveMainLinkClass = "";
                    }
                ?>
                    <li id='<?php echo $key; ?>' class='RecordsList' class="<?php echo $ActiveMainLinkClass; ?>">
                        <a href="<?php echo $value['url']; ?>?active_link=<?php echo $key; ?>">
                            <i class='fa fa-<?php echo $value['icon']; ?>'></i>
                            <span class='title'>
                                <?php echo $value['title']; ?>
                                <?php
                                if ($value['counts'] != 0) {
                                    echo "<span class='counts'>" . $value['counts'] . "</span>";
                                }
                                ?>
                            </span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>