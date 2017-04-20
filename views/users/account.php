<!--Page for user account home-->

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1>Your Profile</h1>
        </div>
    </div>
    <div class="row topMargin">
        <div class="col-sm offset-sm-0 col-md-6 offset-md-3">
            <h3>Profile Info:</h3>
            <ul class="list-group">
                <li class="list-group-item">Name:</li>
                <li class="list-group-item">Username:</li>
                <li class="list-group-item">Email:</li>
                <li class="list-group-item">Password:</li>
            </ul>
            <input type="button" class="btn btn-success float-right topMargin" value="Edit Profile" onclick="location.href = '/edit-user';">
        </div>
    </div>
    <div class="row">
        <div class="col-sm offset-sm-0 col-md-6 offset-md-3">
            <h3>Your Ads:</h3>
            <div class="list-group">
                  <a href="/edit" class="list-group-item list-group-item-action">Cras justo odio</a>
                  <a href="/edit" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                  <a href="/edit" class="list-group-item list-group-item-action">Morbi leo risus</a>
                  <a href="/edit" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                  <a href="/edit" class="list-group-item list-group-item-action">Vestibulum at eros</a>
            </div>
            <input type="button" class="btn btn-success float-right topMargin" value="Create Ad" onclick="location.href = '/create';">
        </div>
    </div>
</div>
