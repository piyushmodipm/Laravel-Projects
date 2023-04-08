<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple MARKDOWN BLOG</title>
    
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .flex{
            padding: 50px 30px 20px 50px;
            margin:0px;
            font-size: large;
            border-bottom: 1px solid rgba(202, 238, 249, 0.985);

        }
        .a{
            /* background-color: black; */
            /* color: white; */
            font-size:larger;
            margin:20px 40px;
            padding: 10px 20px 50px 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="flex mr-6 bg-blue-100">
        SIMPLE BLOG SITE
    </nav>
    <div class="a from-red-400 bg-blue-200">
        <?php
// $path = require_once __DIR__.'\..\resources\blogs';

    $parsedown=new Parsedown();
    switch ($v){
        case 0:
        $path='blogs\first.md';
        break;
        case 1:
        $path='blogs\second.md';
        break;
        case 2:
        $path='blogs\third.md';
        break;
        case 3:
        $path='blogs\fourth.md';
        break;
        case 4:
        $path='blogs\fifth.md';
        break;        
        default:
           echo "error no blog found";
            break;
    }
    $file=fopen(filename:$path,mode:'r');
        echo $parsedown->text(fread($file,filesize(filename:$path)));
    ?>
    </div>
    
</body>
</html><?php /**PATH F:\C ka Data\Desktop\WittyPen\resources\views/Blog.blade.php ENDPATH**/ ?>