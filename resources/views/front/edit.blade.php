@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-4">
            <!-- MESSAGES -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif


            <!-- ADD Product FORM -->
            <div class="card card-body">
                <form action="{{route('product.update',['id'=>$product->id])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Product Title"  value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Product Description">{{$product->des}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="price" name="price" class="form-control" placeholder="Product Price" min="0" value="{{$product->price}}">
                    </div>
                    <input type="submit" name="save_product" class="btn btn-success btn-block" value="Save Product">
                </form>
            </div>
        </div>

    </div>
    @endsection
