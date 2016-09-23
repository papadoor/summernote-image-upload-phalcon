<section class="about content-section alt-bg-light magnific-all">
    <div id="portfolio-section" class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    foreach ($data as $content) {
                ?>
                        <p><?php echo $content['name_content']; ?></p>
                        <div id="magnific-all" class="coba"><?php echo $content['decription_content']; ?></div>
                        <p><?php echo $content['date_content']; ?></p>
                        <p><?php echo $content['category_content']; ?></p>
                        <p><?php echo $content['image_content']; ?></p>
                <?php
                    }
                 ?>
            </div>
        </div>
    </div>
</section>