<script>
    $(document).ready(function() {
        var $username = $('#username'),
            $password = $('#password'),
            $passwordConfirm = $('#password-confirm');

        function isLongEnough(input) {
            return input.val() && input.val().length >= input.attr('data-min-length');
        }


        $username.change(function() {
            if (!isLongEnough($username)) {
                $username
                .css('background-color', '#F2BB6E')
                .get(0)
                    .setCustomValidity(' ');
                .end();
            }
        });

        $password.change(function() {
            if (!isLongEnough($password)) {
                $password
                    .css('background-color', '#F2BB6E')
                    .get(0)
                        .setCustomValidity(' ')
                    .end();
            }
        }).off('input')
            // overriding the default input event set in common_js.php
        .on('input', function() {
            $passwordConfirm
                .val('')
                .css('background-color', '')
                .get(0)
                    .setCustomValidity('')
                .end();

            // if it's already invalid because the password's too short, don't mess with it
            if ($password.is(':invalid') && $password.val() && $password.val().length < $password.attr('data-min-length')) {
                // except make the background color orange (which should only make a difference when it's already red)
                $password.css('background-color', '#F2BB6E');
                return;
            }

            // reset password validity
            $password
                .css('background-color', '')
                .get(0)
                    .setCustomValidity('')
                .end();
        });

        $passwordConfirm.change(function() {
            // the most important part of this is the else if
            if (!$password.val() || $password.is(':invalid')) {
                // although in most cases redundant, this is here for reassurement's sake
                $passwordConfirm.val('');
                return;
            }

            // if the values don't match up
            if ($passwordConfirm.val() && $passwordConfirm.val() !== $password.val()) {
                $passwordConfirm
                    .css('background-color', '#F2BB6E')
                    .get(0)
                        .setCustomValidity(' ')
                    .end();
            }
        }).keypress(function(e) {
            // no need for the user to input anything if password is empty/invalid, so why let them?
            if (!$password.val() || $password.is(':invalid')) {
                e.preventDefault();
                // in fact, tell that user to fix that one first
                $password
                    .get(0)
                        .focus();
                // and if it's completely empty, do a little of the work for them
                if (!$password.val()) {
                    $password.trigger($.Event('input'));
                }
            }
        }).off('input')
            // overriding the default input event set in common_js.php
        .on('input', function() {
            var bgColor = '';

            // reset validity
            $passwordConfirm
                .get(0)
                    .setCustomValidity('')
                .end();

            // this is here in case someone copies and pastes, as the previous event won't fire in that situation
            if (!$password.val() || $password.is(':invalid')) {
                $passwordConfirm.val('');
                return;
            }

            // we get here and they match up...
            if ($passwordConfirm.val() === $password.val()) {
                bgColor = '#79C479';
            }

            $password.css('background-color', bgColor);

            $passwordConfirm.css('background-color', bgColor);
        });
    });
</script>