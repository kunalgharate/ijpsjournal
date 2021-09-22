<div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="title-holder left">
                         <div class="title-holder-cell text-left">
                                
                                <div class="page-title">
                                    Submit Menuscript</div>
                                    <a style="color: #17a5e9;" href="<?php echo base_url();?>">Home</a> 
                                    <a> > </a>
                                    <a>   Submit Menuscript</a>
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

                            <form method="post" name="createmenuscript"  enctype="multipart/form-data" action="<?php echo base_url().'Menuscript/create'?> " style="padding:20px;">
                                <div class="form-group">
                                <?= $this->session->flashdata('success'); ?>
                                    <label for="Name">
                                        Name of the Corresponding Author
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="authorname" required class="form-control" id="Name" />
                                </div>
                                <div class="form-group">
                                    <label for="Title">
                                        Title of the Paper
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="papertitle" required class="form-control" id="Title" />
                                </div>
                                <div class="form-group">
                                    <label for="Email">
                                        Email
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="email" name="email" required class="form-control" id="Email" />
                                </div>
                                <div class="form-group">
                                    <label for="Country">
                                        Country
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="country" required class="form-control" id="Country" />
                                </div>
                                <div class="form-group">
                                    <label for="Paper">
                                        Upload Paper
                                        <span style="color:red">(only docs/doc file) *</span>
                                    </label>
                                    <?php echo form_upload(['name'=> 'userfile']);?>

                                    <span></span>
                                </div>

                                <button type="submit"  class="btn btn-success">Submit</button>
                                <br />
                                <br />
                                <br />
                                <b>Are you getting any problem in Paper Uploading ?</b>
                                <p style="color:#058ecb">
                                    Don't worry please Submit / Email Research paper at
                                    <a href="mailto:ijprajournal@editorboard.com">ijprajournal@editorboard.com</a>
                                </p>




                            </form>
                            
                        </div>

                    </section>
          
</div>