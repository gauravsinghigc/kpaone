 <div class="shadow-sm p-2 b-r-1">
     <h6 class="app-sub-heading">
         <i class="fa fa-star"></i> <?php echo $PageName; ?>
     </h6>
     <div class='app-setting-menus'>
         <a href='<?php echo APP_URL; ?>/products/'>
             <i class="fa fa-table"></i> All Products <i class="fa fa-angle-right"></i>
             <span class="pull-right bold">
                 <?php echo TOTAL("SELECT * FROM products"); ?>
                 <span class='text-secodary small'>Products</span>
             </span>
         </a>
         <a href='<?php echo APP_URL; ?>/products/categories/'>
             <i class="fa fa-list"></i> All Categories <i class="fa fa-angle-right"></i>
             <span class="pull-right bold">
                 <?php echo TOTAL("SELECT * FROM categories"); ?>
                 <span class='text-secodary small'>Records</span>
             </span>
         </a>
         <a href='<?php echo APP_URL; ?>/products/subcategories/'>
             <i class="fa fa-tasks"></i> All Sub Categories <i class="fa fa-angle-right"></i>
             <span class="pull-right bold">
                 <?php echo TOTAL("SELECT * FROM categories_sub"); ?>
                 <span class='text-secodary small'>Records</span>
             </span>
         </a>
         <a href='<?php echo APP_URL; ?>/products/brands/'>
             <i class="fa fa-star"></i> All Brands <i class="fa fa-angle-right"></i>
             <span class="pull-right bold">
                 <?php echo TOTAL("SELECT * FROM brands"); ?>
                 <span class='text-secodary small'>Records</span>
             </span>
         </a>
     </div>
 </div>