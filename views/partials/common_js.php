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