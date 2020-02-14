<div class="modal fade" id="addInventoryModal" tabindex="-1" role="dialog" aria-labelledby="addInventoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add An Inventory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-info" role="alert">
        All required fields are marked red
      </div>
          <!-- ADD INVENTORY FORM  -->
          <form class="add-inventory-form" id="addInventoryForm">
            <div class="form-group">
              <label for="item">Item</label>
              <input type="text" class="form-control" placeholder="Item" id="item" name="item"  required/>
            </div>

            <div class="form-group">
              <label for="type">Type(Description)</label>
              <input type="text" class="form-control" placeholder="Type(Description)" id="type" name="type" required />
            </div>

            <div class="form-group">
              <label for="model">Model</label>
              <input type="text" class="form-control" placeholder="Model" id="model"  name="model" required />
            </div>
            
            <div class="form-group">
              <label for="serialNo">Serial No</label>
              <input type="text" class="form-control" placeholder="Serial No" id="serialNo"  name="serialNo"  required/>
            </div>

            <div class="form-group">
              <label for="campus">Location(Campus)</label>
              <input type="text" class="form-control" placeholder="Campus" id="campus" name="campus"  required/>
            </div>

            <div class="form-group">
              <label for="housing">Housing(Facility Location)</label>
              <input type="text" class="form-control" placeholder="Housing" id="housing" name="housing" required/>
            </div>

            <div class="form-group">
              <label for="capDate">Captured Date (mm-dd-yyyy)</label>
              <input type="date" class="form-control" placeholder="Captured Date" id="capDate" name="capDate"required/>
            </div>

            <div class="form-group">
              <label for="reloDate">Relocation Date (mm-dd-yyyy)</label>
              <input type="date" class="form-control" placeholder="Relocation Date" id="reloDate" name="reloDate"  />
            </div>

            <div class="form-group">
              <label for="">New Location</label>
              <input type="text" class="form-control" placeholder="New Location" id="newLocation" name="newLocation" />
            </div>

            <div class="form-group">
              <label for="">New Housing</label>
              <input type="text" class="form-control" placeholder="New Housing" id="newHousing" name="newHousing" />
            </div>
          </form>   
          <!-- /ADD INVENTORY FORM  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="submitAddInventory">Go!</button>
      </div>
    </div>
  </div>
</div>