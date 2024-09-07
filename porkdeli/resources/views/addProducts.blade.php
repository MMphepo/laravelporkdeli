
<form action="{{ route('productStore') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="fs-4 form-label">Product Name</label>
    <input  type="text" class="form-control" name="productname" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="fs-4 form-label">Brand</label>
    <input type="text" class="form-control " name="brand">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="fs-4 form-label">Category</label>
    <input type="text" class="form-control" name="category">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="fs-4 form-label">Keywords</label>
    <input type="text" class="form-control" name="keyword">
    <div class="form-text">seperate the kewords with commas</div>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>