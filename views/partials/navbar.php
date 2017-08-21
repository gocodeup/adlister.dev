<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">AdLister</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/items">Items For Sale</a></li>
                <?php if (Auth::check()) : ?>
                    <li><a href="/users/account?id=<?= Auth::id(); ?>">Account</a></li>
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/items/create">Create Post</a></li>
                <?php else : ?>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/signup">Signup</a></li>
                <?php endif; ?>
            </ul>
            <?php if (Auth::check()) : ?>
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <span class="navbar-text">Welcome <?= Auth::user()->name; ?></span>
                </ul>
            <?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>