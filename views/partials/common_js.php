<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/youtube-autoresizer.js"></script>
<script src="/js/form-validation.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#delete-item').on('click', function(e) {
			e.preventDefault();
			$('#delete-item-form').submit();
		});
		setTimeout(function() {
			$('.alert').slideUp(1500);
		}, 5000);
	})
</script>