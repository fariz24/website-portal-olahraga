<?php if (!empty($this->session->flashdata('success'))) { ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php } ?>

<?php if (!empty($this->session->flashdata('failed'))) { ?>
<div class="alert alert-danger" role="alert">
<?php echo $this->session->flashdata('failed'); ?>
    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>
<div id="mainContent">
<div class="container-fluid">
    <a href="<?php echo site_url('admin/league'); ?>" class="btn btn-info mB-20">Kembali</a>
    <div class="row">
    <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="row">
            <div class="col-sm-6">
            <h4 class="c-grey-900 mB-20">League</h4>
            </div>
            <div class="col-sm-6">
            <a href="<?php echo site_url('admin/league/action/'.$this->uri->segment(3))?>" class="btn cur-p btn-success btn-color float-end">Add League</a>
            </div>
        </div>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>League</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>League</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            <?php 
                if (!empty($data_league)) {
                    foreach($data_league as $league) {
                        echo "<tr>
                            <td>$league->name_league</td>
                            <td>
                                <a href='".site_url('admin/league/action/'.$league->sport_type.'/'.$league->id)."' class='btn cur-p btn-warning m-3'>edit</a>
                                <button type='button' class='btn cur-p btn-danger btn-color m-3' data-bs-toggle='modal' data-bs-target='#delete-modal$league->id'>Delete</button>
                            <div class='modal fade' id='delete-modal$league->id' tabindex='-1' aria-labelledby='delete-modal' aria-hidden='true' style='display:none'>
                                <div class='modal-dialog modal-md modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <h5 class='modal-title' id='add-modal'>Delete User</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>Yakin ingin menghapus $league->name_league</div>
                                    <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>cancel</button>
                                    <a href='".site_url('admin/league/delete/'.$league->id)."' class='btn btn-danger'>Confirm</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </td>
                            </tr>
                            "; 
                    }
                } 
            ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
</div>