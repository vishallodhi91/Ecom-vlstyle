@extends('admin/layout')
@section('page_title','Customer')
@section('customer_select','active')
@section('container')
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> 
    @endif                           
    <h1 class="title-1 mb10">Customer</h1>
    
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->email}}</td>
                            <td>{{$list->mobile}}</td>
                            <td>{{$list->city}}</td>
                            <td>
                                <a href="{{url('admin/customer/show/')}}/{{$list->id}}"><button type="button" class="btn btn-outline-success">View</button></a>

                                <td class="text-center">
                                    @if ($list->status == 1)
                                        <a href="{{url('admin/customer/status/0')}}/{{$list->id}}"><button
                                                type="button" style="color: greenyellow">Enable<i
                                                    class="fas fa-toggle-on"></i></button></a>
                                    @elseif($list->status == 0)
                                        <a href="{{url('admin/customer/status/1')}}/{{$list->id}}"><button
                                                type="button" style="color: red">Disable<i
                                                    class="fas fa-toggle-off"></i></button></a>
                                    @endif
                                    </td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection