@extends('admin.layout.admin')

@section('contentElement')
    <h1 class="m-0 text-dark text-uppercase"><strong>Shopping area</strong></h1>
@endsection

@section('content')
    <div class="container">
        <div class="card-header mt-4">
            <h3 class="text-center"><b>{{$usuari->name}}</b></h3>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"><b>Cart</b></h3>
            </div>
            <!-- /.card-header -->
            <form action="{{route('purchase.store')}}" method="post">
                @csrf
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: '{{$error}}',
                            })</script>
                    @endforeach
                @endif
                <div class="card-body">
                    <div class="row">


                        <div class="col-sm-5" data-select2-id="53">
                            <div class="form-group mb-5 mt-2">
                                <label>Client</label>
                                <select class="form-control" name="cliente" required>
                                    <option value="">--Select the Client--</option>
                                    @if(isset($cliente))
                                        @foreach($cliente as $pr)
                                            <option>{{$pr->id}} - {{$pr->client}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                                <div class="form-group mt-5 ">
                                    <label>Product</label>
                                    <select class="form-control" name="produto" required>
                                        <option value="">--Select the Product--</option>
                                        @if(isset($produto))
                                            @foreach($produto as $p)
                                                <option class="text-capitalize" value={{$p->id}}>{{$p->id}} - {{$p->name}} | Rp {{$p->price}} | Stock {{$p->stock}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                            
                                <div class="form-group mt-5 ">
                                    <label>Units</label>
                                    <input type="number" class="form-control" required name="unit" >
                                </div>

                                <div class="mt-5">
                                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                                        <li>
                                            <span class="handle ui-sortable-handle">
                                              <i class="fas fa-ellipsis-v"></i>
                                              <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="check" name="todo6" id="todoCheck6" required>
                                                <label for="todoCheck6"></label>
                                            </div>
                                            <span class="text">I accept all terms of the Commitment</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <div class="col-sm-5">
                            <div class="col-5">
                                <img src="{{asset('imagens/carrinho.jpeg')}}" alt="sd">
                            </div>
                        </div>

                        <div class="container">
                            <button class="btn btn-success">checkout</button>
                        </div>
                    </div>
                        <!-- /.col -->

                </div>
                    <!-- /.row -->
{{--                </div>--}}
          </form>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

