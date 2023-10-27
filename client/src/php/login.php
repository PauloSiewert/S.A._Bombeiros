<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Ficha de Ocorrência</title>
  <link rel="icon" href="/client/src/assets/noarlogo.png" />
  <link rel="stylesheet" href="/client/src/css/index.css" />
  <link rel="stylesheet" href="/client/src/css/reset.css" />
  <link rel="stylesheet" href="/client/src/javascript/sample.js" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</head>

<body>
  <!-- COMEÇO DA HEADER -->

  <div class="container-fluid m-0 p-0">
    <header class="fixed-top">
      <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <div class="header__container">
            <b class="header__title">Bombeiros Voluntários</b>
            <p class="header__title">
              Assoc. de Serviços Sociais Voluntários de Guaramirim
            </p>
          </div>

          <img src="/client/src/assets/noarlogo (1).png" alt="logo" />
        </div>
      </nav>
    </header>
  </div>

  <!-- FIM DA HEADER -->

  <br /><br /><br /><br /><br /><br />
  <div class="container mt-12">
    <div class="border p-4">
      <p class="fs-3 fw-bold justify-content-center text-center">Login</p>
      <br />
      <div class="row">

        <!-- USUÁRIO -->

        <div class="col-lg-12">
          <label for="numero" class="form-label m-0">CPF:</label>
          <input type="text" name="password" required oninput="mascara(this)" class="form-control" id="numero" aria-describedby="emailHelp" />
        </div>

        <!-- FIM USUÁRIO -->

        <br />
        <br />
        <br />
        <br />

        <!-- SENHA -->

        <div class="col-lg-12 mt-3">
          <label for="numero" class="form-label m-0">Senha: </label>


          <input type="password" name="password" required class="form-control" id="numero" />
        </div>

        <!-- FIM SENHA -->


        <!-- Login -->

        <div class="container mt-5">
          <div class="row">
            <div class="col-10">
              <input type="submit" value="Login" class="fw-3 fw-bold d-flex btn btn-primary w-100 justify-content-center"/>
            </div>
          </div>
        </div>

        <!-- <input type="submit" value="Login"> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>

        <script>
          function mascara(i) {

            var v = i.value;

            if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
              i.value = v.substring(0, v.length - 1);
              return;
            }

            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";

          }
        </script>

      </div>
    </div>

</body>

</html>