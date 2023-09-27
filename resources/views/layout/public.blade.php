<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield("title")</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>
<body>
    

    {{-- ATTENZIONE SE CI SONO PROBLEMI NELLA VISIONE DELLE CARD E' PERCHE' HO CREATO UNA COLONNA PER INSERIRE LE IMAGINI DELLE CARD --}}
    @yield('homeContent')
    
    
</body>
</html>