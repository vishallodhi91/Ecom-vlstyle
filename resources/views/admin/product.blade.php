@extends('admin/layout')
@section('page_title', 'Product')
@section('product_select', 'active')
@section('container')
    @if (session()->has('message'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <h1 class="title-1 mb10">Product</h1>
    <a href="{{ url('admin/product/manage_product') }}">
        <a href="product/manage_product">
            <button type="button" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Add Product</button>
        </a>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Slug</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">     </th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->slug }}</td>
                                <td>
                                    @if ($list->image != '')
                                        <img width="100px" src="{{ asset('storage/media/' . $list->image) }}" />
                                    @endif
                                </td>
                                <td>
                                <td class="text-center">
                                    <a href="{{ url('admin/product/manage_product', $list->id) }}"><button
                                            type="button" class="btn btn-success-xs"><i
                                                class="fas fa-edit"></i></button></a>
                                </td>

                                <td class="text-center">
                                @if ($list->status == 1)
                                    <a href="{{ url('admin/product/status/0', $list->id) }}"><button
                                            type="button" style="color: greenyellow">Enable<i
                                                class="fas fa-toggle-on"></i></button></a>
                                @elseif($list->status == 0)
                                    <a href="{{ url('admin/product/status/1', $list->id) }}"><button
                                            type="button" style="color: red">Disable<i
                                                class="fas fa-toggle-off"></i></button></a>
                                @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ url('admin/product/delete', $list->id) }}"><button type="button"
                                            class="btn btn-danger-xs"><i class="fas fa-trash"></i></button></a>
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
