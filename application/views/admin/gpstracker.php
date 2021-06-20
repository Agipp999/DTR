<!-- <meta http-equiv="refresh" content="60" /> -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  <h4>GPS Tracker</h4>
                  </div>
                  <hr>
                  <div class="card-body">
                  <div class="form-group">
                <div id="mapid" style="width: 100%; height: 600px;"></div>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    <script>
    document.getElementById('mapid').onmouseout = function() { 
      setTimeout(location.reload.bind(location), 60000);
    }
    navigator.geolocation.getCurrentPosition(function(location){
     var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
     console.log(location.coords.latitude, location.coords.longitude);
     var mymap = L.map('mapid').setView([<?php echo $gps->first_row()->latitude .','.$gps->first_row()->longitude; ?>], 14);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        <?php foreach ($gps->result() as $key => $value) { ?>
            L.marker([<?= $value->latitude ?>,<?= $value->longitude ?>])
            .addTo(mymap)
            .bindPopup("<b>Lokasi Terkini</b><br>"+
                        "Nama Armada : <?= $value->name?> <br>"+
                        "<a href='https://www.google.com/maps/dir/?api=1&origin="  + 
                        location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $value->latitude ?>,<?= $value->longitude?>  'class='btn btn-sm btn-primary' target='_blank'>Tracking</a>"
                        +
                        "<a class='btn btn-sm btn-warning' style='margin-left:10px;' target='_blank'href='<?php echo base_url('ApiHistory').'?id='.$value->idt_user; ?>'>History</a>").openPopup();
        <?php } ?>

      });   
    </script>