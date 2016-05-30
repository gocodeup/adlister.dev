onclick="location.href='account?=             <?php foreach ($users as $user) { 
                                        if (isset($_POST['email'])) {
                                            if ($user['email'] == $_POST['email']) { ?>
                                                <?= $user['id']; }}} ?>';">Submit
                <?php }}} ?>