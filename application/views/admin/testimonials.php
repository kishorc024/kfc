<div class="page-wrapper">
    <div class="content">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <h4 class="page-title">Testimonials</h4>
            </div>
            
            <div class="col-md-9">
                <a href="<?= base_url('admin/testimonial/0');?>" class="btn btn-info float-right" style="color:white;"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; ADD
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
                                    <th>Name</th>
                                    <TH>Message</TH>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Link</th>
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
                                    <td style="width:100px"><?= $row->name; ?></td>
                                    <td><?= $row->message; ?></td>
                                    <td><?= $row->type; ?></td>
                                    <td>
                                        <?php if($row->imagename !=""){ ?>
                                        <img src="<?= base_url('testimonialpics/').$row->imagename.'.png';?>"
                                        style="height:50px; width:60px;" />
                                        <?php } ?>
                                    </td>
                                    <td><?= $row->link;?></td>
                                    <td style="width:100px"> <a href="<?= base_url('admin/testimonial/'.$row->id);?>" style="font-size:30px; color:red"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp;&nbsp;&nbsp;
                                       <a href="<?= base_url('admin/deletetestimonial/'.$row->id);?>" style="font-size:30px; color:green"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                   <?php
                                        ++$count;
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>