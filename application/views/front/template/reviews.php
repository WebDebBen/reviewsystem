<?php foreach($reviews as $item ){?>
<div class="card mt-2 shadow">
    <div class="card-body">
        <a href="/review/<?php echo $item->id; ?>">
            <h5 class="info-title text-primary"><?php echo $item->name; ?></h5>
        </a>
        <div class="row">
            <div class="col-md-6">
                <div class="item-block">
                    <h6 class="title">Company : </h6>
                    <p class="ml-1"> <?php echo $item->company_name; ?></p>       
                </div>
            </div>
            <div class="col-md-6">
                <div class="item-block">
                    <h6 class="title">Phone Number : </h6>
                    <p class="ml-1"> <?php echo $item->phonenumber; ?></p>       
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="item-block">
                    <h6 class="title">Website : </h6>
                    <p class="ml-1"> <?php echo $item->website; ?></p>       
                </div>
            </div>
            <div class="col-md-6">
                <div class="item-block">
                    <h6 class="title">Email : </h6>
                    <p class="ml-1"> <?php echo $item->email; ?></p>       
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="item-block">
                    <h6 class="title">Note : </h6>
                    <p class="ml-1"> <?php echo $item->note; ?></p>       
                </div>
            </div>
            <div class="col-md-6">
                <div class="item-block">
                    <h6 class="title">Rating : </h6>
                    <?php if($item->avg_rate != "" && $item->avg_rate > 0 ){ ?>
                    <div class="rating-div" value="<?php echo $item->avg_rate; ?>"></div> 
                    <?php }else{ ?>
                        <div class="rating-div" value="0"></div> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>