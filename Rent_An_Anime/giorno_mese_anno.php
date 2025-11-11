<html>
<body>
<div class="date-container">
  <span class="date" id="current-date"></span>
</div>

<script>
  var mydate = new Date();
  var year = mydate.getFullYear();
  var day = mydate.getDay();
  var month = mydate.getMonth();
  var daym = mydate.getDate();

  if (daym < 10) {
    daym = "0" + daym;
  }

  var dayarray = ["Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"];
  var montharray = ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"];

  document.getElementById("current-date").innerHTML = dayarray[day] + " " + daym + " " + montharray[month] + " " + year;
</script>
</body>
</html>