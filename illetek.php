<?php include 'nav.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <form>
          
          <div class="form-group row">
            <label for="tulajdoniHanyad" class="col-5 col-md-4 col-form-label">Tulajdoni hányad:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="tulajdoniHanyad" name="tulajdoniHanyad" type="number" value="100" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">%</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="eladasDatuma" class="col-5 col-md-4 col-form-label">Eladás dátuma:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="eladasDatuma" name="eladasDatuma" type="number" value="<?php echo(date(Y)); ?>" class="form-control" required="required"> 
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="eladasiAr" class="col-5 col-md-4 col-form-label">TELJES eladási ár:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="eladasiAr" name="eladasiAr" type="number" class="form-control" required="required" data-toggle="tooltip" data-placement="top" title="A TELJES INGATLAN eladási ára!">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="szerzesDatuma" class="col-5 col-md-4 col-form-label">Szerzés dátuma:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="szerzesDatuma" name="szerzesDatuma" type="number" value="<?php echo(date(Y)); ?>" class="form-control" required="required"> 
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="szerzesiAr" class="col-5 col-md-4 col-form-label">Szerzési ár:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="szerzesiAr" name="szerzesiAr" type="number" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="erteknoveloBeruhazasok" class="col-5 col-md-4 col-form-label">Értéknövelő beruházások:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="erteknoveloBeruhazasok" name="erteknoveloBeruhazasok" type="number" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="szerzesEgyebKoltsegei" class="col-5 col-md-4 col-form-label">Szerzés egyéb költségei:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="szerzesEgyebKoltsegei" name="szerzesEgyebKoltsegei" type="number" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="eladasEgyebKoltsegei" class="col-5 col-md-4 col-form-label">Eladás egyéb költségei:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="eladasEgyebKoltsegei" name="eladasEgyebKoltsegei" type="number" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="adoAlap" class="col-5 col-md-4 col-form-label">Az adózás alapja:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="adoAlap" name="adoAlap" disabled="disabled" type="text" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="fizetendoIngatlanado" class="col-5 col-md-4 col-form-label">Fizetendő ingatlanadó:</label> 
            <div class="col-7 col-md-8">
              <div class="input-group">
                <input id="fizetendoIngatlanado" name="fizetendoIngatlanado" disabled="disabled" type="text" class="form-control" required="required">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>
           
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="scripts.js"></script>
  <script type="text/javascript">
    $("input").keyup(function(){
      console.clear();
      var tulajdoniHanyad = $("#tulajdoniHanyad").val()*0.01;
      var eladasiAr = $("#eladasiAr").val();
      var szerzesiAr = $("#szerzesiAr").val();
      var eladasDatuma = $("#eladasDatuma").val();
      var szerzesDatuma = $("#szerzesDatuma").val();
      var evekSzama = eladasDatuma - szerzesDatuma;
      if(evekSzama <= 1) {var adoAlap = 1} 
        else if(evekSzama === 2) {var adoAlap = .9}
        else if(evekSzama === 3) {var adoAlap = .6}
        else if(evekSzama === 4) {var adoAlap = .3}
        else {var adoAlap = 0};
      var erteknoveloBeruhazasok = $("#erteknoveloBeruhazasok").val();
      var szerzesEgyebKoltsegei = $("#szerzesEgyebKoltsegei").val();
      var eladasEgyebKoltsegei = $("#eladasEgyebKoltsegei").val();
      var korrigaltArres = eladasiAr - szerzesiAr - erteknoveloBeruhazasok - szerzesEgyebKoltsegei - eladasEgyebKoltsegei; 
      var fizetendoIngatlanado = (tulajdoniHanyad * korrigaltArres * adoAlap) * .15;
      console.log("Az ingatlanadó " + evekSzama + " évre vetítve kerül kiszámításra, az adóalap " + (adoAlap * 100) + "%");
      console.log("a teljes haszon " + (eladasiAr - szerzesiAr) + " Ft, a költségekkel korrigált haszon " + korrigaltArres + " Ft");
      console.log("a költségekkel korrigált haszon a tulajdoni hányad arányában " + (tulajdoniHanyad * korrigaltArres) + " Ft");
      console.log("az adóalap " + (tulajdoniHanyad * korrigaltArres * adoAlap) + " Ft");
      if(adoAlap >= 0){
        $("#adoAlap").val(Math.round(tulajdoniHanyad * korrigaltArres * adoAlap));
      } else {
        $("#adoAlap").val("0");
      }
      if(fizetendoIngatlanado >= 0){
        $("#fizetendoIngatlanado").val(Math.round(fizetendoIngatlanado));
      } else {
        $("#fizetendoIngatlanado").val("0");
      }
    });



    if ('serviceWorker' in navigator) {
       navigator.serviceWorker.register("serviceworker.js");
    }
    
    var urlsToCache = ["/"];
    self.addEventListener("install", (event) => {
       event.waitUntil(async () => {
          var cache = await caches.open("pwa-assets");
          return cache.addAll(urlsToCache);
       });
    });

    console.log('minden feladat végrehajtva');

  </script>
</body>
</html>