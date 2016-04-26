@extends('layouts.admin')
@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 630px;">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Issara Admin</span>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Category Content</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/admin') }}">Home</a>
                </li>
                <li>
                    <a>Category</a>
                </li>
                <li class="active">
                    <strong>Content</strong>
                </li>
            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Category</h5>
                    </div>
                    <div class="ibox-content">
                        <!-- Box Search by category name -->
                        <div class="form-group">
                            <form action="{{action('Admin\CatgContentController@index')}}" method="get">
                                <label class="col-sm-2 control-label">search</label>
                                <div class="col-sm-8">
                                    <input type="text" name="keyword" class="form-control" value="{{$keyword or ''}}">
                                </div>
                                <div class="col-sm-1 pull-right">
                                    <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#createCategory">ADD</button>
                                </div>
                                <div class="col-sm-1 pull-right">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <!-- list of Category -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px">No</th>
                                    <th>Name</th>
                                    <th width="20px">Cnt</th>
                                    <th width="60px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="text-center">{{$category->order}}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="text-center">{{count($category->contents)}}</td>
                                        <td class="text-center">
                                            @if(count($category->contents))
                                                <i class="fa fa-trash" data-toggle="tooltip" title="Delete" style="cursor:not-allowed;"></i>
                                            @else
                                                <span data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash text-danger" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                                        <form action="{{action('Admin\CatgContentController@destroy', $category->id)}}" method="POST" hidden>
                                                           <input type="hidden" name="_method" value="delete">
                                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </i>
                                                </span>
                                            @endif
                                            <span data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-pencil-square-o text-success"  style="cursor:pointer;" data-toggle="modal" data-target="#updateCategory-{{$category->id}}"></i>
                                            </span>

                                            <!-- Edit Category Name Modal Pop -->
                                            <div class="modal fade" id="updateCategory-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{action('Admin\CatgContentController@update', $category->id)}}" method="POST">
                                                        {!! method_field('put') !!}
                                                        {!! csrf_field() !!}
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Category</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Order</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="order" class="form-control">
                                                                            @for($i=1; $i<=$categories->count(); $i++)
                                                                                <option value="{{$i}}" @if($i === $category->order) selected @endif>{{$i}}</option>
                                                                            @endfor
                                                                        </select>
                                                                    </div>
                                                                    <br><br>
                                                                    <label class="col-sm-2 control-label">Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input name="name" type="text" class="form-control" value="{{$category->name}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Form Create & Category Management -->
            <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form action="{{action('Admin\CatgContentController@store')}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="modal-dialog" role="document">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Add/Update Category</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input name="name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>
                                    <div class=" col-sm-12">
                                        <button class="btn btn-primary pull-right" style="margin-left: 5px; margin-right: 15px;" type="submit"><strong>Save</strong></button>
                                        <button class="btn btn-white pull-right" data-dismiss="modal" type="reset"><strong>Cancel</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.footer')
</div>

@endsection

