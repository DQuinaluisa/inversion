
    @extends('layouts.app')


    @section('content')

    <style>
          .pagination{
            float: right;
            margin-top: 10px;
        }
    </style>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h2 class="text-center crece" >Pendientes de Pago</h2>
                            <h1 class="text-center " >Money Goals


                    </div>

                </div>
            </div>
        </div>

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        </div>
        @endif

        <div class="container-fluid" style="padding-top: 1%;" >
            <div class="row">
                <div class="col-md-1 col-sm-12">

                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="card" >
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>

                                    <th>Formulario del pedido</th>
                                    <th>Formulario del pedido</th>
                                    <th>Formulario del pedido</th>
                                    <th>PayPal</th>
                                    <th>Estado</th>
                                    <th>Dueño de la Cuenta</th>
                                    <th>Dueño de la Cuenta</th>
                                    <th>Dueño de la Cuenta</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($remove as $item)
                                        <tr>
                                            <td></td>

                                            <td> {{ $item->name_form }} </td>
                                            <td> {{ $item->email_form }} </td>
                                            <td> {{ $item->tel_form }} </td>
                                            <td> {{ $item->user_paypal }} </td>
                                            @if ($item->payment_status == "Paid Out"  )
                                                <td style="background: rgb(62, 201, 62); color:white"> {{ $item->payment_status }} </td>
                                            @else
                                                <td> {{ $item->payment_status }} </td>
                                            @endif


                                            <td> {{ $item->name_profile }} </td>
                                            <td> {{ $item->email_profile }} </td>
                                            <td> {{ $item->tel_profile }} </td>
                                            @if ($item->payment_status == "Paid Out")
                                            <td title="{{ $item->id_registered }}" >
                                                <a class="btn btn-success"  >Pagado</a>
                                            </td>
                                            @else
                                            <td title="{{ $item->id_registered }}" >
                                                <a class="btn btn-warning" href="{{ url('edit', $item->id_remove) }}" >Pagar</a>
                                            </td>
                                            @endif

                                        </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div   class="d-flex justify-content-center">
                            {!! $remove->links() !!}
                        </div>


                    </div>

                </div>

                <div class="col-md-1 col-sm-12">

                </div>
            </div>
        </div>
        <br>
        <br>



        @endsection
