<!-- MODAL ADD -->
<form>
  <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Row</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 1</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p1" id="score_p1" class="form-control" placeholder="Score Player 1">
                    <p id="validate_score_p1" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 2</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p2" id="score_p2" class="form-control" placeholder="Score Player 2">
                    <p id="validate_score_p2" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 3</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p3" id="score_p3" class="form-control" placeholder="Score Player 3">
                    <p id="validate_score_p3" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 4</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p4" id="score_p4" class="form-control" placeholder="Score Player 4">
                    <p id="validate_score_p4" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
    <!--END MODAL ADD-->
 
<!-- MODAL EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Row Main</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group row" hidden>
                  <label class="col-md-2 col-form-label">Row Id</label>
                  <div class="col-md-10">
                    <input type="number" name="row_id_edit" id="row_id_edit" class="form-control" placeholder="Row Id" readonly>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 1</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p1_edit" id="score_p1_edit" class="form-control" placeholder="Score Player 1">
                    <p id="validate_score_p1_edit" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 2</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p2_edit" id="score_p2_edit" class="form-control" placeholder="Score Player 2">
                    <p id="validate_score_p2_edit" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 3</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p3_edit" id="score_p3_edit" class="form-control" placeholder="Score Player 3">
                    <p id="validate_score_p3_edit" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2 col-form-label">Player 4</label>
                  <div class="col-md-10">
                    <input type="number" onKeyPress="if(this.value.length==4) return false;" name="score_p4_edit" id="score_p4_edit" class="form-control" placeholder="Score Player 4">
                    <p id="validate_score_p4_edit" style="color: red; font-style: italic;"></p>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!--END MODAL EDIT-->
 
<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Row Main</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               <strong>Are you sure to delete this record?</strong>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="row_id_delete" id="row_id_delete" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>

          </div>
        </div>
      </div>
    </div>
</form>
<!-- END MODAL DELETE -->

<!--MODAL Reset Dialog-->
<form>
    <div class="modal fade" id="Modal_Reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset Game</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               <strong>Are you sure want to reset game?</strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" type="submit" id="btn_reset" class="btn btn-primary">Yes</button>

          </div>
        </div>
      </div>
    </div>
</form>
<!-- END MODAL Reset Dialog -->

<!--MODAL RESET-->
<form>
    <div class="modal fade" id="Modal_Reseted" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset Game</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               <strong>Game Over. You are Reseted game, ceki record list cleared!</strong>
          </div>
          <div class="modal-footer">
            <button type="button" type="submit" id="btn_reseted" class="btn btn-primary">Ok</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!-- END MODAL RESET -->

