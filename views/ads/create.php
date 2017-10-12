<!--Page for creating new advertisement listings-->
<?php

if (isset($_POST) && isset($_FILES['image'])){
    $picture = saveUploadedImage('image');
    $ad = new Ad();
    $ad->name = Input::get('name');
    $ad->description = Input::get('description');
    $ad->seller_id = Auth::id();
    $ad->image = $picture;

    $ad->save();

}

 ?>


<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">List your things!</h1>

                <!-- <form class="form-control" action="index.html" method="post">
                    <input class='form-control' type="text" name="name" placeholder="Title">
                    <input class='form-control' type="text" name="description" placeholder="description">
                    <button type="button" name="button">Submit</button>
                </form> -->

                <form method='post' action="/create" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Ad Title</label>
                    <input name='name' type="text" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="description">Item Description</label>
                    <input name='description' type="textarea" class="form-control" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="image">File input</label>
                    <input name='image' type="file" id="image">
                    <p class="help-block">Add an image of your item.</p>
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>

        </div>

    </section>

</div>
