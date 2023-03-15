@extends('backend.cordinator.index')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Mange Videos</h4>
        <p class="card-description">
          Add Video
        </p>
        <form class="forms-sample" action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputName1" placeholder="Description">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Number</label>
            <input type="number" name="number" class="form-control" id="exampleInputName1" placeholder="Number">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Video</label>
            <input type="file" name="image" class="form-control" id="exampleInputName1" placeholder="Number">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Category</label>
            <select name="category_id" class="form-select">
                <option disabled>select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
              </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@endsection
