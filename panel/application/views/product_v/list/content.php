<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ürün Listesi

                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-block btn-outline-success btn-sm"> <i class="fas fa-plus"></i> Yeni Ekle</button>
                </div>
            </div>

           <?php if(empty($items)) { ?>
            <div class="alert alert-info text-center">


                Yeni ürün eklemek için <a href="">tıklayın</a>
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
                            <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>  SİL</button> </td>
                            <td><button type="button" class="btn btn-block btn-outline-success btn-sm"> <i class="fas fa-edit"></i> DÜZENLE</button></td>

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