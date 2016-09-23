<div class="navbar-header pull-left" style="margin-top : 14px;">
            <a class="navbar-brand page-scroll" href="<?= $this->url->get('/') ?>">
                <i class="fa fa-chevron-left"></i> Back
            </a>
        </div>
<section class="about content-section alt-bg-light magnific-all">
    <div id="portfolio-section" class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="border: 1px;">
                 <?php
                 echo '<label><h3>Name :</h3></label>
                        <div class="alert alert-info"><h4>'.$content_web->name_content.'</h4></div>
                        <label><h3>Title :</h3></label>
                        <div class="alert alert-info"><h4>'.$content_web->title_content.'</h4></div>
                        <label><h3>Summary :</h3></label>
                        <div class="alert alert-info"><h4>'.$content_web->summary_content.'</h4></div>
                        <label><h3>Description :</h3></label>
                        <div class="alert alert-info"><h4>'.$content_web->decription_content.'</h4></div>
                        <label><h3>Date :</h3></label>
                        <div class="alert alert-info"><h4>'.$content_web->date_content.'</h4></div>
                        <label><h3>Image Content :</h3></label>
                        <div class="alert alert-info"><img class="img-responsive" src="/img/'.$content_web->image_content.'" ></div>';
                ?>
                </div>
            </div>
        </div>
    </div>
</section>