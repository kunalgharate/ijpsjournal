<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 170px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #232F3E;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 5px 7px 5px 12px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav h2 {
  color: #f1f1f1;
}
.main {
  margin-left: 160px; 
  font-size: 28px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
        
    </head>
    <body>
    <div class="sidenav">
      <h2>Dashboard</h2>
      <a href="<?php echo base_url(); ?>admin/dashboard">
        Menuscript Data
      </a>
      <a href="<?php echo base_url(); ?>admin/add_issue">
        Add New Issue 
      </a>
      <a href="<?php echo base_url(); ?>admin/issue_data">
        Issue Data
      </a>
      <a href="<?php echo base_url(); ?>admin/logout">Log out</a>
</div>
<div class="container" style="margin-right: 20px;">

                    <h3>Add Issue</h3>
                    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                   
                    <section class="services-single">

                        <div class="default-text-block" style="overflow:hidden;">
                            <form  method="post" name="add_issue"  enctype="multipart/form-data" action="<?php echo base_url().'admin/create_issue'?> " style="padding:20px;">
                            <div class="form-group">
                                    <label for="Title">
                                        Title of the Paper
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="paper_title" required class="form-control" id="Title" />
                                </div>
                            <div class="form-group">
                                    <label for="Name">
                                        Name of the Corresponding Author
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="authorname" required class="form-control" id="Name" />
                                </div> 
                                <div class="form-group">
                                    <label for="volume">
                                        volume
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="volume" required class="form-control" id="volume" />
                                </div> 
                                <div class="form-group">
                                    <label for="doi">
                                        DOI
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="doi" required class="form-control" id="doi" />
                                </div> 
                                <div class="form-group">
                                    <label for="Paper">
                                        Upload Issue Paper
                                        <span style="color:red">(only docs/doc/pdf file) *</span>
                                    </label>
                                    <?php echo form_upload(['name'=> 'userfile']);?>

                                    <span></span>
                                </div>
                               <div class="form-group">
                                    <label for="Certificate">
                                        Upload certificate
                                        <span style="color:red">(only docs/doc/pdd file) *</span>
                                    </label>
                                    <?php echo form_upload(['name'=> 'certificate' ]);?>

                                </div> 

                                <button type="submit"  class="btn btn-success">Submit</button>
</div>
</form>             
    </body>
</html> 