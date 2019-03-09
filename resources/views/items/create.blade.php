<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />

</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>

                <div class="card-body">
                  <form method="POST" action="/items">
                     {{@csrf_field()}} 
                        <div class="form-group row">
                            <p class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</p>

                            <div class="col-md-6 " >
                                <input  class="form-control" type="text" name="name"  required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</p>

                            <div class="col-md-6">
                                <input type="text" name="price" class="form-control" required>

                               
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>