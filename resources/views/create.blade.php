<head>
    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
         google.charts.load('current', {'packages':['bar']});
         google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
           var data = google.visualization.arrayToDataTable([
               ['Inversion', 'Al Mes', 'Al Año', 'TOTAL'],
               ['$10',  3, 36, 46.00],
               // ['$15',  0.75,     5.25, 21.00, 252.00],
               // ['$20',  1,        7.00, 28.00, 336.00],
               // ['$25',  1.25,     8.75, 35.00, 420.00]
             ]);


           var options = {
             chart: {
               //title: 'Nombre de la Empresa',
               subtitle: 'Tabla de Inversiones ',
             }
           };

           var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

           chart.draw(data, google.charts.Bar.convertOptions(options));
         }
       </script> --}}
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
                <h2 class="text-center" style="padding-top: 2%">Ya es hora de empezar a construir tus metas</h2>

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
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-6" style="padding-top: 2%">
                {{-- <div id="columnchart_material"  ></div> --}}

                        <div class="card">
                            <h2 class="text-center" style="padding-top: 5%" >Plan Test</h2>
                            <h2 class="text-center" style="padding-top: 5%;"   >$10.00</h2>
                            <br>
                            <p class="text-center" style="margin: 5%">Con el minimo monto de diez dolares, puedes empezar ahorrar ya no dejes ese dinero tranquilo y mejor ponlo a trabajar</p>




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

