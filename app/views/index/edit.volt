<?php
/**
 * @var \Phalcon\Mvc\View\Engine\Php $this
 */
?>

<?php echo $this->getContent(); ?>


<section class="content">
    <a href={{url("content_web/index")}}><button class="btn btn-primary"><i class="fa fa-chevron-left">  Back</i></button></a>
    <hr />
    <div class="row">
                <?php
                    echo $this->tag->form(
                        [
                            "content_web/save",
                            "autocomplete" => "off",
                            "enctype" => "multipart/form-data"
                        ]
                    );
                ?>
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Content</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="fieldNameContent">Name Of Content</label>
                            <?php echo $this->tag->textField(array("name_content", "class" => "form-control", "id" => "fieldNameContent")) ?>
                    </div>

                    <div class="form-group">
                        <label for="fieldDecriptionContent">Decription Of Content</label>
                            <?php echo $this->tag->textArea(array("decription_content", "class" => "form-control", "id" => "summernote")) ?>
                    </div>
                    <div class="form-group">
                      <label>Category Content</label>
                      <!-- <?php echo $this->tag->selectStatic(
                            array(
                                "status",
                                array(
                                    "advertising-campaigns" => "Advertising Campaigns",
                                    "branding" => "Branding",
                                    "digital-platforms" => "Digital Platforms",
                                    "live-events" => "Live Events",
                                    "publishing" => "Publishing"
                                )
                            )
                        ); ?> -->
                      <select name="category_content" class="form-control">
                            <option value="advertising-campaigns" <?php if ($data->category_content == "advertising-campaigns" ) echo 'selected';?> >Advertising Campaigns</option>
                            <option value="branding" <?php if ($data->category_content == "branding" ) echo 'selected';?> >Branding</option>
                            <option value="digital-platforms" <?php if ($data->category_content == "digital-platforms" ) echo 'selected';?> >Digital Platforms</option>
                            <option value="live-events" <?php if ($data->category_content == "live-events" ) echo 'selected';?> >Live Events</option>
                            <option value="publishing" <?php if ($data->category_content == "publishing" ) echo 'selected';?> >Publishing</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="fieldDateContent">Completed Date of Content</label>
                            <?php echo $this->tag->textField(array("date_content", "class" => "form-control", "id" => "datepicker")) ?>
                    </div>
                    <div class="form-group">
                        <label>Image for Content</label>
                        <input type="file" name="images">
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                        <div class="thumbnail">
                            {{image('images/content/' ~ image_content, 'class' : 'img-responsive' )}}
                        </div>
                    </div>

                    <?php echo $this->tag->hiddenField("id") ?>

                </div>
                <div class="box-footer">
                    <?php echo $this->tag->submitButton(["Save", "class" => "btn btn-primary"]) ?>
                </div>

            </div>
        </div>
                <?php echo $this->tag->endForm(); ?>
    </div>
</section>