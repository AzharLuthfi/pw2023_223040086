<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {

            background-color: brown;
            width: 60px;
            height: 60px;
            font-family: arial;
            text-align: center;        
            border: 1px solid black;
            padding-top: 20px;
            box-sizing: border-box;

            }

        .flex {

            display: flex;
            
            }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="kotak">1</div>
    <div class="flex">
        <div class="kotak">2</div>
        <div class="kotak">2</div>
    </div>

    <div class="flex">
        <div class="kotak">3</div>
        <div class="kotak">3</div>
        <div class="kotak">3</div>
    </div>
</body>
</html>