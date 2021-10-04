
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

  <!--- <?php #rint_r($Archivedata) ; 
   # echo "<pre>";
      # foreach ($Archivedata as $year){
       #    echo key($Archivedata);
           
          
        #   echo "<pre>";
       
        #foreach ($year as $volume){
            #echo $volume;
         #   echo key($year);
          #  echo "<pre>";
          # foreach ($volume as $issue){
                #echo key($volume);

           ##echo "<pre>";

        #}
       #}
    #}
    
        #print_r($isd);
   ?>--->
<div class="container shadow-sm" style=" margin-left: auto;
    margin-right: auto; padding-top: 10px;   margin-top: 32%;  
    width: 50em">
                   
                   <h3>Archive</h3>
                    <table class="table"  style="color: black;">
                    <thead>
                            <tr>
                            <th>Year</th>
                            <th>volume</th>
                            <th>Issue</th>
                           
</tr>

<?php  
 foreach($Archivedata as $year){?>
    <tr>
               <td><?php echo key($Archivedata); ?></td>
               <td> <?php  echo key($year); ?></td>
      <?php  foreach ($year as $volume){ ?>
        

          <?php  foreach ($volume as $issue){ ?>
          
            <td>
          <a style=" background-color: #4CAF50;   color: white;  padding: 5px 15px;
            text-align: center;" href="<?php echo base_url(); ?>Archive/Archive_issue/<?php  echo key($Archivedata); ?>/<?php echo key($year); ?>/<?php  echo $issue; ?>"><?php  echo "I ",$issue; ?></a>
             </td>
          

       <?php }
       }
    }

   ?>
   </tr>
            
</table>
                    
                        </div>
                     

    