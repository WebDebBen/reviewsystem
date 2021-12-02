<div class="col-md-3">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="h4 text-success font-weight-bold mb-2">Categories</h3>
            <div class="tab-content" id="myTabContent">
                <ul class="category_ul">
                <li class="category_item active" data-id=""><a href="javascript:;"><small class="text-uppercase font-weight-bold">All</small></a></li>
                <?php foreach($categories as $item ){ 
                echo '<li class="category_item" data-id="' . $item->id . '"><a href="javascript:;"><small class="text-uppercase font-weight-bold">' . $item->cat_name .'</small></a></li>';
                } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-9" id="reivew_list">

</div>