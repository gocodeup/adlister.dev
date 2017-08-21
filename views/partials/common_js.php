<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://static.filestackapi.com/v3/filestack.js"></script>
<script type="text/javascript">
  var client = filestack.init('A5gY0fZEnTzWuvzsVI5Ttz');
 
 $('#filestackButton').click(function(){
    client.pick({
      accept: 'image/*',
      maxFiles: 5,
      imageMax: [1024, 1024]
    }).then(function(result){
      console.log(JSON.stringify(result.filesUploaded[0].url));
      var $imageUrl = JSON.stringify(result.filesUploaded[0].url);
      console.log($imageUrl);
    $('#img').val($imageUrl);  
  });
})


</script>