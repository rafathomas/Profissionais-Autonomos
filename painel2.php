<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/ac2e97408d.js" crossorigin="anonymous"></script>
<style>
  body {
    background: white;
    margin: 0;
    font-family: "Open Sans", Helvetica Neue, Helvetica, Arial, sans-serif;
    color: #fff;
    padding-left: 240px;
  }

  main {
    position: relative;
    height: 100vh;
  }

  main .helper {
    background: rgba(0, 0, 0, 0.2);
    color: #ffea92;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
    padding: 1.2em 2em;
    text-align: center;
    border-radius: 20px;
    font-size: 2em;
    font-weight: bold;
  }

  main .helper span {
    color: rgba(0, 0, 0, 0.2);
    font-size: 0.4em;
    display: block;
  }

  .menu {
    background: black;
    height: 100vh;
    width: 240px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 5;
    outline: none;
  }

  .menu .avatar {
    background: rgba(0, 0, 0, 0.1);
    padding: 2em 0.5em;
    text-align: center;
  }

  .menu .avatar img {
    width: 100px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #ffea92;
    box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.2);
  }

  .menu .avatar h2 {
    font-weight: normal;
    margin-bottom: 0;
  }

  .menu ul {
    list-style: none;
    padding: 0.5em 0;
    margin: 0;
  }

  .menu ul li {
    padding: 0.5em 1em 0.5em 3em;
    font-size: 0.95em;
    font-weight: regular;
    background-repeat: no-repeat;
    background-position: left 15px center;
    background-size: auto 20px;
    transition: all 0.15s linear;
    cursor: pointer;
  }

  .menu ul li.icon-chat {
    background-image: url("http://www.entypo.com/images/chat.svg");
  }

  .menu ul li.icon-customers {
    background-image: url("http://www.entypo.com/images//briefcase.svg");
  }

  .menu ul li.icon-settings {
    background-image: url("http://www.entypo.com/images/log-out.svg");
  }

  .menu ul li:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }

  .menu ul li:focus {
    outline: none;
  }

  @media screen and (max-width: 900px) and (min-width: 400px) {
    body {
      padding-left: 90px;
    }

    .menu {
      width: 90px;
    }

    .menu .avatar {
      padding: 0.5em;
      position: relative;
    }

    .menu .avatar img {
      width: 60px;
    }

    .menu .avatar h2 {
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 100px;
      margin: 0;
      min-width: 200px;
      border-radius: 4px;
      background: rgba(0, 0, 0, 0.4);
      transform: translate3d(-20px, -50%, 0);
      transition: all 0.15s ease-in-out;
    }

    .menu .avatar:hover h2 {
      opacity: 1;
      transform: translate3d(0px, -50%, 0);
    }

    .menu ul li {
      height: 60px;
      background-position: center center;
      background-size: 30px auto;
      position: relative;
    }

    .menu ul li span {
      opacity: 0;
      position: absolute;
      background: rgba(0, 0, 0, 0.5);
      padding: 0.2em 0.5em;
      border-radius: 4px;
      top: 50%;
      left: 80px;
      transform: translate3d(-15px, -50%, 0);
      transition: all 0.15s ease-in-out;
    }

    .menu ul li span:before {
      content: "";
      width: 0;
      height: 0;
      position: absolute;
      top: 50%;
      left: -5px;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
      border-right: 5px solid rgba(0, 0, 0, 0.5);
      transform: translateY(-50%);
    }

    .menu ul li:hover span {
      opacity: 1;
      transform: translate3d(0px, -50%, 0);
    }
  }

  @media screen and (max-width: 400px) {
    body {
      padding-left: 0;
    }

    .menu {
      width: 230px;
      box-shadow: 0 0 0 100em rgba(0, 0, 0, 0);
      transform: translate3d(-230px, 0, 0);
      transition: all 0.3s ease-in-out;
    }

    .menu .smartphone-menu-trigger {
      width: 40px;
      height: 40px;
      position: absolute;
      left: 100%;
      background: #5bc995;
    }

    .menu .smartphone-menu-trigger:before,
    .menu .smartphone-menu-trigger:after {
      content: "";
      width: 50%;
      height: 2px;
      background: #fff;
      border-radius: 10px;
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate3d(-50%, -50%, 0);
    }

    .menu .smartphone-menu-trigger:after {
      top: 55%;
      transform: translate3d(-50%, -50%, 0);
    }

    .menu ul li {
      padding: 1em 1em 1em 3em;
      font-size: 1.2em;
    }

    .menu:focus {
      transform: translate3d(0, 0, 0);
      box-shadow: 0 0 0 100em rgba(0, 0, 0, 0.6);
    }

    .menu:focus .smartphone-menu-trigger {
      pointer-events: none;
    }
  }

  .foto {
    left: 176px;
    top: 100px;
    height: 30px;
    position: relative;
  }

  .image-upload>input {
    display: none;
  }

  #camera {
    position: relative;
    top: 120px;
    left: 144px;
    cursor: pointer;

  }

  #camera1 {
    position: relative;
    top: 90px;
    left: 144px;
    color: #000;
    cursor: pointer;
  }
</style>

<nav class="menu" tabindex="0">
  <div class="smartphone-menu-trigger"></div>

  <div class="image-upload">
    <label for="file-input" title="Clique aqui para adicionar uma foto ao perfil">

      <span class="fa-stack">
        <i class="fas fa-circle fa-stack-2x" id="camera" ></i>
        <i class="fas fa-camera fa-stack-1x" id="camera1" ></i>
      </span>
    </label>
    <input id="file-input" type="file" accept=".png, .jpg, .jpeg"  />
  </div>
  <header class="avatar">
    <img src="img/user.jpg" />
    <h2>John D.</h2>
  </header>
  <ul>
    <li tabindex="0" class="icon-customers"><span>Agendamentos</span></li>
    <li tabindex="0" class="icon-chat"><span>Chat</span></li>
    <li tabindex="0" class="icon-settings"><span>Sair</span></li>
  </ul>
</nav>