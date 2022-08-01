<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/money.ico') }}">
    <link rel="icon" href="{{ URL::asset('img/money.ico') }}" type="image/x-icon"/>

    <title> Money Goals</title>


</head>
<body>
    <x-menu>
            <div class="container-fluid cuadro">
                <div class="row">
                    <div class="col-md-6 col-sm-12 "  >
                    <br>
                    <br>
                        <h2 class="titulo" >Ya es hora de empezar a construir tus metas!!!</h2>

                        <p class="texto">
                            Invierte en los mejores fondos de inversión y cumple todos tus sueños.
                        </p>
                        <p>
                            No necesitas ser un experto para invertir tu dinero. Ahora hazlo desde <b>MONEYGOALS</b>
                            y se parte de nuestro equipo de fondos de inversión.</p>
                    </div>

                    <div class="col-md-6 col-sm-12 ">
                      <img src="{{ URL('img/foto.png') }}" style="width: 80%; "  alt="">

                    </div>
                </div>
            </div>
            <section id="plan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center crece" >Con nosotros tu dinero CRECE!!!</h2>

                    </div>
                    <hr class="lineas">

                </div>
            </div>

            <div class="container" id="cards">
                <div class="row">
                    <div class="col-md-4 col-sm-12"  style="padding-top: 4%">
                        <div class="card cuadros">
                            <img class="money" src="{{ URL('img/botones/money.png') }}" alt="">
                            <h3 class="text-center ti1"> Con un pequeño Monto </h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12"  style="padding-top: 4%">
                        <div class="card cuadros">
                            <img class="money" src="{{ URL('img/botones/reloj.png') }}" alt="">
                            <h3 class="text-center ti1"> Tu dinero se Multiplicara </h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12"  style="padding-top: 4%">
                        <div class="card cuadros">
                            <img class="money" src="{{ URL('img/botones/bolsa.png') }}" alt="">
                            <h3 class="text-center ti1"> Retira tus Ganancias </h3>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <br>
            <br>
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center crece" >Quienes Somos</h2>

                        </div>
                        <hr class="lineas">

                    </div>
                </div>
                <div class="quien " id="info">
                    <!--<div class="curvas">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#f3f4f5" fill-opacity="1" d="M0,128L30,149.3C60,171,120,213,180,240C240,267,300,277,360,277.3C420,277,480,267,540,224C600,181,660,107,720,106.7C780,107,840,181,900,192C960,203,1020,149,1080,122.7C1140,96,1200,96,1260,106.7C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
                          </svg>
                    </div>-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center empresa" > Money Goals</h2>
                                <br>
                                <br>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <p>
                                   Somos una organizacion la cual se basa en las inversiones a largo plazo.
                                   Nuesto objetivo es poder ayudar a crecer tu dinero de la mejor forma, mediante un interes a largo plazo tu pequeño
                                   monto pasara a incrementar.
                                </p>
                            </div>
                            {{-- <div class="col-md-6 col-sm-12">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, dignissimos provident corrupti rerum inventore eum perspiciatis alias ea sunt accusantium suscipit neque laborum assumenda veniam? Nulla at exercitationem dicta nihil?
                                </p>
                            </div> --}}
                        </div>
                    </div>

                    <div class="curvas">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#FFFFFF" fill-opacity="1" d="M0,224L16,229.3C32,235,64,245,96,250.7C128,256,160,256,192,234.7C224,213,256,171,288,176C320,181,352,235,384,266.7C416,299,448,309,480,261.3C512,213,544,107,576,96C608,85,640,171,672,181.3C704,192,736,128,768,112C800,96,832,128,864,117.3C896,107,928,53,960,64C992,75,1024,149,1056,160C1088,171,1120,117,1152,85.3C1184,53,1216,43,1248,85.3C1280,128,1312,224,1344,261.3C1376,299,1408,277,1424,266.7L1440,256L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
                          </svg>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center crece" >¿Cómo Funciona? 
                            </h2>
                                <h1 class="text-center " ></h1>

                        </div>
                        <hr class="lineas">
                    </div>
                </div>
                <div class="container"  >
                    <div class="row">

                        <div class="col-md-12 ">
                            <div class="card ahorrar">
                                 <div class="row">

                                        <div class="col-md-6 col-sm-12">

                                            
                                            <p class="text-center text1">Invertir a través de <b>MONEYGOALS</b> es posible para cualquier persona
                                        y para cualquier bolsillo, sin comisiones al realizar un deposito o retirar fondos</p>
                                        <p class="text-center text1">Es fácil comenzar con pequeñas cantidades de dinero. Realizando una inversión mínima recibiras grandes beneficios.</p>
                                        <p class="text-center text1">Todos tenemos que empezar por algún lugar. 
                                                Déjanos ayudarte a empezar tu viaje en la inversión. 
                                            </p>
                                        <h2 class="text-center tituloMetas"><b>Invierte con nosotros</b></h2>

                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="img1" src="{{ URL('img/inversion4.png') }}" alt="">
                                        </div>
                                </div>

                            </div>
                        </div>


                        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center crece" >Construye tu Futuro con Nosotros</h2>
                                <h1 class="text-center " ></h1>

                        </div>
                        <hr class="lineas">
                    </div>
                </div>
                <div class="container"  >
                    <div class="row">

                        <div class="col-md-12 ">
                            <div class="card ahorrar">
                                 <div class="row">

                                        <div class="col-md-6 col-sm-12">
                                            <p class="text-center text1"> Es el mejor momento para empezar a ahorrar, tanto para tí como para tu familia.
                                                Haz que tu dinero crezca con el tiempo y tus ganacias sean mayores. </p>

                                                <p class="text-center text1">Nuestros planes de inversión estan pensados en ti, 
                                                optimiza tus ahorros y recibes actractivos rendimientos.</p>
                                                <h2 class="text-center tituloMetas"><b>Ya es tiempo para AHORRAR </b></h2>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="img1" src="{{ URL('img/ahorrar.png') }}" alt="">
                                        </div>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center crece" >Seguridad y Soporte</h2>
                                <h1 class="text-center " ></h1>

                        </div>

                        <div class="col-md-12 " style="padding-top: 2%">
                            <div class="card sueno">
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <img class="img1" src="{{ URL('img/guardar.png') }}" alt="">
                                    </div>
                                        <div class="col-md-6 col-sm-12">

                                            <h2 class="text-center tituloMetas"><b>Tu dinero esta SEGURO </b></h2>
                                            <p class="text-center text1"> Todos nuestros servicios reciben los mismos
                                                 servicios de calidad, la misma ejecución y el mismo nivel de soporte, 
                                                 manejados por expertos en materia de inversiones y análisis de riesgos
                                                 en inversiones.
                                            </p>

                                            <p class="text-center text1"> A veces invertir puede ser complicado y confuso. 
                                                <b>MONEYGOALS</b> acaba con las dificultades de invertir gracias a
                                                 herramientas intuitivas que aportan eficiencia y simplicidad.
                                            </p>

                                        </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 "  style="padding-top: 2%">
                            <div class="card metas">
                                 <div class="row">

                                        <div class="col-md-6 col-sm-12">

                                            <h2 class="text-center tituloMetas"><b>Cumple tus METAS</b></h2>
                                            <p class="text-center text1">Todos queremos hacer nuestros sueños realidad
                                                para lograrlo se parte de nuestro equipo de trabajo.
                                            </p>
                                            <p class="text-center text1">Sacá el máximo provecho de tu cuenta,
                                                no pierdas la oportunidad de potenciar tu dinero cumple tus sueños con <b>MONEYGOALS.</b>
                                            </p>
                                            

                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="img1" src="{{ URL('img/construye.png') }}" alt="">
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </section>



            <section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center crece" >Nuestros Planes </h2>
                                <h1 class="text-center "></h1>
                        </div>
                        <hr class="lineas">
                    </div>
                </div>

                {{-- <div class="cuadroPlan" >



                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12" style="padding-top: 5% ">
                                <div class="card card1">
                                    <h2 class="tituloPlan">Plan Mico</h2>
                                    <p class="text-center descripcionPlan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta fugiat nihil est, earum cumque vero quas eum expedita tempora itaque doloremque in dignissimos facilis qui explicabo, commodi sunt quasi.</p>
                                    <button class="btn btn-primary boton"  >Adquirir Plan</button>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12" style="padding-top: 5% ">
                                <div class="card card2">
                                    <h2 class="tituloPlan">Plan Mico</h2>
                                    <p class="text-center descripcionPlan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta fugiat nihil est, earum cumque vero quas eum expedita tempora itaque doloremque in dignissimos facilis qui explicabo, commodi sunt quasi.</p>
                                    <button class="btn btn-primary boton"  >Adquirir Plan</button>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12" style="padding-top: 5% ">
                                <div class="card card3">
                                    <h2 class="tituloPlan">Plan Mico</h2>
                                    <p class="text-center descripcionPlan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta fugiat nihil est, earum cumque vero quas eum expedita tempora itaque doloremque in dignissimos facilis qui explicabo, commodi sunt quasi.</p>
                                    <button class="btn btn-primary boton"  >Adquirir Plan</button>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12" style="padding-top: 5% ">
                                <div class="card card4">
                                    <h2 class="tituloPlan">Plan Mico</h2>
                                    <p class="text-center descripcionPlan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta fugiat nihil est, earum cumque vero quas eum expedita tempora itaque doloremque in dignissimos facilis qui explicabo, commodi sunt quasi.</p>
                                    <button class="btn btn-primary boton"  >Adquirir Plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div> --}}


                <div class="cuadroPlan">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-12" style="padding-top: 2% ">

                            </div>
                            <div class="col-md-6 col-sm-12" style="padding-top: 2% ">
                               <div class="card card1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <h2 class="compraPlan">Plan Test</h2>
                                            <h1 class="text-center" >$ 10.00</h1>
                                        </div>
                                        <div class="col-md-6 col-sm-12" style="padding-top: 2%; ">
                                            <p class="descripcionPlan">Con el minimo monto de diez dolares, puedes empezar ahorrar ya no dejes ese dinero tranquilo y mejor ponlo a trabajar</p>
                                            <a class="btn btn-primary boton" href="{{ route('register') }}" >Adquirir Plan</a>
                                        </div>
                                    </div>
                                    <br>
                               </div>
                            </div>
                            <div class="col-md-3 col-sm-12">

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

            </section>


            <section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center crece" >Nuestros Planes </h2>
                                <h1 class="text-center "> Money Goals</h1>
                        </div>
                        <hr class="lineas">
                    </div>
                </div>

                <div class="container">
                    <div class="row" >

                            <div class="col-md-3" >

                            </div>
                            <div class="col-md-6" >
                                <div class="tables" id="columnchart_material"  ></div>
                            </div>
                            <div class="col-md-3" >

                            </div>
                            <div class="col-md-12">
                                {{-- <p class="infoPlan">Nuesto pan </p> --}}
                            </div>


                    </div>
                </div>
            </section>





    </x-menu>
</body>
</html>
