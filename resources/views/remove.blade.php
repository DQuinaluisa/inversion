
    @extends('layouts.app')


    @section('content')

    <div class="container">
        <h2  class="text-center">Fomulario de Retiro de Ganancias</h2>
        <br>

        <div class="row">
            <div class="col-md-3 col-sm-12">

            </div>
                 @if(session('status'))
                      <div class="alert alert-success mb-1 mt-1">
                 {{ session('status') }}
                      </div>
                      @endif


            <div class="col-md-6 col-sm-12">
                <div class="card"  >
                    <div class="row">
                        <form style="padding: 5%" action="{{ route('remove') }}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Full Name:</strong>
                                            <input type="text" name="name"   class="form-control   @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <strong>Email:</strong>
                                            <input type="email" name="email"  class="form-control  @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}  </strong>
                                            </span>
                                            @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-12">



                                    <div class="form-group">
                                         <strong>Phone:</strong>

                                            <input type="phone" name="phone" class="form-control  @error('phone') is-invalid @enderror" placeholder="0987456321">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                         <strong>Paypal account name:</strong>
                                            <input type="user_paypal" name="user_paypal" class="form-control  @error('user_paypal') is-invalid @enderror" placeholder="Paypal account name">
                                            @error('user_paypal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <br>

                                 </div>
                                 <div class="text-center">
                                    <button type="submit" style="width: 50%" class="btn btn-primary aling-center ml-3">Enviar</button>
                                 </div>



                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <div class="col-md-3 col-sm-12">

            </div>
        </div>
    </div>
<br>
<br>



    @endsection
