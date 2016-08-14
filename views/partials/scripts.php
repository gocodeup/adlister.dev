<script   src="http://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

<script language='javascript' type='text/javascript'>
    
    //signup verification for matching passwords
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
    
    //display table for pokemon table
</script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script>

    
    //add click listeners to each row
    function addListeners() {
        $('#pkmnTable tbody tr').off();
        $('#pkmnTable tbody tr').on("click", function() {
            var clickedRow = ($(this).text());
            //remove all but pokemon name from string
            clickedText = clickedRow.replace(/[0-9]/g, '');
            insertText = $.trim(clickedText);
            console.log(insertText);
            //above works
            //below works, but only one time
            //and never returns properly
            $('.insert-pokemon').each(function() {
                if ($(this).is(':empty')) {
                    console.log("empty");
                    $(this).text($(insertText));
                    return;
                }
            });
        });
    };
    addListeners();
    //initialize jquery datatable
	$('#pkmnTable').DataTable();
    //add click listeners to each row
    $('#pkmnTable').on("click", function() {
        addListeners();
    }); 

</script>
