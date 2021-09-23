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
                    <h2>Issue Data</h2>
                    <table align="right">
                      
                   <td> <a  class="btn btn-primary"  href="<?php echo base_url(); ?>admin/add_issue">&#x2795; ADD ISSUE</a>
</td>
                  </table>
                  <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success">      
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
                    <table class="table">
                
                        <thead>
                            <tr>
                            <th>paper_title</th>
                            <th>Authorname</th>
                            <th>volume </th>
                            <th>Issue</th>
                            <th>DOI</th>
                            <th>issue_date</th>
                            <th>issue_paper</th>
                            <th>certificate</th>
                            <th>Update</th>
                            <th>Delete</th>

</tr>
                        </thead>
                        <?php if(count($issue_data)): ?>
                        <?php
                        foreach ($issue_data as $isd) {
                            ?>
                            <tr>
                                
                                <td><?php echo  $isd['paper_title']; ?></td>
                                <td><?php echo $isd['authorname']; ?></td>
                                <td><?php echo $isd['volume'] ?></td>
                                <td><?php echo $isd['issue_id'] ?></td>
                                <td><?php echo $isd['doi']; ?></td>
                                <td><?php echo $isd['issue_date'] ?></td>
                                <td><a href="<?=base_url ()?><?php echo $isd['issue_paper'] ?>" class="btn btn-primary"  download="<?php echo $isd['issue_paper'] ?>">Download </a></td>
                                <td><a href="<?=base_url ()?><?php echo $isd['certificate'] ?>" class="btn btn-primary"  download="<?php echo $isd['certificate'] ?>">Download</a></td>
                              
                                <td><a  class="btn btn-success" href="<?php echo base_url(); ?>admin/issueupdate/<?php echo $isd['id']; ?>">Update</a></td><td>
                                <?=
                                form_open('admin/issuedelete'), form_hidden('id', $isd['id']),form_submit(['name => submit','value'=>'Delete', 'class'=>'btn btn-danger']),
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