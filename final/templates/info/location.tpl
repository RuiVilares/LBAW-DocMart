{include file='common/header.tpl'}
<!-- Page Content -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbzBzA_844mIB43D_gqph92jB8Q4-nUUQ">
  </script>

  <script>
    function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(41.1781332,-8.5952825),
        zoom:17,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };

      var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

      var marker = new google.maps.Marker({
        position:new google.maps.LatLng(41.177469, -8.595341),
        map: map,
        title: 'DocMart'
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <div id="googleMap" style="margin: 0 auto;width:750px;height:570px;"></div>

{include file='common/footer.tpl'}
