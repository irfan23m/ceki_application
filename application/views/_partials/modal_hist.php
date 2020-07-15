<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Ceki History</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               <strong>Are you sure to delete this record?</strong>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="ceki_id_delete" id="ceki_id_delete" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>

          </div>
        </div>
      </div>
    </div>
</form>
<!-- END MODAL DELETE -->

<!--MODAL verification Owner to Delete-->
<form>
  <div class="modal fade" id="Modal_Verification_Owner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" style=" position: relative; overflow-y: auto; max-width: 700px; padding: 15px;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Verification Owner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <div class="form-group row">
                  <label class="col-md-3 col-form-label">Owner Username</label>
                  <div class="col-md-9">
                    <input type="text" maxlength="100" name="own_username" id="own_username" class="form-control" placeholder="Username">
                    <p id="validate_own_username" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-3 col-form-label">Owner Password</label>
                  <div class="col-md-9">
                    <input type="password" maxlength="50" name="own_password" id="own_password" class="form-control" placeholder="Password">
                    <p id="validate_own_password" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" type="submit" id="btn_submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- END Modal verification Owner to Delete -->

<!--MODAL Respone Owner Verification-->
<form>
    <div class="modal fade" id="Modal_Respone_Verification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title_failed">Failed</h5>
            <h5 class="modal-title" id="title_success">Welcome</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="msg_failed">
               <strong>Wrong Username or Password !</strong>
          </div>
          <div class="modal-body" id="msg_success">
               <strong>Welcome M Irfan Mauluddin</strong>
          </div>
          <div class="modal-footer">
            <input type="text" name="var_session" id="var_session" hidden>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!-- END MODAL Respone Owner Verification -->