<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 col-sm-12 "  >
                <h2 class="text-center" >Ya es hora de empezar a construir tus metas</h2>

                <p class="text-center" >
                    Invierte con nosotros y cumple todos tus sueños
                </p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <h2 class="text-center" style="padding-top: 5%" >Plan Micro</h2>
                    <h2 class="text-center" style="padding-top: 5%; display:none" >$10.00</h2>
                    <br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde ea blanditiis rem omnis laudantium! Vitae cumque aut ducimus tempora consectetur excepturi provident exercitationem! In dolores molestiae tempora nulla porro esse?</p>

                        <label for="product-1" class="text-center">Plan 1 = $10.00</label>
                        <button type="submit" class="btn btn-primary"
                        id="product-1" name="product"
                        onclick="handleClick(this)"
                        value="product-1"
                        style="margin: 5%"
                        >Pagar</button>
                    <br>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">
        {{ Auth::user()->name }}
    </div>

    <br>
    <br>


</body>
</html>
