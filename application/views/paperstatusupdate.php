<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>   
<div class="container" style="margin-right: 20px;">
<h3> Update Status</h3>
<div class="section padding_layout_1">
<div class="container">
<div class="row">
<div class="col-md-8">
<section class="services-single">

    <div class="default-text-block" style="overflow:hidden;">
    <form  method="post" name="add_issue"  enctype="multipart/form-data" action="<?php echo base_url().'admin/pstatusupdate/'?><?php echo $id; ?> " style="padding:20px;">
        <div class="form-group">
                <label for="Article ID">
                    Article ID
                    <span style="color:red">*</span>
                </label>
                <input type="number" name="Article_id" required class="form-control" id="Article_id" value=<?php echo $Article_id;?> />
            </div>
        <div class="form-group">
                <label for="Name">
                    Name 
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="Name" required class="form-control" id="Name"  value=<?php echo $Name; ?> />
            </div> 
            <div class="form-group">
                <label for="Title">
                    Title
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="Title" required class="form-control" id="Title" value=<?php echo $Title; ?> />
            </div>
            <div class="form-group">
            <label for="Status">
                    Status
                    <span style="color:red">*</span>
                </label>
                <select type="text" name="status"  required class="form-control" id="status" >
                <option value="<?php echo $status; ?>" ><?php echo $status; ?></option>
                <option value="Accepted ">Accepted</option>
                <option value="Under review">Under review</option>
              <option value="Published">Published</option>
                <option value="Rejected ">Rejected </option>
                </select>
                

            </div> 
    
            <div class="form-group">
        
            </div> 
       
            <button type="submit"  class="btn btn-success">Submit</button>&nbsp;<a class="btn btn-primary" href='javascript:self.history.back();'>Go Back</a> 
</div>
</form>             
</body>
</html>
