@include('layouts.structure')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 border h-full rounded">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Add your Products</li>
                <li class="list-group-item">Delete Products</li>
                <li class="list-group-item">Add Brand</li>
                <li class="list-group-item">Add Category</li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="text-center text-primary capitallise fs-1">Add your products</div>

            @include('addProducts')
        </div>
    </div>
</div>