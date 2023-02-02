@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Services List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href={{route('pages.dashboard')}}>Dashboard</a></li>
                <li class="breadcrumb-item active">list</li>
            </ol>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ICOM</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($services)>0)
                    @foreach($services as $service)
                <tr>
                    <th scope="row">{{$service->id}}</th>
                    <td>{{$service->icon}}</td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->description}}</td>
                    <td>
                        <div class="row overflow-hidden items-center">
                            <div class="col-sm-2 m-2">
                                <a class="btn btn-primary" href="{{route('pages.services.edit',$service->id)}}">Edit</a>
                            </div>
                            <div class="col-sm-2 m-2">
                                <form action="{{route('pages.services.delete',$service->id)}}" onsubmit="return confirm('Are you Sure!')">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

                </tbody>
            </table>

        </div>
    </main>
@endsection

