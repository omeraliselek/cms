<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ürün Listesi

                </h3>

                <div class="card-tools">
                    <a href="<?php echo base_url("product/new_form")?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Yeni Ekle</a>
                </div>
            </div>

           <?php if(empty($items)) { ?>
            <div class="alert alert-info text-center">


                Yeni ürün eklemek için <a href="<?php echo base_url("product/new_form")?>">tıklayın</a>
            </div>

            <?php }  else { ?>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Url</th>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Durumu</th>
                        <th>Silme</th>
                        <th>Düzenleme</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $item) { ?>
                        <tr>
                            <td><?php echo $item->id; ?></td>
                            <td><?php echo $item->url; ?></td>
                            <td><?php echo $item->title; ?></td>
                            <td> <?php echo $item->description; ?></td>
                            <td> <!-- Bootstrap Switch -->
                                <input
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?>
                                />

                               </td>
                            <td> <a href="#" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i> Sil</a> </td>
                            <td><a href="<?php echo base_url("product/update_form/$item->id") ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a></td>

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <?php } ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


<!-- /.row -->