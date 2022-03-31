

  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">


        {{-- form start....... --}}
<form action="{{ url('/addData') }}" method="POST" id="addPrductfrom">
    @csrf

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">




          <h5 class="modal-title" id="addModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>



        <div class="modal-body">


            {{-- eorr msg  --}}
<div class="errormsgContainer">

</div>


    <div class="mb-3">
      <label for="Product" class="form-label">Product Name </label>
      <input type="text" class="form-control"  name="name" placeholder="name" id="name" aria-describedby="Product">

    </div>
    <div class="mb-3">
      <label for="Price" class="form-label">Price</label>
      <input type="text" placeholder="product" name="product" class="form-control" id="product">
    </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_product">Save Product</button>
        </div>

    </form>


    {{-- from end  --}}
      </div>
    </div>
  </div>
