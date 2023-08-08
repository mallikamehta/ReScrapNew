@extends('layout')

@section('content')
    <div class="container" style="padding-top:100px;">
        <div class="row">
            <h2 style="text-align: center;">Cart</h2>
                <div class="col-md-6 offset-3 mt-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sl.No.</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @php
                                //print_r(session('cart'));
                                $i=1; $subtotal=0;
                            @endphp
                            @foreach (session('cart') as $id => $product )
                                <tr ProductId={{ $id }}>
                                    <td>{{ $i }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['category'] }}</td>
                                    <td style="text-align: center;">{{ $product['quantity'] }}</td>
                                    <td>{{ $product['price']*$product['quantity'] }}</td>
                                    <td><a class="product_delete" style="cursor: pointer;"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                 @php 
                                    $i++;  
                                    $subtotal = $subtotal + $product['price']*$product['quantity']; 
                                 @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Total</th>
                                <th colspan="2" style="text-align: right;">Rs. {{ $subtotal }}</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div>
                        <a href="{{ url('order') }}" class="btn btn-success" >Complete Order</a>
                    </div>
                </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //alert('hello');
            $('.product_delete').on('click',function(e) {
                //alert('product delete click');
                e.preventDefault();
                var element = $(this);
                //alert(element.parents("tr").attr('ProductId'));
                //alert(element);
                $.ajax({
                    url:"{{ url('delete-cart-product') }}",
                    type:"POST",
                    data:{
                        _token:'{{ csrf_token() }}',
                        id: element.parents("tr").attr('ProductId')
                    },
                    success: function (retrunDeleteResult) {
                        window.location.reload();
                    }
                });
            });
    
        });
      </script>
    
@endsection
