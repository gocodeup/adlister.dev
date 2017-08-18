<div class="container">

    <section id="for-sale">

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

            <h1 class="section-title"><?= $item->name; ?></h1>

            <div class="col-md-6">

            	<img src="<?= $item->image_url; ?>" class="img-responsive center-block">

            </div>

            <div class="col-md-6">

                <p>
                    <?= $item->description; ?>
                </p>

                <p>Asking Price: <?= convertToMoney($item->price); ?></p>

                <h3>Seller Info</h3>

                <p><a href="/users/account?id=<?= $item->user_id; ?>"><?= $item->user()->name; ?></a></p>

            </div>

        </div>

        <?php if (Auth::check() && Auth::user()->id == $item->user_id) : ?>
        <div class="row">

            <div class="col-md-12 text-center">

                <a href="/items/edit?id=<?= $item->id; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit Item</a>
                <a href="#" class="btn btn-danger" id="delete-item"><i class="fa fa-trash"></i> Delete Item</a>
                <form action="/items/delete" method="POST" id="delete-item-form">
                    <input type="hidden" name="id" value="<?= $item->id; ?>">
                </form>

            </div>

        </div>
        <?php endif; ?>

    </section>

</div>
