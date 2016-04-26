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
            <h2>Advertise</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ action('Admin\BackOfficeController@index') }}">Home</a>
                </li>
                <li class="active">
                    <strong>Advertise</strong>
                </li>
            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Advertise</h5>
                <div class="ibox-tools">
                    <a href="{{ action('Admin\AdvertiseController@create') }}" class="collapse-link">
                        <span class="label label-primary"><i class="fa fa-plus"></i></span>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                {{--
                <div class="form-group">
                    <label class="col-sm-1 control-label">Name</label>
                    <div class="col-sm-3"><input type="text" class="form-control"></div>
                    <label class="col-sm-1 control-label">Category</label>
                    <div class="col-sm-3"><input type="text" class="form-control"></div>
                    <div class="col-sm-3 pull-right">
                        <span data-toggle="modal" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</span>
                    </div>
                </div>
                --}}
                <div class="clearfix"></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Advertise Name</th>
                            <th width="600px">Link</th>
                            <th width="150px">Category</th>
                            <th width="90px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advertises as $index => $advertise)
                            <tr>
                                <td class="text-center">{{$advertises->perPage()*($advertises->currentPage()-1) + $index+1}}</td>
                                <td>{{$advertise->name}}</td>
                                <td>{{$advertise->link_url}}</td>
                                <td>{{$advertise->adsCatg->name}}</td>
                                <td>
                                    @if($advertise->status != 'approve')
                                        <i data-toggle="tooltip" title="Approve" class="fa fa-check text-primary text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                            <form action="{{action('Admin\AdvertiseController@changeStatus', $advertise->id)}}" method="POST" hidden>
                                                <input name="status" value="approve" hidden>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </i>
                                    @else
                                        <i data-toggle="tooltip" title="Approve" class="fa fa-check text-primary"></i>
                                    @endif

                                    @if($advertise->status != 'reject')
                                        <i data-toggle="tooltip" title="Rejected" class="fa fa-repeat text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                            <form action="{{action('Admin\AdvertiseController@changeStatus', $advertise->id)}}" method="POST" hidden>
                                                <input name="status" value="reject" hidden>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </i> |
                                    @else
                                        <i data-toggle="tooltip" title="Rejected" class="fa fa-repeat"></i> |
                                    @endif

                                    <a data-toggle="tooltip" title="Edit" href="{{ action('Admin\AdvertiseController@edit', $advertise->id) }}" class="fa fa-pencil-square-o text-success"></a>
                                    <i data-toggle="tooltip" title="Delete" class="fa fa-trash text-danger" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                        <form action="{{action('Admin\AdvertiseController@destroy', $advertise->id)}}" method="POST" hidden>
                                           <input type="hidden" name="_method" value="delete">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
@endsection

