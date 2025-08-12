<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <title>Limit Water - Inicio</title>
</head>
<body>

    <nav>
        <div class="logo">
            <img src="{{ asset('Img/Logo LimWater.png') }}">
        </div>
        <ul>
            <li>Inicio</li>
            <li>Sobre el sitio</li>
            <li>Aguateros</li>
            <li>Mi cuenta</li>
            <li>Contacto y comentarios</li>
            @if (!session()->has('usuario_id') || !session()->has('rol_id'))
            <li><a href="" class="btn-menu"><i class="fas fa-sign-in-alt"></i> Iniciar sesión / Registrarse</a></li>
            @else
            <li>
                <form action="{{ url('logout') }} " method="POST">
                    @csrf
                    <button type="submit" class="btn-menu"> <i class="fas fa-sign-out-alt"></i> Cerrar Session</button>
                </form>
            </li>
            @endif
        </ul>
    </nav>

    <section class="inicio" id="inicio">
        <div class="inicio-cont">
            <h1>LIMWATER</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis similique eaque harum libero? Impedit sunt temporibus dolore, aliquam, est ipsum ex, rem repellat libero veniam neque odio necessitatibus iusto magnam.</p>
            <button>¡Conocer mas!</button>
        </div>
    </section>

    <section class="sobre-sitio" id="sobre-sitio">
        <div class="sobre-sitio-cont">
            <h1>SOBRE LIMWATER</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus aperiam, quasi aut nostrum veritatis unde porro hic ex libero laudantium itaque perspiciatis minima magni odit consequuntur tempora ullam numquam.</p>
            <div class="sobre-sitio-img">
                <img src="">
                <img src="">
            </div>
        </div>
    </section>


</body>
</html>