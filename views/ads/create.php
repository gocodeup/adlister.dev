<!--Page for creating new advertisement listings-->
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Name:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="productNameText">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Price:</label>
                    <div class="col-10">
                        <input class="form-control" type="number" id="priceText">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Description:</label>
                    <div class="col-10">
                        <textarea class="form-control" placeholder="Product Description Here" id="descriptionTextarea" rows="5"></textarea>
                    </div>
                </div>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Photos must be smaller than 3mb and in one of the following formats: PNG, JPG, JPEG</small>
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
