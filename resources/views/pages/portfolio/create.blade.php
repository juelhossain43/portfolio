@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href={{route('pages.dashboard')}}>Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{route('pages.main.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="row ">
                    <div class="form-group col-md-3 mt-3 pr-5 overflow-hidden">
                        <h3>Background Image</h3>
                        <img style="height: 30vh" src="" alt="">
                        <input class="pt-2" type="file"  name="bg_img">
                        <button type="submit" name="submit"  class="btn btn-primary btn-sm mt-5">Submit</button>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="pl-4 ">
                            <label for="title" ><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="pl-4 py-2">
                            <label for="sub_title" ><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                            @error('sub_stitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <h6>Upload Resume</h6>
                            <input type="file" id="resume" name="resume">
                        </div>

                    </div>

                </div>
            </form>

        </div>
    </main>
@endsection
