<div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="title-holder left">
                         <div class="title-holder-cell text-left">
                                
                                <div class="page-title">
                                Pay Fees</div>
                                    <a style="color: #17a5e9;" href="<?php echo base_url();?>">Home</a> 
                                    <a> > </a>
                                    <a>Pay Fees</a>
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
 <?php if ($this->session->flashdata('paystatus')) { ?>

<div class="alert alert-info">
  <a href="<?php echo base_url().'payfee/start'?>" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong><?php echo $this->session->flashdata('paystatus'); ?></strong>
</div>

<?php } ?>
      <form id="redirectForm" method="post" action="request">

      <div class="form-group">
          <label>Name:</label><br>
          <input class="form-control" name="customerName" placeholder="Enter your name here " required/>
        </div>
        <div class="form-group">
          <label>Email:</label><br>
          <input class="form-control" name="customerEmail" placeholder="Enter your email address here"  required/>
        </div>
        <div class="form-group">
          <label>Phone:</label><br>
          <input class="form-control" name="customerPhone" placeholder="Enter your phone number here "  required/>
        </div>
       
      <div class="form-group">
          <label>Currency:</label><br>
          <input class="form-control" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"  required/>
        </div>
       
   
        <div class="form-group">
          <label>Amount:</label><br>
          <input class="form-control" name="orderAmount" value="1200"  required/>
        </div>
        <div class="form-group">
          <label>Note:</label><br>
          <textarea  class="form-control" maxlength="255" name="orderNote" rows="3" placeholder="Enter Note here"></textarea>
        </div>    
      
       
        <button type="submit" class="btn btn-primary btn-block" value="Pay">Submit</button>
        <br> 
        <br>
      </form>
   
      <div class="section padding_layout_1">
</div>                 

</div>

