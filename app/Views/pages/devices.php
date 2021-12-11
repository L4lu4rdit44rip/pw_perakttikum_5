<?= $this->extend('layout/templet'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="raw">
        <div class="col">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Device_name</th>
                        <th scope="col">Device_brand</th>
                        <th scope="col">Device_quantity</th>
                        <th scope="col">Device_satus</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($peraktikum5 as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['Device_name']; ?></td>
                            <td><?= $k['Device_brand']; ?></td>
                            <td><?= $k['Device_quantity']; ?></td>
                            <td><?= $k['Device_satus']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>