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
            <?php if($trade->avg_rate != "" && $trade->avg_rate > 0 ){ ?>
            <div class="rating-div" value="<?php echo $trade->avg_rate; ?>"></div> 
            <?php }else{ ?>
                <div class="rating-div" value="0"></div> 
            <?php } ?>
        </div>
    </div>
</div>
<h4 class="text-primary font-weight-light mt-2">Reviews</h4>
<?php foreach($reviews as $item ){ ?>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">name : </h6>
            <p class="ml-1"> <?php echo $item->username; ?></p>       
        </div>
    </div>
    <div class="col-md-6">
        <div class="item-block">
            <h6 class="title">Rating : </h6>
            <?php if($item->rate != "" && $item->rate > 0 ){ ?>
            <div class="rating-div" value="<?php echo $item->rate; ?>"></div> 
            <?php }else{ ?>
                <div class="rating-div" value="0"></div> 
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>
<?php $userdata = $this->session->userdata("user");
    $is_login = $userdata && isset($userdata->name) ? true : false;
if ($is_login ){ ?>
<hr>
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <small class="d-block text-uppercase font-weight-bold mb-3">User Name</small>
                        <div class="form-group">
                            <div class="input-group">
                            <input class="form-control" type="text" placeholder="User Name" id="user_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Email</small>
                        <div class="form-group">
                            <div class="input-group">
                            <input class="form-control" type="text" placeholder="Email" id="user_email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Rating</small>
                        <div id="trade_rating">
                        </div>
                    </div>
                    <div class="col-md-2 submit-wrap">
                        <button class="btn btn-primary" data-tradeid="<?php $trade->id;?>" type="button" id="submit_rate">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>