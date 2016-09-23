<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Bismillahirrohmanirrohim ...Baca dulu bos biar lancar.</h3>
                </div>
                <div class="box-body">
                  <p>Add Content web for our last project page.</p>
                  <a href=<?= $this->url->get('content_web/new') ?> class="btn btn-app">
                    <i class="fa fa-edit"></i> Create New Content
                  </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Content Web</h3>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <!-- <div class="row"> -->
                        <table id="content" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name Of Content</th>
                                    <th>Date Of Content</th>
                                    <th>Category Of Content</th>
                                    <th></th>
                                    <th></th>
                                     <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $x = 1; foreach ($datacontent as $content_web): ?>
                                <tr>
                                    <td><?php echo $x++ ?></td>
                                    <td><?php echo $content_web->name_content ?></td>
                                    <td><?php echo $content_web->date_content ?></td>
                                    <td><?php echo $content_web->category_content ?></td>
                                    <td><?php echo $this->tag->linkTo(["content_web/edit/" . $content_web->id, "Edit"]); ?></td>
                                    <td><?php echo $this->tag->linkTo(["content_web/delete/" . $content_web->id, "Delete"]); ?></td>
                                    <td><?php echo $this->tag->linkTo(["content_web/show/" . $content_web->id, "View"]); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>