<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>CV</title>
</head>
<body>
<h1 class="head" style="text-align: center;color: darkblue">Curriculum<img src="img/c.jpg">Vitae</h1>

<ul class="nav">
    <li><i class="fa fa-phone"></i> Mobile:07732656385</li>
    <li><i class="fa fa-envelope"></i> E-mile:mohham24895@gmail.com</li>
    <li><i class="fa fa-facebook-square"></i> Mohamed Hamid</li>

</ul>

<h1 style="text-align: center;color: maroon;">Mohamed Hamid Raddam</h1>

<div class="logo">


    <img style="text-align: right" src="img/s.jpg">

</div>
<div class="cv">


    <h1 style="color: darkblue"> Personal Information: </h1>
    <h3>



<?php
        $tasks =[
        ['name'=>'name','age'=>'mohammed hamid'],
        ['name'=>'Date of Birth','age'=>'1995\8\24'],
        ['name'=>'Place of Birth','age'=>'Baghdad'],
        ['name'=>'Address','age'=>'Iraq/Baghdad(alsydea )']
        ]
        ?>

  
        <?php foreach ($tasks as $item): ?>

                    <?php echo $item['name'] . ":" . $item['age'] . "<br>"; ?>


            <?php endforeach; ?>

    </h3>


    <h1 style="color: darkblue"> Education</h1>
    <h3>
        Name of University: University of Technology<br>
        Major : Computer Science<br>
        Minor : Information System<br>
        Year : 2016 -2017</h3>
    <h1 style="color: darkblue"> Experience</h1>
    <h3> • I work on office program
        Word – excel – power point -
        C# - C++ - HTML-CSS-SQL<br>


        • I speak English and (writing and reading)<br>
        • I worked in a company accountant Altaco Trading aluminum<br>


        • I worked in a factory specialized industry and for sweets and pastries and cake
    </h3>


</div>


</body>
</html>