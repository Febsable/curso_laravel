@component('mail::message')
# Bienvenido a nuestra Web

Para acceder a nuestro site necesita verificar su email. Por favor presione el siguiente botón para verificar su correo.

@component('mail::button', ['url' => ''])
Texto Botón
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
