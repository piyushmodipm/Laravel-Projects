<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .flex{
            margin:40px;
            padding: 10px;
            border-bottom: 1px solid rgba(202, 238, 249, 0.985);
        }
        .Blog{
          height: 62px; 
          margin: 10px 40px;
          overflow: hidden;
          padding: 10px;
          border-radius: 10px;
        }
    </style>
</head>
<body>
    <ul class="flex" >
        <li class="mr-6">
          <a class="text-blue-500 hover:text-blue-800" href="/">HOME</a>
        </li>
        <li class="mr-6">
          <a class="text-blue-500 hover:text-blue-800" href="/Blog">BLOG</a>
        </li>
      </ul>
      <a href="/Blog/0">
      <div class="Blog bg-indigo-200 shadow-md hover:text-blue-800">
          <?php
            $parsedown=new Parsedown();
            $file=fopen(filename:"blogs/first.md",mode:'r');
            echo $parsedown->text(fread($file,filesize(filename:"blogs/first.md")));
            ?>
      </div></a>
      <a href="/Blog/1">
      <div class="Blog bg-indigo-100 shadow-md hover:text-blue-800">
        <?php
          $parsedown=new Parsedown();
          $file=fopen(filename:'blogs\second.md',mode:'r');
          echo $parsedown->text(fread($file,filesize(filename:'blogs\second.md')));
          ?>
    </div>
      </a>
      <a href="/Blog/2">
    <div class="Blog bg-indigo-200 shadow-md hover:text-blue-800">
        <?php
          $parsedown=new Parsedown();
          $file=fopen(filename:'blogs\third.md',mode:'r');
          echo $parsedown->text(fread($file,filesize(filename:'blogs\third.md')));
          ?>
    </div>
      </a>
    <a href="/Blog/3">
    <div class="Blog bg-indigo-100 shadow-md hover:text-blue-800">
        <?php
          $parsedown=new Parsedown();
          $file=fopen(filename:'blogs\fourth.md',mode:'r');
          echo $parsedown->text(fread($file,filesize(filename:'blogs\fourth.md')));
          ?>
    </div>
    </a>
    <a href="/Blog/4">
    <div class="Blog bg-indigo-200 shadow-md hover:text-blue-800">
      <?php
        $parsedown=new Parsedown();
        $file=fopen(filename:'blogs\fifth.md',mode:'r');
        echo $parsedown->text(fread($file,filesize(filename:'blogs\fifth.md')));
        ?>
  </div>
  </a>
</body>
</html><?php /**PATH C:\Users\piyush modi\WittyPen\resources\views/Home.blade.php ENDPATH**/ ?>