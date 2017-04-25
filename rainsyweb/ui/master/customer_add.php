<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Add New Customer
        </div>
    </div>
</div>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form method="post" action="<?php echo base_url('customer/do_new_customer');?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Customer Name :</label>
                <div class="col-sm-4">
                    <input type="text" name="customername" placeholder="Customer Name" class="form-control" required="true">
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order Number :</label>
                <div class="col-sm-4">
                    <input type="number" name="orderno" placeholder="Order Number" class="form-control" required="true">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Customer URL :</label>
                <div class="col-sm-4">
                    <input type="text" name="customerurl" placeholder="Customer URL" class="form-control">
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2">Images :</label>
                <div class="col-sm-4">
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                    <br/>
                    <img src="" id="partimg">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">&nbsp;</label>
                <div class="col-sm-4">
                    <input type="submit" value='Save' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('customer'); ?>" class="btn btn-info btn-sm">Back</a>
                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    
   var loadFile = function(event) {
        var output = document.getElementById('partimg');
        output.width = 150;
        output.src = URL.createObjectURL(event.target.files[0]);
  };
  
</script>
