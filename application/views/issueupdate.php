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

<h3> Update Issue</h3>
<div class="section padding_layout_1">
<div class="container">
<div class="row">
<div class="col-md-8">

<section class="services-single">

    <div class="default-text-block" style="overflow:hidden;">
        <form  method="post" name="add_issue"  enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/issue_update/<?php echo $id; ?>"style="padding:20px;">
        <input name="id" type="hidden" value=<?php echo $id; ?> />
        <div class="form-group">
                <label for="Title">
                    Title of the Paper
                    <span style="color:red">*</span>
</label>
                <input type="text" name="paper_title" required class="form-control" id="Title"  value=<?php echo $paper_title; ?>  />
            </div>
        <div class="form-group">
                <label for="Name">
                    Name of the Corresponding Author
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="authorname" required class="form-control" id="Name"  value=<?php echo $authorname ; ?>  />
            </div> 
            <div class="form-group">
                <label for="volume">
                    volume
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="volume" required class="form-control" id="volume" value=<?php echo $volume ;?> />
            </div> 
            <div class="form-group">
                                <label for="issue_id">
                                        Issue
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="number" name="issue_id"  required class="form-control" id="issue_id" value=<?php echo $issue_id ;?> />
                                </div> 
            <div class="form-group">
                <label for="doi">
                    DOI
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="doi" required class="form-control" id="doi" value=<?php echo $doi ;?> />
            </div> 
            <div class="form-group">
                <label for="Paper">
                    Upload Issue Paper
                  
                    <span style="color:red">(only docs/doc/pdf file) *</span>
                </label>
                <?php echo "Old file: ", $issue_paper ;?>
                <input type="hidden"  name="old_issue_file" id="old_issue_file" value="<?php echo $issue_paper;?>" />
                <?php echo form_upload(['name'=> 'userfile', 'value'=> 'issue_paper']);?>

                <span></span>
            </div>
           <div class="form-group">
                <label for="Certificate">
                    Upload certificate
                  
                    <span style="color:red">(only docs/doc/pdd file) *</span>
                </label>
                <?php echo "Old file: ", $certificate ;?>
                <input type="hidden"  name="old_certificate" id="old_certificate" value="<?php echo $certificate;?>" />
                <?php echo form_upload(['name'=> 'certificate','value'=>'certificate' ]);?>

            </div> 
            
       
            <button type="submit"  class="btn btn-success">Submit</button>&nbsp;<a class="btn btn-primary" href='javascript:self.history.back();'>Go Back</a> 
</div>
</form>             
</body>
</html>
