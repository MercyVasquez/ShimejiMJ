<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="{{asset('css/carrito.css')}}">
    <link rel="stylesheet" href="{{asset('css/Esqueleto.css')}}">
    <link rel="stylesheet" href="{{asset('css/Normalize.css')}}">
</head>
<body>
<header id="header" class="header">
        <body>
        <div class="container">
            <div class="row">

                <div class="four columns">
                    <img src="img/logo.png" alt="" id="logo">
                </div>

                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="img/cart.png" alt="" id="img-carrito">
                            <div id="carrito">
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="four columns">
                        <ul class="navct">
                            <li class="four columns "><a href="#">Inicio</a></li>
                            <li class="four columns "><a href="#">Sobre</a></li>
                            <li class="four columns "><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header id="header" class="header">
        <body>
        <div class="container">
            <div class="row">

                <div class="four columns">
                    <img src="img/logo.png" alt="" id="logo">
                </div>

                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="img/cart.png" alt="" id="img-carrito">
                            <div id="carrito">
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="four columns">
                        <ul class="navct">
                            <li class="four columns "><a href="#">Inicio</a></li>
                            <li class="four columns "><a href="#">Sobre</a></li>
                            <li class="four columns "><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </header>
<div id="lista-cafe" class="container">
    <h1 id="encabezado" class="encabezado">Mangas disponibles</h1>
    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="" class="u-full-width">
                <div class="info-card">
                    <h4>Yellow Tanabe</h4>
                    <p>Especial navidad</p>
                    <img src="" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/bizcocho.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Bizcocho de vainilla</h4>
                    <p>Básico</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/brownies.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Brownies Oreo</h4>
                    <p>Extra dulce</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
    </div><!--.row-->

    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/brazo_gitano.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Brazo gitano</h4>
                    <p>Básico</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/cupcakes.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Christmas cupcakes</h4>
                    <p>Especial navidad</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/tres_leches.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Tres leches</h4>
                    <p>Básico</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
    </div><!--.row-->

    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/brwoniestoppings.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Brownies toppings</h4>
                    <p>Extra dulce</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/pinkcupcakes.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Pink cupkes</h4>
                    <p>Extra dulce</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/heartcoockies.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Pink hearts cookies</h4>
                    <p>Básico</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
    </div><!--.row-->

    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/letteringcoockies.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Lettering cookies</h4>
                    <p>Extra dulce</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/mixedcake.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Mixed cake</h4>
                    <p>Extra dulce</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/butterflycupcakes.jpeg" class="u-full-width">
                <div class="info-card">
                    <h4>Butterfly cupcakes</h4>
                    <p>Extra dulce</p>
                    <img src="img/estrellas.png" >
                    <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                    <a href="#" 
                    class="u-full-width button-primary button input agregar-carrito                        
                    ">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
    </div><!--.row-->
</div>
</body>
<script src="js/app.js"></script>
</html>
</body>
</html>