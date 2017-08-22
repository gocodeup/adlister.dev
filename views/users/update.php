<div class="container">

    <section id="login">

        <div class="row">
        

            <h1 class="section-title">Update account</h1>


            <div class="col-md-6 col-md-offset-3">

                

                <form method="POST" action="/update" data-validation data-required-message="This field is required">

                    <div class="form-group">
                    	<label for="name">First and Last name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $user->name; ?>"required>
                    </div>
                    <div class="form-group">
                    	<label for="Email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>"required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/account" class="btn btn-primary">Cancel</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </section>

</div>
