<!--Page for creating new advertisement listings-->
<?php

if (isset($_POST)){
    $picture = Input::get('image');
    saveUploadedImage($picture);
    var_dump($_FILES);
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

                <form method='post' action="/create">
                  <div class="form-group">
                    <label for="name">Ad Title</label>
                    <input name='name' type="text" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Item Description</label>
                    <input type="textarea" class="form-control" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="InputFile">File input</label>
                    <input name='image' type="file" id="InputFile">
                    <p class="help-block">Add an image of your item.</p>
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>

        </div>

    </section>

</div>
