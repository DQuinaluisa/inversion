<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/money.ico') }}">
       <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=USD"></script>
       <!-- Set up a container element for the button -->
       <div id="paypal-button-container"></div>
       <script>



         paypal.Buttons({
           // Sets up the transaction when a payment button is clicked
           createOrder: (data, actions) => {
             return actions.order.create({
               purchase_units: [{
                 amount: {
                   value: '77.44' // Can also reference a variable or function
                 }
               }]
             });
           },
           // Finalize the transaction after payer approval
           onApprove: (data, actions) => {
             return actions.order.capture(

             ).then(function(orderData) {
               // Successful capture! For dev/demo purposes:
               console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
               const transaction = orderData.purchase_units[0].payments.captures[0];
               alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
               // When ready to go live, remove the alert and show a success message within this page. For example:
               // const element = document.getElementById('paypal-button-container');
               // element.innerHTML = '<h3>Thank you for your payment!</h3>';
               // Or go to another URL:  actions.redirect('thank_you.html');
             });
           }
         }).render('#paypal-button-container');
       </script>

</head>

@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2 class="text-center" style="padding-top: 2%">Ya es hora de empezar a construir tus metas!!!</h2>

            </div>
            <div class="col-md-6 col-sm-12  float-left" >

             <a style="position: relative; left:50%" href="{{ route('remove') }}" class="btn btn-success ">Retirar Ganancias</a> -



            </div>

        </div>



    </div>
    <br>
    <h3 class="text-center">Tus Planes Comprados</h3>
    <div class="container-fluid" style="padding-top: 2%;" >
        <div class="row">

            <div class="col-md-6" style="padding-top: 2%">
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Plan</th>
                                <th>Pago</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $order)
                                    <tr>
                                        <td></td>
                                        <td> {{ $order->name }} </td>
                                        <td> {{ $order->email }} </td>
                                        <td>Plan Test</td>
                                        <td> {{ $order->status }} </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div   class="d-flex justify-content-center">
                        {!! $orders->links() !!}
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-6" style="padding-top: 2%">
                {{-- <div id="columnchart_material"  ></div> --}}

                        <div class="card">
                            <h2 class="text-center" style="padding-top: 5%" >Plan Test</h2>
                            <h2 class="text-center" style="padding-top: 5%;"   >$50.00</h2>
                            <br>
                            <p class="text-center" style="margin: 5%">
                            No necesitas ser un experto para invertir tu dinero
                            Invierte desde 50 dolares realizando aportes periodicos.
                        </p>




                                <a type="submit" class="btn btn-primary"
                                href="{{ url('/paypal/pay') }}"
                                style="margin: 5%"
                                >Pagar</a>




                            <br>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<br>

@endsection

