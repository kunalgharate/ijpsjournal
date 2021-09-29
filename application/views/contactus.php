<div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="title-holder left">
                         <div class="title-holder-cell text-left">
                                
                                <div class="page-title">
                                Contact Us</div>
                                    <a style="color: #17a5e9;" href="<?php echo base_url();?>">Home</a> 
                                    <a> > </a>
                                    <a style="color: #ffff;"> Contact Us</a>
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
      
      <?php if ($this->session->flashdata('contact')) { ?>

<div class="alert alert-success">
  <a href="<?php echo base_url().'contactus'?>" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong><?php echo $this->session->flashdata('contact'); ?></strong>
</div>

<?php } ?>
            <h1 class="text-center"><b>Contact Us</b></h1><br>
            
            <form  method="post" name="contactus"  enctype="multipart/form-data" action="<?php echo base_url().'ContactUs/send'?> ">
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="name">Name</label>
              <div class="col-md-11">
                <input  id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">E-mail</label>
            <div class="col-md-11">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
            </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="message">Your message</label>
              <div class="col-md-11">
                <textarea class="form-control"    maxlength="400" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-10 text-center">
                
            	<input type="submit" class="btn btn-primary btn-lg" name="send" value="Submit" />
                
              </div>
            </div>
          </fieldset>
          </form>
</div>
</div>

