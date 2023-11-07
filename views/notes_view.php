<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="main.js" defer type="module"></script>
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <link rel="stylesheet" type="text/css" href="../styles/styles_notes_view.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/a59d4e3777.js" crossorigin="anonymous"></script>

  <title>Notes View</title>

</head>

<body>
  <div action="php/Registro_L.php" class="aside-notes">
    <div class="aside-header">
      <h2>Tu Nombre</h2>
    </div>

    <div class="aside-grid">

      <ul>

        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>
        <li class="notes-list-item">
          <i class="fa-regular fa-bookmark"></i>
          <h4>Titulo</h4>
          <p>Texto de preview de la nota para visualizar</p>
        </li>

      </ul>

    </div>

    <div class="aside-setts">
      <h3>Ajustes</h3>
    </div>

  </div>

  <div class="main-notes">

    <div class="main-nav">
      <h2>SD Notebooks</h2>

      <a href="./index.html"><i class="fa-solid fa-up-right-from-square"></i></a>

    </div>

    <div class="main-note-form">
      <h3>25 de septiembre, 2023</h3>

      <form action="">
        <input type="text" placeholder="Titulo">
        <textarea name="content" rows="4" cols="50" placeholder="Escribe tu nota!"></textarea>
      </form>

    </div>

  </div>

  <button class="new-note-button">
    <i class="fa-solid fa-plus"></i>
</button>

</body>

</html>