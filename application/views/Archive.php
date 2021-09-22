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
                                Archive</div>
                                    <a style="color: #17a5e9;" href="<?php echo base_url();?>">Home</a> 
                                    <a> > </a>
                                    <a>Archive</a>
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
                   
                   <h3>Archive</h3>
                    <table class="table"  style="color: black;">
                    <thead>
                            <tr>
                            <th>Year</th>
                            <th>volume</th>
                            <th>Issue</th>
</tr>

                <?php if(count($Archivedata)): ?>


                    <?php $row_count = 1;
                        foreach ($Archivedata as $isd) {
                     ?>
   
                           
                            <tr>

                            <td>
                            <?php echo  $isd['issue_date'] ?>
                        </td>
                        <td>
                            <?php echo $isd['volume'] ?></td>
                            <td>
                            <?php echo $isd['issue_id'] ?></td>
                                
                            
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
                                 
                        
    </body>
</html> 
