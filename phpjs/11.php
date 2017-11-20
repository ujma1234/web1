<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>java</h1>
    <ul>
    <script>
      list = new Array("잌","앜","읔","엨","엌");
      i=0;
      while(i<list.length){
        document.write("<li>"+list[i]+"</li>");
        i+=1;

      }
    </script>
    </ul>
    <h1>php</h1>
      <ul>
      <?php
        $list = array("엌", "킼", "ㅋ켘", "ㅋ커컼");
        $i = 0;
        while($i < count($list)){
          echo "<li>".$list[$i]."</li>";
          $i = $i + 1;
        }
      ?>
      </ul>
  </body>
</html>
