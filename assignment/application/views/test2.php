<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My 3D App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../application/css/x3dom.css">
    <script type="text/javascript" src="../application/js/x3dom.js"></script>
    <script type="text/javascript" src="../application/js/interaction.js"></script>
    <link href="../application/css/App.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../application/js/getJsonData.js"></script>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index">
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
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="showSection('body');">Models</a>
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
    <div class="container mt-2" id="home" style="background-color: #9f1818;">
        <div class="row">
            <div class="col-lg-4 mb-3" style="border-width: 1px; border-color: #fff;">
                <img style="border-radius: 2%;" src="../application/assets/images/coke_bottle.png" class="img-fluid w-100" alt="Coca Cola">
            </div>
            <div class="col-lg-8">
                <div class="col-lg-12 mb-3">
                    <div class="card d-flex flex-row" style="border-width: 1px; background-color: #9f1818; border-color:#fff; color: #fff;">
                        <img src="../application/assets/images/Coca Cola Can.png" class="card-img-left" alt="Coca Cola" style="width: 150px; height: auto; object-fit: cover; border-radius: 5% 0 0 5%;">
                        <div class="card-body">
                            <h5 class="card-title" id='coketitle_home'>Coca Cola</h5>
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
                            <div></div>
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
    <div id="body">
        <div class="container mt-5">
            <div class="card mb-3 shadow">
                <div class="card-header text-center">
                    <h4>3D Models</h4>
                </div>
                <div class="card-body d-flex justify-content-around flex-column flex-md-row">
                    <button class="btn btn-primary mb-2" onclick="cokeScene(); pepperModelDescription();">Coca Cola</button>
                    <button class="btn btn-primary mb-2" onclick="spriteScene(); pepperModelDescription();">Sprite</button>
                    <button class="btn btn-primary mb-2" onclick="pepperScene(); pepperModelDescription();">Dr Pepper</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 order-lg-2">
                    <div id="modelStyle" class="border rounded bg-white p-3">
                        <x3d id="wire" style="width: 100%; height: 600px;">
                            <div id="cokeName"></div>
                            <div id="spriteName" style="display:none;"></div>
                            <div id="pepperName" style="display:none;"></div>
                            <scene>
                                <Switch whichChoice="2" id='SceneSwitch'>
                                    <transform id="modelTransform">
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application\assets\x3d\dr_pepper.x3d"></inline>
                                    </transform>
                                    <transform id="modelTransform">
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application\assets\x3d\sprite_bottle.x3d"></inline>
                                    </transform>
                                    <transform id="modelTransform">
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application\assets\x3d\coke_can.x3d"></inline>
                                    </transform>
                                </Switch>
                            </scene>
                            <div id="coke3Ddescription"></div>
                            <div id="sprite3Ddescription" style="display:none;"></div>
                            <div id="pepper3Ddescription" style="display:none;"></div>
                        </x3d>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    
                </div>
            </div>
            <div class="row mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3 shadow">
                            <div class="card-header">Views</div>
                            <div class="card-body d-flex flex-wrap gap-2">
                                <button onclick="cameraFront()" class="btn btn-secondary">Front</button>
                                <button onclick="cameraBack()" class="btn btn-secondary">Back</button>
                                <button onclick="cameraLeft()" class="btn btn-secondary">Left</button>
                                <button onclick="cameraRight()" class="btn btn-secondary">Right</button>
                                <button onclick="cameraTop()" class="btn btn-secondary">Top</button>
                                <button onclick="cameraBottom()" class="btn btn-secondary">Bottom</button>
                            </div>
                        </div>
                        <div class="card mb-3 shadow">
                            <div class="card-header">Animation</div>
                            <div class="card-body d-flex flex-wrap gap-2">
                                <button id="spinButtonX" class="btn btn-secondary" onclick="spinModelX(this);">Spin X</button>
                                <button id="spinButtonY" class="btn btn-secondary" onclick="spinModelY(this);">Spin Y</button>
                                <button id="spinButtonZ" class="btn btn-secondary" onclick="spinModelZ(this);">Spin Z</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3 shadow">
                            <div class="card-header">Change</div>
                            <div class="card-body d-flex flex-wrap gap-2">
                                <button onclick="wireFrame()" class="btn btn-secondary">WireFrame</button>
                                <button onclick="changeCokeTexture()" class="btn btn-secondary">Change Texture</button>
                            </div>
                        </div>
                        <div class="card mb-3 shadow">
                            <div class="card-header">Lights</div>
                            <div class="card-body">
                                <button onclick="headLight()" class="btn btn-secondary w-40 mb-2">Headlight On/Off</button>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-40" type="button" id="omniDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Omni Lights
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="omniDropdown">
                                        <li><a class="dropdown-item" href="#" onclick="omniLight(1)">Omni 1 On/Off</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="omniLight(2)">Omni 2 On/Off</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="omniLight(3)">Omni 3 On/Off</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="omniLight(4)">Omni 4 On/Off</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="omniLight(5)">Omni 5 On/Off</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="omniLight(6)">Omni 6 On/Off</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="mt-5 text-center">Image Gallery</h1>
            <div id="gallery-container" class="row mt-3"></div>
        </div>

        <footer class="bg-white text-center py-3 mt-5 shadow-sm">
            <p>&copy; 2024 Your Website</p>
            <p>Click <a href="javascript:changeLook()">restyle</a> <a href="javascript:resetLook()">Reset</a></p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('../application/php/gallery.php')
                .then(response => response.text())
                .then(data => {
                    let galleryContainer = document.getElementById('gallery-container');
                    galleryContainer.innerHTML = data;

                    document.querySelectorAll('.thumbnail').forEach(img => {
                        img.addEventListener('click', function() {
                            window.location.href = this.getAttribute('data-full');
                        });
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.getElementById('home').style.display = 'none';
            document.getElementById('body').style.display = 'none';

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }
        // Initialize by showing the home section by default
        document.addEventListener('DOMContentLoaded', function() {
            showSection('home');
        });
    </script>
</body>

</html>
