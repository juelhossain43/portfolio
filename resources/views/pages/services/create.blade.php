@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href={{route('pages.dashboard')}}>Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{route('pages.services.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row ">

                    <div class="form-group col-md-4 mt-3">
                        <div class="pl-4 ">
                            <label for="icon" ><h4>Icon</h4></label>
                            <input type="text" class="form-control" id="icon" name="icon" value="">
                            @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="pl-4 py-2">
                            <label for="title" ><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                          <div class="pl-4 py-2">
                            <label for="description" ><h4>Description</h4></label>
                              <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" value=""></textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                </div>
                <button type="submit" name="submit"  class="btn btn-primary btn-sm mt-5">Submit</button>
            </form>

        </div>
    </main>
@endsection
