
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">

  <form action="" method="" id="addProdcutModal">
    @csrf
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="errorMessage mb-2">
          
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Product name" id="name">
        </div>

        <div class="form-group mt-4">
          <label for="name">Price</label>
          <input type="text" class="form-control" name="price" placeholder="Enter your price" id="price">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_product">Save</button>
      </div>
    </div>
  </div>
  </form>

</div>