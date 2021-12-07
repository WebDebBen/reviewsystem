<div class="row">
    <div class="col-md-12 center">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-danger">
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Rate
                            </th>
                            <th>
                                Status
                            </th>
                        </thead>
                        <tbody id="review-table">
                            <?php foreach($reviews as $item ){ ?>
                            <tr>
                                <td><?php echo $item->username; ?></td>
                                <td><?php echo $item->email; ?></td>
                                <td>        
                                    <?php if($item->rate != "" && $item->rate > 0 ){ ?>
                                    <div class="rating-div" value="<?php echo $item->rate; ?>"></div> 
                                    <?php }else{ ?>
                                        <div class="rating-div" value="0"></div> 
                                    <?php } ?>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="<?php echo $item->id; ?>" class="switch_status" 
                                                    <?php echo $item->status == 1 ? '' : 'checked';""?> >
                                        <span class="slider round"></span>
                                    </label>
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