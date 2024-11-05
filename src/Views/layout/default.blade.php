<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? APP_NAME }}</title>
    <style>
        :root {
            --light-screen: #0000003d;
            --dark-screen: #ffffff3d;
            --font-family: 'Jetbrains Mono', monospace;
            --color-bg-effect: white;
            --blendmode-effect: difference;
            --bg-blur: 0px;
            color: #c5c5c5;
        }
        body {
            background-color: #282533;
            font-family: var(--font-family);
            font-optical-sizing: auto;

            -webkit-font-smoothing: antialiased;
            overflow-x: hidden
        }
        body:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-size: auto 100%;
            pointer-events: none;
            background-image: repeating-linear-gradient(transparent, transparent 2px, var(--light-screen) 3px);
        }
    </style>
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/main.js"></script>
</head>
<body>
    @yield('body')
</body>
</html>