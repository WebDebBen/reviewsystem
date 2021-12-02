<div class="row">
    <div class="col-md-8 center">
        <div class="card">
        <div class="card-body">
            <div class="full-width text-right">
                <button type="button" class="btn btn-info btn-sm" id="new_category"><i class='fa fa-plus mr-3'></i> New</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-danger">
                        <th>
                            No
                        </th>
                        <th>
                            Category Name
                        </th>
                        <th class="text-center">
                            Actions
                        </th>
                    </thead>
                    <tbody id="category-table">
                        <?php foreach($categories as $key=> $item ){ ?>
                        <tr>
                            <td><?php echo ((int)$key + 1); ?></td>
                            <td><?php echo $item->cat_name;?></td>
                            <td class="text-center">
                                <button type="button" data-id="<?php echo $item->id?>" data-name="<?php echo $item->cat_name;?>" rel="tooltip" 
                                        class="btn btn-success btn-round btn-sm edit-btn">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" data-id="<?php echo $item->id?>" class="btn btn-danger btn-round btn-sm delete-btn">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="material-icons">category</i>
                </div>
                </div>
                <input type="text" class="form-control" id="category_name" placeholder="Category Name...">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary ml-3" id="save_category">Save Category</button>
        </div>
        <input type="hidden" id="category_id" value="-1">
        </form>
    </div>
  </div>
</div>