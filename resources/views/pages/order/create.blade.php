@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'order'
])



@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Create Order Page</h3>
    </div>
    <div class="card-body">
        <p>Order Status</p>
        <div class="input-group input-group-lg mb-15">

            <div class="input-group-prepend">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    Action
                </button>
                <ul class="dropdown-menu">
                    <li id="dine" class="dropdown-item"><a href="#">Dine-in</a></li>
                    <li id="delivery" class="dropdown-item"><a href="#">Delivery</a></li>
                    <li class="dropdown-item"><a href="#">Takeaway</a></li>
                </ul>
            </div>
            <!-- /btn-group -->
        </div>
        <!-- /input-group -->

        <p>Normal</p>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-danger">Action</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
        </div>
        <!-- /input-group -->

        <p>Small <code>.input-group.input-group-sm</code></p>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control">
            <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
        </div>
        <!-- /input-group -->
    </div>
    <!-- /.card-body -->
</div>

@endsection
