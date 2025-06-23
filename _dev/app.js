import './scss/main.scss';
import './js/header';
import './js/swiper';

document.addEventListener('DOMContentLoaded', () => {
  const apiKey = import.meta.env.VITE_GMAPS_API_KEY;

  if (!apiKey) {
    console.warn('Brak klucza API!');
    return;
  }

  const script = document.createElement('script');
  script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=initMap`;
  script.async = true;
  script.defer = true;

  document.body.appendChild(script);
});

