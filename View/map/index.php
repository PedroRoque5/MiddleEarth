<img class="map" src="<?=ASSETS?>image/Map.jpg" alt="Mapa">

<img class="rohan marker" src="<?=ASSETS?>image/bandeiraVermelha.png" data-img="<?=ASSETS?>image/rohan.jpg" style="position: absolute; top: 65%; left: 50%;">
<img class="gondor marker" src="<?=ASSETS?>image/bandeiraVermelha.png" data-img="<?=ASSETS?>image/gondor.jpg" style="position: absolute; top: 80%; left: 50%;">
<img class="mordor marker" src="<?=ASSETS?>image/bandeiraVermelha.png" data-img="<?=ASSETS?>image/mordor.jpg" style="position: absolute; top: 80%; left: 80%;">
<img class="condado marker" src="<?=ASSETS?>image/bandeiraVermelha.png" data-img="<?=ASSETS?>image/condado.webp" style="position: absolute; top: 35%; left: 28%;">
<img class="moria marker" src="<?=ASSETS?>image/bandeiraVermelha.png" data-img="<?=ASSETS?>image/moria.jpg" style="position: absolute; top: 43%; left: 47%;">
<img class="rivendell marker" src="<?=ASSETS?>image/bandeiraVermelha.png" data-img="<?=ASSETS?>image/Rivendell.webp" style="position: absolute; top: 28%; left: 45%;">

<div id="popup-overlay" class="popup-overlay"></div>
  <div id="popup" class="popup">
    <img id="popup-image" src="" alt="Imagem Grande">
  </div>

  <script>

document.querySelectorAll('.marker').forEach(marker => {
  marker.addEventListener('click', function() {
    const imgSrc = this.getAttribute('data-img');
    const popup = document.getElementById('popup');
    const popupImage = document.getElementById('popup-image');
    const overlay = document.getElementById('popup-overlay');
    
    popupImage.src = imgSrc;
    popup.style.display = 'block';
    overlay.style.display = 'block';
  });
});

document.getElementById('popup-overlay').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
  this.style.display = 'none';
});

  </script>