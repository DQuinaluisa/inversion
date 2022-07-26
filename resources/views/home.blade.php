

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @extends('layouts.app')

    @section('content')

        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 col-sm-12 "  >
                    <h2 class="text-center" >Bienvenido {{ Auth::user()->name }},</h2>
                        <h3 class="text-center"> Ya es hora de empezar a construir tus metas</h3>
                    <p class="text-center"  >
                        Invierte con nosotros y cumple todos tus sueños
                    </p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-sm-12"">

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <h2 class="text-center" style="padding-top: 5%" >Plan Micro</h2>
                        <h2 class="text-center" style="padding-top: 5%; display:none" >$10.00</h2>
                        <br>
                        <p class="text-center" style="margin: 5%">Con el minimo monto de diez dolares, puedes empezar ahorrar ya no dejes ese dinero tranquilo y mejor ponlo a trabajar</p>

                            <h2 for="product-1" class="text-center"> $10.00</h2>
                            <button type="submit" class="btn btn-primary"
                            id="product-1" name="product"
                            onclick="handleClick(this)"
                            value="product-1"
                            style="margin: 5%"
                            >Pagar</button>
                        <br>
                    </div>

                </div>
                <div class="col-md-3 col-sm-12"">

                </div>
            </div>

        </div>


        <br>
        <br>



        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">

                </div>
                <div class="col-md-6 col-sm-12">
                    <div id="paypal-button-container">

                    </div>

                        <script  src="https://www.paypal.com/sdk/js?client-id=AeRnnp3HSVjl7S0JyzlpxsYHdDvQyil0uV6p6fKGvHsLdb4ChBhMLcUrcVWtJ9BH86ZrXcuF5D2og_4n&currency=USD&vault=true"></script>

                    <!-- Include the PayPal JavaScript SDK -->



                    <script>

                        function handleClick(radioBtn) {
                            productValue = radioBtn.value;
                            //console.log(productValue);
                            document.getElementById('paypal-button-container').style.display =
                            'block';
                        }


                        // Render the PayPal button into #paypal-button-container
                        paypal.Buttons({

                            // Call your server to set up the transaction
                            createOrder: function(data, actions) {
                                return fetch('/api/paypal/order/create/', {
                                    method: 'post',

                                    body:JSON.stringify({
                                        "value":productValue
                                    })
                                }).then(function(res) {
                                    return res.json();
                                    console.log("hola");
                                }).then(function(orderData) {
                                    return orderData.id;
                                    console.log("hola");
                                });
                            },

                            // Call your server to finalize the transaction
                            onApprove: function(data, actions) {
                                return fetch('/api/paypal/order/capture/', {
                                    method: 'post',
                                    body:JSON.stringify({
                                        "orderId" : data.orderID
                                    })
                                }).then(function(res) {
                                    return res.json();
                                }).then(function(orderData) {
                                    // Three cases to handle:
                                    //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                                    //   (2) Other non-recoverable errors -> Show a failure message
                                    //   (3) Successful transaction -> Show confirmation or thank you

                                    // This example reads a v2/checkout/orders capture response, propagated from the server
                                    // You could use a different API or structure for your 'orderData'
                                    var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                                    if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                                        return actions.restart(); // Recoverable state, per:
                                        // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                                    }

                                    if (errorDetail) {
                                        var msg = 'Sorry, your transaction could not be processed.';
                                        if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                                        if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                                        return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                                    }

                                    // Successful capture! For demo purposes:
                                    //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                    var transaction = orderData.purchase_units[0].payments.captures[0];
                                    //alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                                    // Replace the above to show a success message within this page, e.g.
                                    const element = document.getElementById('paypal-button-container');
                                    element.innerHTML = '';
                                    element.innerHTML = '<h3 class="text-center">¡Gracias por tu pago!</h3>';
                                    // Or go to another URL:  actions.redirect('thank_you.html');
                                });
                            }

                        }).render('#paypal-button-container');
                    </script>
                </div>
                <div class="col-md-3 col-sm-12">

                </div>
            </div>
        </div>

    @endsection



</body>
</html>
