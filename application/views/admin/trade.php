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
                <button type="button" class="ml-2 btn btn-info btn-sm" id="new_trade"><i class='fa fa-plus mr-3'></i> New</button>
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

<div class="modal fade" id="trade_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="trade_form">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Trade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_category">Category: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <select class="selectpicker form-control custom-select" name="input_category" id="input_category" data-size="7" data-style="btn btn-primary" title="Select Category...">
                            <?php foreach($categories as $item ){ ?>
                            <option value="<?php echo $item->id ?>"><?php echo $item->cat_name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_trade">Trade Name: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <input class="form-control" name="input_trade" id="input_trade">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_company">Company Name: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <input class="form-control" name="input_company" id="input_company">
                    </div>
                </div>                
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_phone">Phone Number: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <input class="form-control" name="input_phone" id="input_phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_website">Website: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <input class="form-control" name="input_website" id="input_website">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_email">Email: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <input class="form-control" name="input_email" id="input_email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input_website">Note: </label>
                    </div>
                    <div class="form-group col-md-9">
                        <input class="form-control" name="input_note" id="input_note">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ml-3" id="save_trade">Save Category</button>
            </div>
            <input type="hidden" id="trade_id" value="-1">
        </div>
        </form>
    </div>
</div>