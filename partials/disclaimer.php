
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  border-radius: 12px;
  max-width: 600px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>



<!-- Trigger/Open The Modal -->
<!-- <button id="infoBtn" style="position: fixed; bottom: 0; right: 0; margin: 0px; padding: 10px 6px; background: #ffffff00; color: #ffffff85; border: none;"> Disclaimer/Aviso</button> -->

<!-- The Modal -->
<div id="infoModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="padding: 28px;">
    <span class="close">&times;</span>
    <div style="display: flex; flex-direction: column; align-items: center;">
     <p style="margin-bottom: 12px;"> <a href="http://rtp.la/iAMLOVE" target="_blank">iMLOVE</a> &eacute; uma obra ficcional realizada no &acirc;mbito do RTP Lab. Este site &eacute; meramente promocional. Está disponível em exclusivo na <a href="http://rtp.la/iAMLOVE" target="_blank">RTP Play</a>.</p>
     <a href="http://rtp.la/iAMLOVE" target="_blank" style="text-decoration: none;" ><button type="button" class="cta-btn">Assistir</button></a>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("infoModal");

// Get the button that opens the modal
var btn = document.getElementById("infoBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



</script>