<div class="row">
    <div class="col-md-12 center">
        <div class="card">
        <div class="card-body">
            <div class="full-width table-trade-header"> 
                <select class="selectpicker form-control custom-select" id="category_select" data-size="7" data-style="btn btn-primary" title="Select Category...">
                    <option value="">All</option>    
                    <?php foreach($categories as $item ){ ?>
                    <option value="<?php echo $item->id ?>"><?php echo $item->cat_name ?></option>
                    <?php } ?>
                </select>
            </div>  
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-danger">
                        <th>
                            Category Name
                        </th>
                        <th>
                            Trade Name
                        </th>
                        <th>
                            Company Name
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                            Website
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Note
                        </th>
                        <th>
                            Reviews
                        </th>
                        <th class="text-right">
                            Actions
                        </th>
                    </thead>
                    <tbody id="trade-table">
                    </tbody>
                </table>
            </div>
            <div id="pagination_wrap">
            </div>
        </div>
        </div>
    </div>
</div>