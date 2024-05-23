<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My 3D App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../application/js/getJsonData.js"></script>

</head>

<body style="background-color: #9f1818;">  
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
      <a class="navbar-brand" href="index">
        <!-- <img src="https://static.thcdn.com/images/small/original/widgets/190-en/42/original-original-Kaizen_Brand_Image_copy-045749_newheight-115742.png" alt="Coca-Cola Logo" height="40"> -->
        <img src="../application/assets/images/Coca-Cola_logo.svg.png" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apicocacola">
              Models
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="contactModalLabel">Contact Us</h3>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Sai Sumanth, Brighton, UK.</p>
          <p> Email: S.Kamshetty@sussex.ac.uk</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Content -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-4 mb-3" style="border-width: 1px; border-color: #fff;">
        <img style="border-radius: 2%;" src="../application/assets/images/coke_bottle.png" class="img-fluid w-100" alt="Coca Cola">
      </div>
      <div class="col-lg-8" >
        <div class="col-lg-12 mb-3">
          <div class="card d-flex flex-row" style="border-width: 1px; background-color: #9f1818; border-color:#fff; color: #fff;">
            <img src="../application/assets/images/Coca Cola Can.png" class="card-img-left" alt="Coca Cola" style="width: 150px; height: auto; object-fit: cover; border-radius: 5% 0 0 5%;">
            <div class="card-body">
              <h5 class="card-title" id='coketitle_home'>Coca Cola</h5>
              <div ></div>
              <div id='cokesubtitle_home'></div>
              <div id='cokedescription_home'></div>
              <!-- <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p> -->
              <a href="https://www.coca-cola.com/gb/en" class="btn btn-primary">Find out more..</a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <div class="card d-flex flex-row" style="border-width: 1px; background-color: #9f1818; border-color:#fff; color: #fff;">
            <img src="../application/assets/images/sprite can.jpg" class="card-img-left" alt="Sprite" style="width: 150px; height: auto; object-fit: cover; border-radius: 5% 0 0 5%;">
            <div class="card-body">
              <h5 class="card-title" id='spritetitle_home'>Sprite</h5>
              <div ></div>
              <div id='spritesubtitle_home'></div>
              <div id='spritedescription_home'></div>
              <!-- <p class="card-text">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p> -->
              <a href="https://www.coca-cola.com/gb/en" class="btn btn-primary">Find out more..</a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <div class="card d-flex flex-row" style="border-width: 1px; background-color: #9f1818; border-color:#fff; color: #fff;">
            <img src="../application/assets/images/dr pepper can.jpg" class="card-img-left" alt="Dr Pepper" style="width: 150px; height: auto; object-fit: cover; border-radius: 5% 0 0 5%;">
            <div class="card-body">
              <h5 class="card-title" id='peppertitle_home'>Dr Pepper</h5>
              <div id='peppersubtitle_home'></div>
              <div id='pepperdescription_home'></div>
              <!-- <p class="card-text">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.</p> -->
              <a href="index.php" class="btn btn-primary">Find out more..</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
