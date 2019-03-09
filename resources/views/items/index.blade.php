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
                <div class="card-header">{{ __('All Products') }}</div>

                <div class="card-body">
                    
                 <div class="form-group row">
                 	@foreach ($items as $item)
                            <p class=" title col-md-4 col-form-label text-md-right "> Product Name <br>{{$item->name}}</p>
                            <div class="col-md-6">
                            	<p class="title col-md-4 col-form-label text-md-right"> Price <br>{{$item->price}}</p>
                            </div>
                            	@endforeach

                </div>                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>