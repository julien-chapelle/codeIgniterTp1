<?= doctype('html5'); ?>
<html>

<head>
  <?= meta("UTF-8", "", 'charset'); ?>
  <?= meta("X-UA-Compatible", "IE=edge", 'http-equiv'); ?>
  <?= meta("viewport", "width=device-width, initial-scale=1"); ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <!-- <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../assets/css/bootstrap-theme.min.css" /> -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![ endif ] -->
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <a class="navbar-brand text_color_orange" href="<?= site_url('index'); ?>">TP CodeIgniter</a>
    <img src="../../../assets/images/codeigniter_logo.png" class="nav_logo_size mr-2">
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><?= anchor('index', "Accueil", ['class' => "nav-link text_color_orange"]); ?></li>
        <li class="nav-item"><?= anchor('blog/index', ' Blog ', ['class' => "nav-link text_color_orange"]); ?></li>
        <li class="nav-item"><?= anchor('contact', "Contact", ['class' => "nav-link text_color_orange"]); ?></li>
        <li class="nav-item"><?= anchor('about', "À propos", ['class' => "nav-link text_color_orange"]); ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-link text_color_orange"><?= $this->auth_user->is_connected ? 'Bienvenue <strong>' . $this->auth_user->username . ' |' . '</strong>' : '' ?></li>
        <li class="nav-item text_color_orange"><?= $this->auth_user->is_connected ? anchor('profile/index', ' Profil | ', ['class' => "nav-link text_color_orange pl-0"]) : '' ?></li>
        <li class="nav-item"><?= $this->auth_user->is_connected ? anchor('deconnection', 'Déconnexion', ['class' => "nav-link text_color_orange pl-0"]) : anchor('connection', 'Connexion', ['class' => "nav-link text_color_orange"]) ?></li>
      </ul>
    </div>
  </nav>