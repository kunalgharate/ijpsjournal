<div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="title-holder left">
                         <div class="title-holder-cell text-left">
                                
                                <div class="page-title">
                                Check Paper Status</div>
                                    <a style="color: #2E88C9;" href="<?php echo base_url();?>">Home</a>
                                    <a> > </a>
                                    <a>Check Paper Status</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container shadow-sm" style=" margin-left: auto;
    margin-right: auto; padding-top: 10px;   margin-top: 35%;   margin-bottom: 10%;
    width: 50em">
  
 
    <table class="table" style="color: black;">
                
                <thead>
                    <tr>
                    <th>Article_id</th>
                    <th>Name</th> 
                    <th>Title</th> 
                    <th>Status</th>
                    
</tr>  </thead>
                <?php if ($statusview !== Null): ?>
            
             
              <?php foreach($statusview as $psd) {  ?>
                    <td>
                        
                    
                    <h5><?php echo $psd; ?></h5>
                   
                    </td>
                <?php  }  ?>
            
             <?php else:?>
                    <tr>
                        <td colsapn="3">NO Status Available!</td>
                    </tr>
            <?php endif;?>
        
            </table>
           
             </div> 
            
                
