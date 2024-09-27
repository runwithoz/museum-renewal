var container = document.getElementById("map");
var options = {
  center: new kakao.maps.LatLng(37.2826917, 127.018956),
  level: 3,
};

var map = new kakao.maps.Map(container, options);

var markerPosition = new kakao.maps.LatLng(37.2826917, 127.018956);

var marker = new kakao.maps.Marker({
  position: markerPosition,
});

marker.setMap(map);
