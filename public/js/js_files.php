    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="application/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="application/javascript" src="js/responsiveCarousel.min.js"></script>
    <script type="application/javascript">

        $(function(){
        $('.crsl-items').carousel({
            visible: 4,
            itemMinWidth: 230,
            itemEqualHeight: 200,
            itemMargin: 9,
        });

        $("a[href=#]").on('click', function(e) {
            e.preventDefault();
        });
        });
    </script>

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

    <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    </script>