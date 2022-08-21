@component('mail::message')
# Bienvenue 

Votre mot de passe pour vous connecté a la plateforme "ActuPlus" est le suivant :
{{ $password }}

@component('mail::button', ['url' => '/company/login'])
    Se connecté
@endcomponent

Merci 😉,<br>
{{ config('app.name') }}
@endcomponent
