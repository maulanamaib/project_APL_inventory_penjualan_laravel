@extends('admin.layout.admin')

@section('contentElement')
    <h1 class="m-0 text-dark text-uppercase"><strong>Customer View</strong></h1>
@endsection

@section('rowContent')
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><a href="{{route('adm.setting')}}"><i class="fas fa-cog"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> Profile Settings</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><a href="{{route('painel.userAll')}}"><i class="ion ion-person-add"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">User</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><a href="{{route('purchase.index')}}"><i class="fas fa-shopping-cart"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Cart</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"> <a href="{{route('client.index')}}"><i class="fas fa-users"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Client</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection

@section('content')
    <div class="container py-2 col-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Client</h3>
            </div>
            <div class="card-body">
                <div class="form-group mb-4">
                    <h5><b>Client:</b></h5>
                    <p>{{$cliente->client}}</p>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group mb-4">
                    <h5><b>NPWP:</b></h5>
                    <p>{{$cliente->CPF}}</p>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group mb-4">
                    <h5><b>Identity:</b></h5>
                    <p>{{$cliente->Identity}}</p>
                </div>
                <div class="dropdown-divider"></div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{route('client.index')}}" type="submit" class="btn btn-primary">To go back</a>
            </div>
        </div>
    </div>
@endsection

