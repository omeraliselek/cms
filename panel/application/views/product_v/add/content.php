<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Yeni <small>Ürün Ekle</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo base_url("product/save"); ?>" method="post" role="form" id="quickForm">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input type="email" name="title" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Açıklama</label>
                        <textarea class="textarea" name="description" placeholder="Place some text here"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                      <a href="<?php echo base_url("product")?>">İptal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>