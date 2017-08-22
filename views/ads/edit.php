<!--Page that includes the form to edit an existing ad-->
<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Edit Ad</h1>

            <div class="col-md-6 col-md-offset-3">

                <p>Please fill out the information below so we can update your account.</p>
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

                <form method="POST" action="" data-validation data-required-message="This field is required">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Title" value="<?= $ad->name; ?>" data-required>
                    </div>
                    <div class="form-group">
                        <input type="textarea" class="form-control" id="description" name="description" placeholder="Description" value="<?= $ad->description; ?>" data-required>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Ad</button>

                </form>

            </div>

        </div>

    </section>

</div>
