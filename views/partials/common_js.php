<!DOCTYPE html>
<html>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.input-required').on('invalid', function() {
            this.setCustomValidity(' ');
            $(this).css('background-color', '#FFA09C');
        }).on('input', function() {
            this.setCustomValidity('');
            $(this).css('background-color', '');
        });
    });
</script>
</body>
</html>