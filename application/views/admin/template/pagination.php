<?php
    $pagi_count = ceil($trade_count / $page_size ); 
?>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item prev-item">
            <a class="page-link" href="javascript:;" aria-label="Previous">
                <span aria-hidden="true"><span class="material-icons">keyboard_arrow_left</span></span>
            </a>
        </li>
        <?php for($i = 1; $i < ($pagi_count + 1); $i++ ){ ?>
        <li class="page-item number-item <?php echo $i == $page ? 'active' : ''?>">
            <a class="page-link" href="javascript:;"><?php echo $i; ?></a>
        </li>
        <?php } ?>
      <li class="page-item next-item">
        <a class="page-link" href="javascript:;" aria-label="Next">
          <span aria-hidden="true"><span class="material-icons">keyboard_arrow_right</span></span>
        </a>
      </li>
    </ul>
</nav>