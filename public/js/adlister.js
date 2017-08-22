    <script>
        $(document).ready(function() {

            $('#search').typeahead({
                name: 'query',
                remote: 'index?query=%QUERY'

            });

        })
    </script>