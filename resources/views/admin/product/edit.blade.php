@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
  <div class="card mb-4">
    <div class="card-header">Edit product</div>
    <div class="card-body">
      @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
          @foreach ($errors->all() as $error)
            <li>-{{ $error }}</li>
          @endforeach
        </ul>
      @endif

      <form action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col">
            <div class="mb-3 row">
              <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" for="name">Name:</label>
              <div class="col-lg-10 col-md-6 col-sm-12">
                <input class="form-control" id="name" name="name" type="text"
                  value="{{ $viewData['product']->getName() }}">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="mb-3 row">
              <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" for="price">Price:</label>
              <div class="col-lg-10 col-md-6 col-sm-12">
                <input class="form-control" id="price" name="price" type="number"
                  value="{{ $viewData['product']->getPrice() }}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-3 row">
              <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" for="image">Image:</label>
              <div class="col-lg-10 col-md-6 col-sm-12">
                <input class="form-control" id="image" name="image" type="file">
              </div>
            </div>
          </div>
          <div class="col">
            &nbsp;
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3">
            {{ $viewData['product']->getDescription() }}
          </textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  {{-- <div class="card">
    <div class="card-header">
      Manage Products
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($viewData['products'] as $product)
            <tr>
              <td>{{ $product->getId() }}</td>
              <td>{{ $product->getName() }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                  <i class="bi-pencil"></i>
                </a>
              </td>
              <td>
                <form action="{{ route('admin.product.delete', $product->getId()) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">
                    <i class="bi-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div> --}}
  </div>
@endsection
