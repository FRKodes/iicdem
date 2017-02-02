function initMap() {
  var myLatLng = {lat: 20.655072, lng: -103.393212};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

$(document).ready(function() {
  console.log('ready!');

  $('button.navbar-toggle').on('click', function (){
    console.log('ok');
    $('.site-content-contain').toggleClass('moved');
    $('.main-navigation-container').toggleClass('alpha');
  });

  $('.main-banners-container').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    prevArrow: '<button type="button" class="slick-prev icon-arrow-left"><span>Previous</span></button>',
    nextArrow: '<button type="button" class="slick-next icon-arrow-right"><span>Next</span></button>'
  });
 });
