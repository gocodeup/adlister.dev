<!--Page that includes the form to edit an existing ad-->
<!-- need Model::update() -->
<!-- need to grab the item's info (whichever one the user wants to edit) to put into each value="" -->

 <div class="container">


        <div class="row">

            <h1 class="section-title text-center">Editing Ad</h1>

            <div class="col-md-6 col-md-offset-3">



                <form method="POST" action="" data-validation data-required-message="This field is required">

                <div class="form-group">
                    <label class="formBoxTitle" for="titleInput">Title</label>
                    <input value="" class="form-control" id="title" name="title" placeholder="Title" type="text">
                </div>


                <div class="form-group">
                    <label class="formBoxTitle" for="locationInput">Location</label>
                    <input value="" class="form-control" id="location" name="location" placeholder="Location" type="text">
                </div>


                <div class="form-group">
                    <label class="formBoxTitle" for="priceInput">Price</label>
                    <input value="" class="form-control" id="price" name="price" placeholder="1.99" type="text">
                </div>


                <div class="form-group">
                    <label class="formBoxTitle" for="descInput">Description</label>
                    <textarea value="" class="form-control" id="description" name="description" placeholder="Enter your item description here" rows="5"></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Update Ad</button>

                </form>

            </div>

        </div>


</div>
