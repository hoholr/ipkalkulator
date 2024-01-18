<?php include 'nav.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <form>
          
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Ingatlan ára:</label> 
            <div class="col-8">
              <div class="input-group">
                <input id="text" name="text" type="text" class="form-control" required="required"> 
                <div class="input-group-append">
                  <div class="input-group-text">
                    Ft
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Megbízási díj mértéke:</label> 
            <div class="col-8">
              <div class="input-group">
                <input id="text1" name="text1" value="4" type="number" class="form-control" required="required" step=".1">
                <div class="input-group-append">
                  <div class="input-group-text">%</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Megbízási díj nettó:</label> 
            <div class="col-8">
              <div class="input-group">
                <input id="text2" name="text2" type="text" value="0" disabled class="form-control">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="text3" class="col-4 col-form-label">Megbízási díj bruttó:</label> 
            <div class="col-8">
              <div class="input-group">
                <input id="text3" name="text3" type="text" value="0" disabled class="form-control">
                <div class="input-group-append">
                  <div class="input-group-text">Ft</div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="text5" class="col-4 col-form-label font-weight-bold text-otp">Kárátalány MAX:</label> 
            <div class="col-8">
              <div class="input-group">
                <input id="text5" name="text5" type="text" value="0" disabled class="form-control">
                <div class="input-group-append" onclick="copyMax()">
                  <div class="input-group-text">Ft <i class="bi bi-copy ml-3"></i></div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="text4" class="col-4 col-form-label font-weight-bold text-otp">Kárátalány MIN:</label> 
            <div class="col-8">
              <div class="input-group">
                <input id="text4" name="text4" type="text" value="0" disabled class="form-control">
                <div class="input-group-append" onclick="copyMin()">
                  <div class="input-group-text">Ft <i class="bi bi-copy ml-3"></i></div>
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
    $("#text,#text1").keyup(function(){
      var price = $("#text").val();
      var rata = $("#text1").val()*0.01;
      var netto = price * rata;
      var brutto = netto * 1.27;
      var min = netto * 0.2;
      var max = netto * 0.3;
      $("#text2").val(Math.round(netto));
      $("#text3").val(Math.round(brutto));
      $("#text4").val(Math.round(min));
      $("#text5").val(Math.round(max));
    });

    //Kárátalány MAX másolása
    function copyMin() {
        // Get the text field
        var copyText = document.getElementById("text4");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

         // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Kárátalány MIN vágólapra másolva: " + copyText.value);
      }

      //Kárátalány MAX másolása
      function copyMax() {
        // Get the text field
        var copyText = document.getElementById("text5");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

         // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Kárátalány MAX vágólapra másolva: " + copyText.value);
      }

    if ('serviceWorker' in navigator) {
       navigator.serviceWorker.register("serviceworker.js");
    }
    
    const urlsToCache = ["/"];
    self.addEventListener("install", (event) => {
       event.waitUntil(async () => {
          const cache = await caches.open("pwa-assets");
          return cache.addAll(urlsToCache);
       });
    });

    console.log('minden feladat végrehajtva');

  </script>
</body>
</html>