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
  width: 160px;
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
  font-size: 18px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav h2 {
  color: #f1f1f1;
  font-family: "Lucida Console", "Courier New", monospace;
  font-size: 25px;
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
     
      <a href="<?php echo base_url(); ?>admin/issue_data">
        Issue Data
      </a>
      <a href="<?php echo base_url(); ?>admin/paper_status">
        Paper Status
      </a>
      <a href="<?php echo base_url(); ?>admin/logout">Log out</a>
</div>
        <div class="container" style="margin-right: 20px;">
                    <h2>Paper Status</h2>
                    <table align="center">
                    <div class="container" style="margin-right: 20px;">

<h3>Add Status</h3>
<div class="section padding_layout_1">
<div class="container">
<div class="row">
<div class="col-md-9">

<section class="services-single">

    <div class="default-text-block" style="overflow:hidden;">
        <form  method="post" name="add_issue"  enctype="multipart/form-data" action="<?php echo base_url().'admin/create_status'?> " style="padding:20px;">
        <div class="form-group">
                <label for="Article ID">
                    Article ID
                    <span style="color:red">*</span>
                </label>
                <input type="number" name="Article_id" required class="form-control" id="Article_id" />
            </div>
        <div class="form-group">
                <label for="Name">
                    Name 
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="Name" required class="form-control" id="Name" />
            </div> 
            <div class="form-group">
                <label for="Title">
                    Title
                    <span style="color:red">*</span>
                </label>
                <input type="text" name="Title" required class="form-control" id="Title" />
            </div> 
            <div class="form-group">
            <label for="Status">
                    Status
                    <span style="color:red">*</span>
                </label>
                <select type="text" name="status"  required class="form-control" id="status">
                <option value="Review">Review</option>
              <option value="Submited">Submited</option>
                <option value="Pulished">Pulished</option>
               <option value="Discard">Discard</option>

                </select>
            </div> 
    
            <div class="form-group">
        
            </div> 

            <button type="submit"  class="btn btn-success">Submit</button>&nbsp;<a class="btn btn-primary" href='javascript:self.history.back();'>Go Back</a>
</div>
<br>
</form>             
        
                  </table>
                    <table class="table">
                
                        <thead>
                            <tr>
                            <th>Article_id</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>

</tr>
                        </thead>
                        <?php if(count($paperstatus_data)): ?>
                        <?php
                        foreach ($paperstatus_data as $psd) {
                            ?>
                            <tr>
                                
                                <td><?php echo  $psd['Article_id']; ?></td>
                                <td><?php echo $psd['Name']; ?></td>
                                <td><?php echo $psd['Title'] ?></td>
                                <td><?php echo $psd['status'] ?></td>
                               
                              
                                <td><a  class="btn btn-success" href="<?php echo base_url(); ?>admin/paperstatusupdate/<?php echo $psd['id']; ?>">Update</a></td><td>
                                <?=
                                form_open('admin/pstatusdelete'), form_hidden('id', $psd['id']),form_submit(['name => submit','value'=>'Delete', 'class'=>'btn btn-danger']),
                                form_close();
                                ?></td>
                            </tr>
                            <?php
                       }
                        ?>
                        <?php else:?>
                            <tr>
                                <td colsapn="3">NO Data availabel!</td>
                            </tr>
                        <?php endif;?>
                    </table>
                    
                </div>
                        
                        
    </body>
</html> 