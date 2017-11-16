<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Change Password</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form class="form-horizontal" method="post" action="{$smarty.const.WEB_PATH}settings.php">
                    <fieldset>
                        <div class="col-lg-12">
                            <label for="old_password">Old Password</label>
                            <input id="old_password" class="form-control" name="old_password" type="password" required="required"/>
                        </div>

                        <div class="col-lg-12">
                            <label for="new_password">New Password</label>
                            <input id="new_password" class="form-control" name="new_password" type="password" required="required"/>
                        </div>
                        <div class="col-lg-12">
                            <label for="confirm_password">Confirm Password</label>
                            <input id="confirm_password" class="form-control" name="confirm_password" type="password" required="required"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </fieldset>
                </form>

        </div>
    </div>
</div>



