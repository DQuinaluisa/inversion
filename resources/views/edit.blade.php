
    @extends('layouts.app')


    @section('content')

    <div class="container">
        <h2  class="text-center">Fomulario de Pago de Ganancias</h2>
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
                        <form style="padding: 5%" action="{{ route('edit', $remove->id) }}" method="POST" >
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <strong>Full Name:</strong>
                                            <input readonly type="text" name="name"   class="form-control   @error('name') is-invalid @enderror" value="{{ $remove->name }}">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <strong>CODE:</strong>
                                            <input readonly type="text" name="user_id"   class="form-control " value="{{ $remove->user_id }}">


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <strong>Email:</strong>
                                            <input readonly type="email" name="email"  class="form-control  @error('email') is-invalid @enderror" value="{{ $remove->email }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}  </strong>
                                            </span>
                                            @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">



                                    <div class="form-group">
                                         <strong>Phone:</strong>

                                            <input  type="phone" name="phone" class="form-control  @error('phone') is-invalid @enderror" value="{{ $remove->phone }}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                         <strong>Paypal account name:</strong>
                                            <input readonly type="user_paypal" name="user_paypal" class="form-control  @error('user_paypal') is-invalid @enderror" value="{{ $remove->user_paypal }}">
                                            @error('user_paypal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <br>

                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                         <strong>Status:</strong>
                                            <input  type="status" name="status" class="form-control  @error('status') is-invalid @enderror" value="{{ $remove->status }}">
                                            @error('status')
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
