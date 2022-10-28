<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taller 2 - Linux</title>
	<meta name="author" content="Diego Ojeda">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Linux Webmin</h1>
        </a>
    </header>

    <section class="max-w-lg mx-auto my-8 rounded-lg shadow-2xl">
        <div class="border border-blue-400 border-2 rounded p-3 pt-6 bg-blue-200 relative my-2">
            <div class="absolute left-0 top-0 px-2 bg-blue-400 font-semibold text-gray-800 rounded-br text-sm">INFO:</div>
            <p class="text-gray-600 text-xs text-justify pt-2">Este sitio esta desarrollado para comprobar los servicios instalados en webmin, para el paso 5 - Administrando servicios en GNU/Linux la tematica 2 del Diplomado en Linux</p>
        </div>
    </section>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-10 my-2 rounded-lg shadow-2xl">
        <section>
            <p class="font-bold text-center text-2xl">Registro</p>
        </section>
        <section class="mt-4">
            <form class="flex flex-col" method="POST" action="#">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nombres">Nombres</label>
                    <input type="text" id="nombres" name="nombres" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Correo</label>
                    <input type="email" id="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">Diego Alonso Ojeda Medina</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">UNAD 2022</a>
    </footer>
</body>
</html>