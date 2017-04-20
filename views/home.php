<body>
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome To Ooolister!</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="container-fluid">

            <h3 class="featured">Featured Items</h3>
            
            <a href="/ads/photovideo"><h4 class="section-title">Photo + Video</h4></a>
            <!-- Placeholder for featured items.-->
            <div class="row">
                <?php foreach($ads as $ad) :?>
                
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox" value="<?= $ad->id ?>">SAMPLE</div>
                <?php endforeach?>
                
            </div>

            <a href="/ads/movies"><h4 class="section-title">Movies</h4></a>
            <div class="row">
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox">SAMPLE</div>
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox">SAMPLE</div>
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox">SAMPLE</div>
            </div>

            <a href="/ads/games"><h4 class="section-title">Games</h4></a>
            <div class="row">
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox">SAMPLE</div>
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox">SAMPLE</div>
                <div class="col-xs-6 col-sm-4"><a href="/ads"><img class="img-responsive" src="/images/pic08.jpg"></a><input type="checkbox">SAMPLE</div>
            </div>

        </div>

    </section>

</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
  </script>
<script>
$(function(){
    var test = localStorage.input === 'true'? true: false;
    $('input').prop('checked', test || false);
});

$('input').on('change', function() {
    var ad_id = $(this).val();
    var request = $.ajax({
        url: '/account/addtofavorites',
        data: {
            ad_id: ad_id
        }
    });

    request.done(function(){
        console.log ('saved');
    });

    request.error(function(error){
        console.log (error);
    });

});
</script>
</body>