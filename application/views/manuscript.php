    <!-- end header -->
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Submit Manuscript</h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index-2.html">Home</a>
                                    </li>

                                    <li class="active">Submit Manuscript</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <!-- section -->
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                   
                    <section class="services-single">

                        <div class="default-text-block" style="overflow:hidden;">
                            <div class="heading">SUBMIT MANUSCRIPT</div>
                            <form method="post" name="createmenuscript"  enctype="multipart/form-data" action="<?php echo base_url().'Menuscript/create'?> " style="padding:20px;">
                                <div class="form-group">
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
                                    <input type="file" name="file" id="Paper" required />
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
               <div class="col-md-4" style="background-color:#a7d378;padding:20px;border-radius:10px;">
                    <div class="side_bar">
                        <div class="side_bar_blog">
                            <h4>For Authors</h4>
                            <div class="categary">
                                <ul>
                                    <li>
                                        <a href="call-for-paper.html">
                                            <i class="fa fa-angle-right"></i> Call for paper
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editorial-board.html">
                                            <i class="fa fa-angle-right"></i>Editorial Board
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author-guidelines.html">
                                            <i class="fa fa-angle-right"></i> Author Guidelines
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>PUBLISH ARTICLES WITH IN 48 HOURS</h4>
                            <p>Publish your research with IJPRA and engage with global scientific minds</p>
                            <a class="btn sqaure_bt" style="min-width: 220px;" href="submit-manuscript.html">Publish Article Today</a>
                        </div>
                        <div class="side_bar_blog">
                            <h4>ABOUT IJPRA Journal</h4>
                            <div class="categary">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dashboard"></i>
                                            <b>Journal Frequency:</b> Monthly
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-upload"></i>
                                            <b>Paper Submission:</b> Throughout the month
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope-o"></i>
                                            <b>Acceptance Notification: </b> Within 24 Hours
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bell"></i>
                                            <b>Publish Notification: </b> Within 24 Hours
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>