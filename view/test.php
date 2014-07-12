<html>
  <head>
    <script type="text/javascript" src="../jquery-1.3.2.min.js"></script>
    <style>
      .play {
        width:72px;
        height:90px;
        background-image: url(../assets/pictures/play.png);
        float:left;
      }
      .pause {
        width:72px;
        height:90px;
        background-image: url(../assets/pictures/pause.png);
        float:left;
      }
    </style>
  </head>
  <body>
    <div id="toggle" class="play"></div>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#toggle').bind("click", function() {
          if ($(this).attr("class") == "play")
             $(this).attr("class", "pause");
          else
             $(this).attr("class", "play");
        });
      });
    </script>
  </body>
</html>