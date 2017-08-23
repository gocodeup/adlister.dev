<div class="containerAccount">

    <section id="account">

        <div class="row">

            <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                <div class="alert alert-danger">
                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                <div class="alert alert-success">
                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>

            <h1 class="section-title">User Info</h1>

            <!-- Filestack -->
            <!-- <img class="profileImage" src="https://cdn.filestackcontent.com/2h25ZGRHTfmQ2DBEt3yR" alt="Image uploaded with Filestack" title="Image uploaded with Filestack">
            
            <input class="uploadButton" type="button" value="UPLOAD PROFILE PICTURE" onclick="showPicker()" /> -->
            
            <div id="userInfo">
            <p class="text-center userInfo">NAME: <?= $user->name; ?></p>
            <p class="text-center userInfo">USERNAME: <?= $user->username; ?></p>
            <p class="text-center userInfo">EMAIL: <?= $user->email; ?></p>
            </div>

            <?php if($user->id == Auth::id()) : ?>
            <div class="col-sm-12 text-center">

                <a href="/users/account/edit?id=<?= $user->id; ?>" class="buttonProfile btn btn-primary"><i class="fa fa-pencil"></i>EDIT PROFILE</a>

            </div>
            <?php endif; ?>

        </div>

    </section>

    <section id="for-sale">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="section-title itemsForSale">Items You Have For Sale</h1>

            </div>


        </div>

        <div class="row">

            <?php foreach($items->attributes as $key => $item) : ?>
            <div class="col-md-4">

                <h4 class="text-center"><?= $item['name']; ?></h4>

                <img src="<?= $item['image_url']; ?>" class="img-responsive center-block">

                <p>
                    <?= substr($item['description'], 0, 100) . "..."; ?>
                </p>
                <p>
                    <a href="/items/show?id=<?= $item['id']; ?>">View More Items</a>
                </p>

            </div>
            <?php if (($key + 1) % 3 == 0) : ?>
                </div>
                <div class="row">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php if($user->id == Auth::id()) : ?>
            <div class="row text-center">
                <a href="/items/create" class="btn btn-success">Create Post</a>
            </div>
        <?php endif; ?>

    </section>

</div>
