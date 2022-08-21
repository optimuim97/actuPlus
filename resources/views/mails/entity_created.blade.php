@component('mail::message')
# Bienvenue 

Votre mot de passe pour vous connecté a la plateforme "MonTrépor" est le suivant :
{{ $password }}

@component('mail::button', ['url' => '/company/login'])
    Se connecté
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
