
    @extends('layouts.app')


    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h2 class="text-center crece" >Miembros Registrados </h2>
                            <h1 class="text-center " >Money Goals
                            </h1>

                    </div>
                    <hr class="lineas">
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 4%;" >
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                        <tr>
                                            <td></td>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->created_at->format('d/m/Y') }} </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $users->links() !!}
                        </div>

                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
        <br>
        <br>


        @endsection
