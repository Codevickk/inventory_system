        <!--- PAGINATION -->
        <nav class="computers-paging">
           <ul class="pagination justify-content-center">
             <?php
        
             if($page > 1) {
               echo "<li class='page-item'><a href='index.php' title='Go to the first page' class='page-link'>First</a></li>";
             }

             // Calculate number of pages
             $total_pages = ceil($total_rows / $records_per_page);

             // Calculate range of links to show
             $range = 2;

             // display links to 'ranger of pages' around 'current page'
             $initial_num = $page - $range;
             $condition_limit_num = ($page + $range) + 1;

             for ($x = $initial_num; $x < $condition_limit_num; $x++ ) {
               // Make sure $x is greater than than 0 and <= $total_pages
               if(($x > 0) && ($x <= $total_pages)) {
  
                 if($x == $page) {
                   // current page
                   echo "<li class='page-item active'><a href='#' class='page-link'><span class='sr-only'>(current)</span>{$x}</a></li>";
                 }
                 else {
                   // not current page
                   echo "<li class='page-item'><a href='index.php?page=$x' class='page-link'>{$x}</a></li>";
                 }

               }
             }

             // button for last page
             if($page < $total_pages) {
               echo "<li class='page-item'><a href='index.php?page={$total_pages}' class='page-link'>Last</a></li>";
             }

             //
             ?>
          </ul>
        </nav>
        <!--./PAGINATION  -->