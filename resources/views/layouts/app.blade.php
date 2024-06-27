<!DOCTYPE html>
<html lang="pt-br">
<head>
    @vite("resources/css/global.css")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawlist</title>
</head>
<body>
    <header>
        <a href="/">
        <img src="https://www.figma.com/file/I9i7ywKH0gMztD0fOfLxiB/image/2c1d58ef36e1789ff4f15bb7f64137f079d46e7f" alt="">
        </a>
        <a href="/">Brawlist</a>
    </header>
        @yield('conteudo')
    <footer>
        <h1>Feito com 💕 por Tatu do Mal™</h1>
    </footer>
</body>
</html>