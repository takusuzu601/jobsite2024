<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Alpine.js and jQuery</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div x-data="{ count: 0 }" x-ref="counter">
        <h1 x-text="'カウント: ' + count"></h1>
        <button @click="count++">Alpine.js でカウントアップ</button>
    </div>

    <h1>Hello, jQuery!</h1>
    <button id="myButton">Click me!</button>

    <script>
        $(document).ready(function() {
            $('#myButton').click(function() {
                alert('Button clicked!');
            });
        });
    </script>

</body>
</html>
