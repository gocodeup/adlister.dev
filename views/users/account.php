<!--Page for user account home-->

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1>Your Profile</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm offset-sm-0 col-md-6 offset-md-3">
            <h3>Profile Info:</h3>
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <input type="button" class="btn btn-success float-right" value="Edit Profile" onclick="location.href = '/edit-user';">
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
            <input type="button" class="btn btn-success float-right" value="Create Ad" onclick="location.href = '/create';">
        </div>
    </div>
</div>
