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
                <form action="{{route('product.save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Product Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Product Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="price" name="price" class="form-control" placeholder="Product Price" min="0">
                    </div>
                    <input type="submit" name="save_product" class="btn btn-success btn-block" value="Save Product">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>

                    <td>{{$product->title}}</td>
                    <td>{{$product->des}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>

                    <td>
                        <a href="{{route('product.edit',['id'=>$product->id])}}"  class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>

                        <a href="{{route('product.delete',['id'=>$product->id])}}"   class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
