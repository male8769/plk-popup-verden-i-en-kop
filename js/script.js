document.addEventListener('DOMContentLoaded', function () {
  var closeBtn = document.getElementById('closeBtn');
  var popup = document.getElementById('popup-kaffe-container');

  if(closeBtn && popup) {
    closeBtn.addEventListener('click', function() {
      popup.style.display = 'none'; // skjul popup'en ved klik
    });
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const image = document.querySelector('.kaffe-cup-image img[src*="plk-kaffe.png"]');

  if (!image) return; // hvis billedet ikke findes, gør ikke noget

  let rotation = 0;
  function rotate() {
    rotation = (rotation + 0.2) % 360; // øg rotation med 1 grad og hold den <360
    image.style.transform = `rotate(${rotation}deg)`;
    requestAnimationFrame(rotate);
  }
  rotate();
});

document.addEventListener('DOMContentLoaded', () => {
  const popup = document.getElementById('popup-kaffe-container');
  if (popup && popup.parentNode !== document.body) {
    document.body.appendChild(popup);
  }
});