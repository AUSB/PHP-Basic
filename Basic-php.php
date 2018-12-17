<!DOCTYPE html>
<html>
<head>
  <title> PHP Introduction </title>
  <meta charset="utf-8">
  <!-- Using an embedded CSS -->
  <style>
    body { font-family: sans-serif;
           background-color: white;}
    .task {
      margin: 20px;
        border: black 3px dotted;
        background-color: silver;
      }
      .formula /* For task 1 */
      {
        font-family: monospace;
        font-weight: bold;
        font-size: 1.6em;
        color: blue;
      }
      .task p {
        padding-left: 10px;
        padding-bottom: 0px;
      }
      table, th, td {   /* For task 3 & 4 */
        table-layout: fixed;
        text-align: center;
        width: 30%;
        border: 1px solid;
        border-collapse: collapse;
      }
    }
  </style>

</head>
<body>
  <?php    # This code only needs to be used once and will provide some help in error reporting.
           # If your webpage is completely empty, please try the VirtualBox commandline PHP.
           # Alternatively you can try: https://tinyurl.com/phpsandbox

    ini_set('display_errors', 1); # only need to call these functions
    error_reporting(E_ALL);       # one time

  ?>
  <h1> <span style="color: red;"> Superman </span> </h1>
  <hr>

  <!-- TASK 1 -- Write PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 1: Area Formula Demo </h2>
      <p> Area of a trapizoid is <span class="formula"> area = 0.5 &times; (a + b) &times; h </span> </p>
      <h3> Example </h3>

      <?php
      /* Put your code here */
      $a = rand(1,10);
      $b = rand(1,10);
      $h = rand(1,10);
      $result = round(0.5 * ($a + $b)* $h,2);
      print "<p> <span class=\"formula\"> a = $a,  b = $b,  h = $h </span> <p>\n";
      print "<p> <span class=\"formula\"> area = 0.5 * ($a+$b) * $h  </span> </p>\n";
      print "<p> <span class=\"formula\"> area = $result </span> </p>\n" ;
		?>
  </div>

  <!-- TASK 2 -- Write PHP code in in the space provided below.   -->
  <div class="task">
      <h2> Task 2: Rick Roll </h2>
      <p> Click for a funny cat video! </p>
      <?php

        /* Put php code here */
        /* Simple task of having 50% change to either the correct link, or  */
        /* getting the incorrect link.  */
        /* the trickest part is probably the print out */
        $chance = rand(1,2);
        $cat_video = "https://www.youtube.com/watch?v=opYts0nFOvs";
        $rick_video = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
        $cat_image = '<img src="https://tinyurl.com/ybafqu2h" alt="funny cat video">';

        if ($chance == 1) {
          $link = $cat_video;
        }
        else {
          $link = $rick_video;
        }
        print "<p> <a href=\"$link\" target=\"_blank\">";
        print  $cat_image . "</a> </p> \n";
       ?>

  </div>

  <!-- TASK 3 -- Write PHP code in in the space provided below.   -->
  <div class="task">
      <h2> Task 3: Style Modification </h2>

      <?php

       /* Simple two if statemetns to select 3 different values (color, font size) */
       $choice = rand(1,3);
       if ($choice == 1)
       {
         $color = "yellow";
       } else if ($choice == 2)
       {
         $color = "seagreen";
       } else {
         $color = "red";
       }

       $choice = rand(1,3);
       if ($choice == 1)
       {
         $font = "10em";
       } else if ($choice == 2)
       {
         $font = "20em";
       } else {
         $font = "15em";
       }

       /* Output */
       print "<p> <span style=\"color:$color; font-size:$font;\"> PHP is driving me crazy </span> </p> \n";
       ?>
  </div>
<body>
</html>
