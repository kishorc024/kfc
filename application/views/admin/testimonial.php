<div class="page-wrapper">
    <div class="content">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <h4 class="page-title">Testimonial</h4>
            </div>
           
          </div>
        </div>
        <div class="card-box">
            <div class="row">
            <div id="demo" class=" col-lg-12"
                    style="border-style: solid;border-color:#b2dcf4;padding:20px;margin-bottom:20px;">
                    <form action="<?php echo base_url('admin/savetestimonial'); ?>" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $id;?>" />
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Name<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                     <input class="form-control" name="name"  value="<?= $id == 0 ? "" : $data->name;?>" required />
                                    </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Type<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="type"  class="form-control" id="ddlType">
                                    <option value="text"<?= $id == "0" ? '' :( $data->type == 'text' ? 'selected' : '');?>>Text</option>
                                    <option value="video"<?= $id == "0" ? '' :( $data->type == 'video' ? 'selected' : '');?>>Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4" id="dvText">
                                <label>Image</label>
                                <div class="form-group">
                                    <input class="form-control" name="imagename" id="imagename" type="file"  onchange="readURL(this);">
                                </div>
                            </div>

                            <div class="col-lg-4" id="dvVideo" style="display: none">
                                <label>Video</label>
                                <div class="form-group">
                                    <input class="form-control" name="link"  value="<?= $id == 0 ? "" : $data->link;?>"    type="text" >
                                    
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label>Message</label>
                                <div class="form-group">
                                    <textarea name="message" class="form-control"  id="message" ><?= $id == 0 ? '' : $data->message;?></textarea>
                                </div>
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    


    $(document).ready(function(){
    function updateInputs() {
      if($( "#inputtype" ).val() == "text")
      {
        $("#dvText").show();
        $("#dvVideo").hide();
      }
      else{
        $("#dvVideo").show();
        $("#dvText").hide();
      }
    }
    updateInputs();
    $('#ddlType').on('change', updateInputs);    
});
</script>
                