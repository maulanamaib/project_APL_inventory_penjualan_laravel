@extends('admin.layout.PdfLayout')

<h4 class="m-0 text-dark text-uppercase text-center mb-5"><strong>Purchase Made Successfully</strong></h4>

@section('content')
    <div class="row card card-info mt-5">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Seller</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Units</th>
                    <th>Total</th>
                    <th>Situation</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$compra->id}}</td>
                        <td>{{$compra->client}}</td>
                        <td>{{$compra->user}}</td>
                        <td>{{$compra->product}}</td>
                        <td>{{$compra->price}}</td>
                        <td>{{$compra->unit}}</td>
                        <td>{{$compra->total}}</td>
                        <td><span class="badge badge-success">Successful</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="dropdown-divider"></div>
        </div>
        <div class="dropdown-divider"></div>
    </div>

    <a href="/compra">Back</a>

@endsection
    {{date('d/m/y H:i', strtotime($compra->created_at))}}
