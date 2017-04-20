<script>
    $(document).ready(function() {
        // getting the minimum length for username and password from the php
        var $username = $('#username'),
            $password = $('#password'),
            $passwordConfirm = $('#password-confirm');



        $username.change(function() {
            // check if username is too short
            if ($username.val() && $username.val().length < $username.attr('data-min-length')) {
                $username
                    .css('background-color', '#F2BB6E')
                    .get(0)
                    .setCustomValidity(' ');
            }
        });

        $password.change(function() {
            // check if password is too short
            if ($password.val() && $password.val().length < $password.attr('data-min-length')) {
                $password
                    .css('background-color', '#F2BB6E')
                    .get(0)
                    .setCustomValidity(' ');
            }
        }).off('input')
        .on('input', function() {
            $passwordConfirm
                .val('')
                .css('background-color', '')
                .get(0)
                .setCustomValidity('');

            // if it's already invalid because the password's too short, don't mess with it
            if ($password.is(':invalid')
                && $password.val()
                && $password.val().length < $password.attr('data-min-length')
                ) {
                // the only time this should change anything is when the background color is red from trying to submit too short a password
                $password.css('background-color', '#F2BB6E');
                return;
            }

            // reset password validity
            $password
                .css('background-color', '')
                .get(0)
                .setCustomValidity('');
        });

        $passwordConfirm.change(function() {
            if (!$password.val() || $password.is(':invalid')) {
                $passwordConfirm.val('');
            } else if ($password.val() >= $password.attr('data-min-length')
                && $passwordConfirm.val()
                && $passwordConfirm.val() !== $password.val()
                ) {
                $passwordConfirm
                    .css('background-color', '#F2BB6E')
                    .get(0).setCustomValidity(' ');
            }
        }).keypress(function(e) {
            if (!$password.val() || $password.is(':invalid')) {
                e.preventDefault();
            }
        }).off('input')
        .on('input', function() {
            var bgColor = '';

            // if password is empty
            if (!$password.val() || $password.is(':invalid')) {
                $passwordConfirm.val('');
                return;
            }

            if ($(this).val() === $('#password').val()) {
                bgColor = 'green';
            }
            $('#password').css('background-color', bgColor);
            $(this).css('background-color', bgColor);
        });
    });
</script>