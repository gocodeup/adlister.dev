 <?php

          


require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

$ads = Ad::all();

var_dump($ads);

?>


 <div class="container">
     <div class="row">
    
 


        <?php foreach ($ads->attributes as $attribute=>$value): ?>
        
        <div class="col-sm-6">
            <img src="<?= $value['image_url']   ?>" height='100' width='125'>
            <br>
            <p><?= $value['name']; ?></p>
            <p class="featurdItem"><?= $value['description']; ?></p>
            <p><?= $value['price']; ?></p>
            <br>    
            <a href="<?= $value['url'] ?>"><?= $value['url'] ?></a>

        </div>

        <?php endforeach;?>







                    
    </div>
</div>