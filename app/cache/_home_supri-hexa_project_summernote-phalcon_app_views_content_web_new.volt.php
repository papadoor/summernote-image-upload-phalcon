<?php
/**
 * @var \Phalcon\Mvc\View\Engine\Php $this
 */
?>

<?php echo $this->getContent(); ?>


<section class="content">
    <a href=<?= $this->url->get('content_web/index') ?>><button class="btn btn-primary"><i class="fa fa-chevron-left">  Back</i></button></a>
    <hr />
    <div class="row">
                <?php
                    echo $this->tag->form(["content_web/create", "autocomplete" => "off", "enctype" => "multipart/form-data"] );
                ?>
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Create New Content</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="fieldNameContent">Name Of Content *</label>
                        <?php echo $this->tag->textField(array("name_content", "class" => "form-control", "id" => "fieldNameContent", "placeholder" => "Name Content")) ?>
                    </div>
                    <div class="form-group">
                        <label>Title Content *</label>
                            <?php echo $this->tag->textField(array("title_content", "class" => "form-control", "placeholder" => "Title...")) ?>
                    </div>
                    <div class="form-group">
                        <label>Summary Content *</label>
                            <?php echo $this->tag->textField(array("summary_content", "class" => "form-control", "placeholder" => "Summary...")) ?>
                    </div>
                    <div class="form-group">
                        <label for="fieldDecriptionContent">Decription Of Content *</label>
                        <!-- <textarea id="redactor_content"></textarea> -->
                            <?php echo $this->tag->textArea(array("decription_content", "class" => "form-control", "id" => "summernote", "placeholder" => "Descriptions ...")) ?>
                    </div>
                    <div class="form-group">
                      <label>Category Content</label>
                      <select name="category_content" class="form-control">
                            <option value="advertising-campaigns">Advertising Campaigns</option>
                            <option value="branding">Branding</option>
                            <option value="digital-platforms">Digital Platforms</option>
                            <option value="live-events">Live Events</option>
                            <option value="publishing">Publishing</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Completed Date</label>
                            <?php echo $this->tag->textField(array("date_content", "class" => "form-control", "id" => "datepicker", "placeholder" => "08/02/2016")) ?>
                    </div>
                    <div class="form-group">
                        <label>Image for Content</label>
                        <input type="file" name="images">
                    </div>
                </div>
                <div class="box-footer">
                    <?php echo $this->tag->submitButton(["Save", "class" => "btn btn-primary"]) ?>
                </div>

            </div>
        </div>
                <?php echo $this->tag->endForm(); ?>
    </div>
</section>
