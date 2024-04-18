@extends('admin.layouts.app')

@section('content')
<div class="container">
    

    <div class="row justify-content-center">
        <h4 class="text-center">Admin Panel</h4>
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">Card Data 1</div>
                <div class="card-body">
                    <h3>Card Data </h3>
                    <p>Show Graph/Values Here</p>
                    <a class="btn btn-primary mt-3" href="">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">Card Data 2</div>
                <div class="card-body">
                    <h3>Card Data</h3>
                    <p>Show Graph/Values Here</p>
                    <a class="btn btn-primary mt-3" href="">Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
