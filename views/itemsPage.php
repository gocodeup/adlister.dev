 <?php

          


require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

$ads = Ad::all();

var_dump($ads);

?>


 <div class="container">
     <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Url</th>
                </tr>

        <?php foreach ($ads->attributes as $attribute=>$value): ?>
          <tr>
            <td><img src="<?= $value['image_url']   ?>" height='100' width='125'></td>
            <td><?= $value['name']; ?></td>
            <td><?= $value['description']; ?></td>
            <td><?= $value['price']; ?></td>
            <td> <a href="<?= $value['url'] ?>"><?= $value['url'] ?></a></td>
          </tr>
        <?php endforeach;?>




            </table>


        </div>            
    </div>
</div>