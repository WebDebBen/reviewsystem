<?php
    print_r($trade );
    echo "<hr>";
    print_r($reviews );
?>
<h2 class="display-3"><?php echo $trade->name; ?></h2>
<div class="row">
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Company : </h6>
            <p class="ml-1"> <?php echo $trade->company_name; ?></p>       
        </div>
    </div>
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Phone Number : </h6>
            <p class="ml-1"> <?php echo $trade->phonenumber; ?></p>       
        </div>  
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Website : </h6>
            <p class="ml-1"> <?php echo $trade->website; ?></p>       
        </div>
    </div>
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Email : </h6>
            <p class="ml-1"> <?php echo $trade->email; ?></p>       
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Note : </h6>
            <p class="ml-1"> <?php echo $trade->note; ?></p>       
        </div>
    </div>
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Rating : </h6>
            <?php if($item->avg_rate != "" && $trade->avg_rate > 0 ){ ?>
            <div class="rating-div" value="<?php echo $trade->avg_rate; ?>"></div> 
            <?php }else{ ?>
                <div class="rating-div" value="0"></div> 
            <?php } ?>
        </div>
    </div>
</div>
