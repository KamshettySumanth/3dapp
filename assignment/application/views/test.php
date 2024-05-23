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
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link" href="apicocacola">Models</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card mb-3 shadow">
            <div class="card-header text-center">
                <h4>3D Models</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-around">
                    <button class="btn btn-primary" onclick="cokeScene(); pepperModelDescription();">Coca Cola</button>
                    <button class="btn btn-primary" onclick="spriteScene(); pepperModelDescription();">Sprite</button>
                    <button class="btn btn-primary" onclick="pepperScene(); pepperModelDescription();">Dr Pepper</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div id="modelStyle" class="border rounded bg-white p-3">
                    <x3d id="wire">
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
            <div class="col-lg-4">
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
                        <button id="spinButtonX" class="btn btn-secondary">Spin X</button>
                        <button id="spinButtonY" class="btn btn-secondary">Spin Y</button>
                        <button id="spinButtonZ" class="btn btn-secondary">Spin Z</button>
                    </div>
                </div>
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
                        <button onclick="headLight()" class="btn btn-secondary w-100 mb-2">Headlight On/Off</button>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="omniDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1 class="mt-5 text-center">Image Gallery</h1>
        <div id="gallery-container" class="row mt-3"></div>
    </div>

    <footer class="bg-white text-center py-3 mt-5 shadow-sm">
        <p>&copy; 2024 Your Website</p>
        <p>Click <a href="javascript:changeLook()">restyle</a> <a href="javascript:resetLook()">Reset</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('../application/php/gallery.php')
                .then(response => response.text())
                .then(data => {
                    let galleryContainer = document.getElementById('gallery-container');
                    galleryContainer.innerHTML = data;

                    document.querySelectorAll('.thumbnail').forEach(img => {
                        img.addEventListener('click', function () {
                            window.location.href = this.getAttribute('data-full');
                        });
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script>
        let spinning = false;
        let rotation = 0;
        const transformNode = document.getElementById('modelTransform');

        function spinModelX() {
            if (spinning) {
                rotation += 0.01;
                transformNode.setAttribute('rotation', `0 1 0 ${rotation}`);
                requestAnimationFrame(spinModelX);
            }
        }

        document.getElementById('spinButtonX').addEventListener('click', function() {
            spinning = !spinning;
            if (spinning) {
                spinModelX();
                this.textContent = 'Stop Spinning';
            } else {
                this.textContent = 'Spin X';
            }
        });

        function spinModelY() {
            if (spinning) {
                rotation += 0.01;
                transformNode.setAttribute('rotation', `1 0 0 ${rotation}`);
                requestAnimationFrame(spinModelY);
            }
        }

        document.getElementById('spinButtonY').addEventListener('click', function() {
            spinning = !spinning;
            if (spinning) {
                spinModelY();
                this.textContent = 'Stop Spinning';
            } else {
                this.textContent = 'Spin Y';
            }
        });

        function spinModelZ() {
            if (spinning) {
                rotation += 0.02;
                transformNode.setAttribute('rotation', `0 0 1 ${rotation}`);
                requestAnimationFrame(spinModelZ);
            }
        }

        document.getElementById('spinButtonZ').addEventListener('click', function() {
            spinning = !spinning;
            if (spinning) {
                spinModelZ();
                this.textContent = 'Stop Spinning';
            } else {
                this.textContent = 'Spin Z';
            }
        });
    </script>
</body>

</html>
