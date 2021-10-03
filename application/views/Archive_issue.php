<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
          
          <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="title-holder left">
                         <div class="title-holder-cell text-left">

                                <div class="page-title">
                                Archive Issue</div>
                                    <a style="color: #17a5e9;" href="<?php echo base_url();?>">Home</a> 
                                    <a> > </a>
                                    <a>Archive Issue</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container shadow-sm" style=" margin-left: auto;
    margin-right: auto; padding-top: 10px;   margin-top: 30%;  
    width: 50em">
                   
                   <h3>Archive Issue</h3>
                    <table class="table" style="color: black;" >
                    <thead>
                            <tr>
                            
                            <th>Sr.NO</th>
                            <th>Paper Title / Author</th>
</tr>

                        <?php if(count($Archiveissue)): ?>


                        <?php $row_count = 1;
                        foreach ($Archiveissue as $isd) {
                            ?>
                           
                            <tr>
                            <td><?php echo $row_count;?>.</td>

                            <td>
                            <?php echo  $isd['paper_title']; ?>&nbsp;<br>
                            <?php echo $isd['authorname']; ?>&nbsp;<br>
                            <label>volume:</label><?php echo $isd['volume'] ?>&nbsp;
                            <label>Issue Date:</label><?php echo $isd['issue_date'] ?>&nbsp;
                            <label>DOI:</label><?php echo $isd['doi']; ?>&nbsp;<br>
                                
                            <a style="color : #FFA500;" href="<?=base_url ()?><?php echo $isd['issue_paper'] ?>"  download="<?php echo $isd['issue_paper'] ?>">Download paper, </a>
                            <a style="color : #FFA500;" href="<?=base_url ()?><?php echo $isd['certificate'] ?>"  download="<?php echo $isd['certificate'] ?>">Download Certificate.</a>
                        </td>
                        <tr>
                            <?php
                          $row_count++; }
                        ?>
                        <?php else:?>
                            <tr>
                                <td colsapn="3">NO Data availabel!</td>
                            </tr>
                        <?php endif;?>
                    </table>
                    
                        </div>
                        </div>
                                 
                        
    
