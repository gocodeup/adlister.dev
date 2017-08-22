<div class="container">

    <section id="accountinfo">

        <div class="row">

            <h1 class="section-title">Your Account</h1>
            
            <div class="col-xs-6 col-xs-offset-3">

            	<h3>Name: <?php echo $user->name; ?></h3>
            	<h3>Email: <?php echo $user->email; ?></h3>
            	<h3>Username: <?php echo $user->username; ?></h3>

                <a href="/update">Edit</a>
                <a href="/password">Change password</a>

                

            </div>

        </div>

    </section>

</div>











