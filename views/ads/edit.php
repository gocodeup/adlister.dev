<div class="container">
  <h1> Edit Ad Listing </h1>

<div class="row">

      <form method="POST" action="edit.php" class="col s12">

          <div class = "row">
              <div class="input-field col s6">
                <input placeholder="Ad/Item Name" id="ad_name" type="text" class="validate" name="ad_name" data-required>
              </div>
              <div class="input-field col s6">
                <input placeholder="Item Price" id="price" type="text" class="validate" name="price" data-required>
              </div>
          </div>
          <div class = "row">
              <div class="input-field col s6">
                <input placeholder="Contact Email" id="email" type="email" class="validate" name="email" data-required>
              </div>
              <div class="input-field col s6">
                <input placeholder="Contact Phone" id="phone" type="text" class="validate" name="phone" data-required>
              </div>
              <div class="input-field col s12">
                <input placeholder="Location" id="location" type="text" class="validate" name="location" data-required>
              </div>
              <div class="input-field col s12">
                  <textarea type="textarea" class="materialize-textarea" id="textarea" name="description" data-required> </textarea>
                  <label for="textarea">Ad/Item Description</label>
              </div>
          </div>
          <!-- Form to submit an image file -->
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="img_url">
                </div>
              </div>
          </div>
          <button class="btn waves-effect waves-light" type="submit">Submit
          </button>
      </form>
  </div>