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
        Manuscript Data
      </a>
      <a href="<?php echo base_url(); ?>admin/issue_data">
        Upload Article
      </a>
      <a href="<?php echo base_url(); ?>admin/paper_status">
        Paper Status
      </a>
      <a href="<?php echo base_url(); ?>admin/contact_data">
        Contact Data
      </a>
      <a href="<?php echo base_url(); ?>admin/logout">Log out</a>
</div>
        <div class="container" style="margin-right: 20px;">
                    <h3>Manuscript Data</h3>
                    <table class="table">
                    
                
                        <thead>
                            <tr>
                            <th>Issue Date</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Download File</th>

</tr>
                        </thead>
                        <?php if(count($menuscript_data)): ?>
                        <?php
                        foreach ($menuscript_data as $msd) {
                            ?>
                            <tr>
                                <td><?php echo  $msd['issuedate']; ?></td>
                                <td><?php echo $msd['authorname']; ?></td>
                                <td><?php echo $msd['papertitle'] ?></td>
                                <td><?php echo $msd['email']; ?></td>
                                <td><?php echo $msd['country'] ?></td>
                                <td><a href="<?=base_url ()?><?php echo $msd['file'] ?>" class="btn btn-primary"  download="<?php echo $msd['file'] ?>">Download</a></td>
                            </tr>
                            <?php
                       }
                        ?>
                        <?php else:?>
                            <tr>
                                <td colsapn="3">NO Data available!</td>
                            </tr>
                        <?php endif;?>
                    </table>
                    
                </div>
                        
                        
    </body>
</html> 