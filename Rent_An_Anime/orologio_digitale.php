<html>

<body onload="startTime()">
  <div id="clock"></div>

  <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();

      // Aggiungi uno zero davanti ai numeri minori di 10
      m = checkTime(m);
      s = checkTime(s);

      document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;

      setTimeout(startTime, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
  </script>
</body>

</html>