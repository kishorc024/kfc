<div class="page-wrapper">
    <div class="content">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <h4 class="page-title">Blog</h4>
            </div>
           
          </div>
        </div>
        <div class="card-box">
            <div class="row">
            <div id="demo" class=" col-lg-12"
                    style="border-style: solid;border-color:#b2dcf4;padding:20px;margin-bottom:20px;">
                    <form action="<?php echo base_url('admin/saveblog'); ?>" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $id;?>" />
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Title<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                     <input class="form-control" name="title"  value="<?= $id == 0 ? "" : $data->title;?>" required />
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Author Name<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                     <input class="form-control" name="author"  value="<?= $id == 0 ? "" : $data->author;?>" required />
                                    </div>
                            </div>


                            <div class="col-lg-12">
                                <label>Description</label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control"  id="description" ><?= $id == 0 ? '' : $data->description;?></textarea>
                                </div>
                                <script>
                        CKEDITOR.replace('description');
                        </script>

                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                            
                        
                    </form>
                </div>
</div>
</div>
</div>
</div>

                