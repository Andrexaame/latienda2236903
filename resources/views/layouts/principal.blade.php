<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title></title>
</head>
<body>
<nav class="grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">productos</a></li>
        <li><a href="badges.html">pedidos</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js')}}" ></script>
  
  <script>
    M.AutoInit();
    document.addEventListener('DOMContentLoaded', function() {
    //codigo inicializacion de los tabs
    let tabs = document.querySelector(".tabs")
    var instance = M.Tabs.init(tabs);
    //codigo inicializacion de los selects
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);

  });
  </script>
</body>
</html>