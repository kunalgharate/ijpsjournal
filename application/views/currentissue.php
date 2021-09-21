<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
           
                   <div class="container" style="margin-right: 20px;">
                   
                   <h3>Current Issue</h3>
                    <table class="table">
                    <thead>
                            <tr>
                            
                            <th>Sr.NO</th>
                            <th>Paper Title / Author</th>
</tr>

                        <?php if(count($Currentissue)): ?>
                        <?php $row_count = 1;
                        foreach ($Currentissue as $isd) {
                            ?>
                           
                            <tr>
                            <td><?php echo $row_count;?>.</td>

                            <td>
                            <?php echo  $isd['paper_title']; ?>&nbsp;<br>
                            <?php echo $isd['authorname']; ?>&nbsp;<br>
                            <label>volume:</label><?php echo $isd['volume'] ?>&nbsp;
                            <label>DOI:</label><?php echo $isd['doi']; ?>&nbsp;
                            <label>Issue:</label><?php echo $isd['issue_date'] ?>&nbsp;<br>
                                
                            <a  href="<?=base_url ()?><?php echo $isd['issue_paper'] ?>"  download="<?php echo $isd['issue_paper'] ?>">Download Issue paper </a>
                            <a href="<?=base_url ()?><?php echo $isd['certificate'] ?>"  download="<?php echo $isd['certificate'] ?>">Download Certificate</a>
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
