<div class="page-wrapper">
    <div class="content">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <h4 class="page-title">Blogs</h4>
            </div>
            
            <div class="col-md-9">
                <a href="<?= base_url('admin/blog/0');?>" class="btn btn-info float-right" style="color:white;"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; ADD
                    </a>
            </div>
          </div>
        </div>
    <div class="col-lg-12">
        <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Author Name</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                foreach ($result as $row) {
                                    ?>
                                <tr>
                                    <td><?= $count; ?></td>
                                    <td><?= $row->title; ?></td>
                                    <td><?= $row->author; ?></td>
                                    <td><?= date_format(date_create($row->createdon), 'd-m-Y'); ?></td>
                                   
                                    <td> <a href="<?= base_url('admin/blog/'.$row->id);?>" style="font-size:30px; color:red"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp;&nbsp;&nbsp;
                                       <a href="<?= base_url('admin/deleteblog/'.$row->id);?>" style="font-size:30px; color:green"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                   <?php
                                        ++$count;
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>