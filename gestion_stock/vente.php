<!DOCTYPE html>
<html>
<head>
  <title>Mon Application</title>
  <style>
    ul {
      list-style: none;
    }

    ul li {
      padding: 10px;
    }

    ul ul {
      display: none;
    }

    ul li:hover > ul {
      display: block;
    }
  </style>
</head>
<body>
  <ul id="menu">
    <li><a href="#">Accueil</a></li>
    <li>
      <a href="#">Fonctionnalité 1</a>
      <ul>
        <li><a href="#">Sous-menu 1</a></li>
        <li><a href="#">Sous-menu 2</a></li>
        <li><a href="#">Sous-menu 3</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Fonctionnalité 2</a>
      <ul>
        <li><a href="#">Sous-menu 1</a></li>
        <li><a href="#">Sous-menu 2</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
</body>
</html>