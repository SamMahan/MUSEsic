
<div class="modal fade" id="add_album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Pick an Album to Add:</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal">
        <fieldset>
        <div class="form-group">
          <label class="col-md-4 control-label" for="album_to_add"></label>
          <div class="col-md-4">
              <select id="album_to_add" name="album_to_add" class="form-control">
              <option value="0">--Select--</option>
              <option value="1">Album 1</option>
              <option value="2">Album 2</option>
              <option value="3">Album 3</option>
              <option value="4">Album 4</option>
              <option value="5">Album 5</option>
              <option value="6">Album 6</option>
            </select>
          </div>
        </div>
        </fieldset>
        </form>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save Changes</button>

      </div>
    </div>
  </div>
</div>

