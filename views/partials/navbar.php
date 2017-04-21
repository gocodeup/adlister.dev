<!--partial view for navbar-->

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand logoGreen" href="/">pie piper</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 mr-auto">
            <input class="form-control mr-sm-2 searchbar" type="text" placeholder="Search">
            <button class="btn btn-success my-2 my-sm-0" id="searchButton" type="submit">Search</button>
        </form>
    <!-- Shop Button -->
    <div class="btn-group">
        <button id="shopButton" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Shop
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/items">Software</a>
            <a class="dropdown-item" href="/items">Hardware</a>
            <a class="dropdown-item" href="/items">Rockets</a>
            <a class="dropdown-item" href="/items">Other</a>
        </div>
    </div>
    <!-- Profile Button -->
    <!-- If statement needed here to determine if user is logged in, if not show only login -->
    <div class="btn-group">
        <button id="profileButton" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Profile
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/account">View Profile</a>
            <a class="dropdown-item" href="edit-user">Edit Profile</a>
            <a class="dropdown-item" href="/create">Create Ad</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>

    </div>
</nav>