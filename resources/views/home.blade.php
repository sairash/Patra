@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=B612);
    body{
      font-family: B612;
    }
.readWriteDiv{
  max-width: 200px;
  margin: auto;
}
.bookbody{
  padding-top: 100px;
  max-width: 100px;
  margin: auto;
}
.book-container {

  perspective: 600px;
  cursor: pointer;
}

@keyframes initAnimation {
  0% {
    transform: rotateY(-45deg);
  }
  100% {
    transform: rotateY(-35deg);
  }
}

.book {
  width: 200px;
  height: 300px;
  transform-style: preserve-3d;
  transform: rotateY(-35deg);
  transition: 1s ease;
  animation: 1s ease 0s 1 initAnimation;
}

.book:hover {
  transform: rotateY(-45deg);
}

.book > :first-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: red;
  width: 200px;
  height: 300px;
  transform: translateZ(10px);
  <?php
    echo 'background-color: '.$notebookFrontCoverColor.';';
  ?>
  border-radius: 0 2px 2px 0;
  box-shadow: 5px 5px 20px #666;
}

.book::before {
  position: absolute;
  content: ' ';
  background-color: blue;
  left: 0;
  top: 3px;
  width: 18px;
  height: 294px;
  transform: translateX(187px) rotateY(90deg);
  background: linear-gradient(90deg, 
    #fff 0%,
    #f9f9f9 5%,
    #fff 10%,
    #f9f9f9 15%,
    #fff 20%,
    #f9f9f9 25%,
    #fff 30%,
    #f9f9f9 35%,
    #fff 40%,
    #f9f9f9 45%,
    #fff 50%,
    #f9f9f9 55%,
    #fff 60%,
    #f9f9f9 65%,
    #fff 70%,
    #f9f9f9 75%,
    #fff 80%,
    #f9f9f9 85%,
    #fff 90%,
    #f9f9f9 95%,
    #fff 100%
    );
}

.book::after {
  position: absolute;
  top: 0;
  left: 0;
  content: ' ';
  width: 200px;
  height: 300px;
  transform: translateZ(-10px);
  <?php
    echo 'background-color: '.$notebookBackCoverColor.';';
  ?>
  border-radius: 0 2px 2px 0;
  box-shadow: -10px 0 50px 10px #666;
}
a{
  text-decoration: none;
}
.login{
    padding: 8px;
    background-color: #d9b8c4;
    color: white;
    border-radius: 5px;
}
.login:hover{
    background-color: #703d57;
}
.signup{
    padding: 8px;
    background-color: #703d57;
    color: white;
    border-radius: 5px;
}

.signup:hover{
    background-color: #d9b8c4;
}
.rightHover{
  position: absolute;
  top: 50%;
  right: 0%;
  padding:10px;
  background-color: rgba(67.8,84.7,90.2,0.4);
  color: white;
  cursor: pointer;

}
.leftHover{
  position: absolute;
  top: 50%;
  left:0%;
  padding:10px;
  background-color: rgba(255,0,0,0.4);
  color: white;
  cursor: pointer;
}
.dropbtn {
  background-color: rgba(255,255,255,0);
  fill:black;
  font-size: 16px;
  border-color: ;
  cursor: pointer;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-width: 2px;
  border-color: black;
}

.dropdown-content a {
  text-align: center;
  color: black;
  padding: 6px 1px;
  text-decoration: none;
  display: block;
  border-width: 2px;

  border-color: black;
  
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

body {font-family: Arial, Helvetica, sans-serif;}

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
}

.modal-data{
    display: flex;
    justify-content: center;
}

.modal-data select{
    background-color: white;
    padding: 5px;
    margin-top: 5px;
}

.modal-data button{
    background-color: #d9b8c4;
    cursor: pointer;
    color: white;
    padding: 5px;
    border: none;
    border-radius: 3px;
}

.modal-data button:hover{
    background-color: #703d57;
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

<div class="bookbody dropdown">
    <a 
      class="book-container dropbtn"
      
      rel="noreferrer noopener"
      href="/read/1" 
    >
      <div class="book">
        <?php
            echo '<img id="finalImage" alt="My Book" src="'.$notebookFrontCover.'"/>';
        ?>
      </div>
      <div class="dropdown-content">
        <a href="/customize" >Make Cover</a>
        <a id="myBtn" style="cursor: pointer;" >Change Cover Color</a>
        <?php
            echo '<a href="/defaultcover/">Default Covers</a>';
            echo '<a href="/randomcover/">Random Covers</a>';
        ?>
        <a>Upload bellow</a>
        <input type="file" id="input"/>
      </div>
    </a>
</div>
<div class="rightHover" id="Next">
  <span>Write</span>
</div>
<div class="leftHover" id="Previous">
  <span>Read</span>
</div>


<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="modal-data">
        <div style="margin: 5px;" id="frontCoverColor"></div>
        <div style="margin: 5px;" id="backCoverColor"></div>
    </div>
    <form action="/changebackfrontcovercolor" method="POST" style="margin-top: 5px">
      @csrf
        <div class="modal-data">
        <?php
            
            echo'<input type="text" style="margin: 5px;background-color:'.$notebookFrontCoverColor.'; text-align:center; color:black;" disabled id="frontCoverColorShow" value="Front Cover" name="">';
            echo '<input type="text" style="margin: 5px;background-color:'.$notebookBackCoverColor.'; text-align:center; color:black;" disabled id="backCoverColorShow" value="Back Cover" name="">';
            echo '<input type="text" style="display:none;" id="backCoverValue" value="'.$notebookBackCoverColor.'" name="backCoverValue">';
            echo '<input type="text" style="display:none;" id="frontCoverValue" value="'.$notebookFrontCoverColor.'" name="frontCoverValue">';
        ?>
        </div>
        <div class="modal-data">
            <button>Submit</button>
        </div>
    </form>
  </div>
</div>
<canvas style="display: none;" id="canvas" width=500 height=600></canvas>

<script type="text/javascript">
  $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
  var canvas=document.getElementById("canvas");
  var ctx=canvas.getContext("2d");
  var cw=canvas.width;
  var ch=canvas.height;
  var maxW=500;
  var maxH=600;

  var input = document.getElementById('input');
  var outputImage = document.getElementById('finalImage');
  input.addEventListener('change', handleFiles);

  function handleFiles(e) {
    var img = new Image;
    img.onload = function() {
      var iw=img.width;
      var ih=img.height;
      var scale=Math.min((maxW/iw),(maxH/ih));
      var iwScaled=iw*scale;
      var ihScaled=ih*scale;
      canvas.width=iwScaled;
      canvas.height=ihScaled;
      ctx.drawImage(img,0,0,iwScaled,ihScaled);
      coverDataToSend=canvas.toDataURL("image/png",0.5);
      outputImage.src = coverDataToSend;
      $.ajax({

         type:'POST',

         url:'/changecover',

         data:{cover: coverDataToSend},

         success:function(data){

            console.log(data.success);

         }

      });
    }
    img.src = URL.createObjectURL(e.target.files[0]);
    
        
  }
</script>
<script type="text/javascript">
    var colorPicker = new iro.ColorPicker("#backCoverColor", {
      // Set the size of the color picker
      width: 320,
      // Set the initial color to pure red
      color: "<?php echo $notebookBackCoverColor; ?>"
    });
    colorPicker.on('color:change', function(color) {
      // log the current color as a HEX string
      document.getElementById("backCoverValue").value=color.hexString;
      document.getElementById("backCoverColorShow").style.backgroundColor=color.hexString;
    });

    var colorPickerFront = new iro.ColorPicker("#frontCoverColor", {
      // Set the size of the color picker
      width: 320,
      // Set the initial color to pure red
      color: "<?php echo $notebookFrontCoverColor; ?>"
    });
    colorPickerFront.on('color:change', function(color) {
      // log the current color as a HEX string
      document.getElementById("frontCoverValue").value=color.hexString;
      document.getElementById("frontCoverColorShow").style.backgroundColor=color.hexString;
    });

    $.notify.addStyle('happyblue', {
        html: "<div><span data-notify-text/> </div>",
        classes: {
          base: {
            "color": "white",
            'height':'30px',
            "background-color": "rgba(58.0,44.3,52.2,0.4)",
            "border-radius": "5px",
            "text-align": "center",
            "padding": "5px",
            'display': 'inline-block',
          },
          superblue: {
            "background-color": "rgba(255,0,0,0.4)",
          }
        }
    });
  $.notify('Click on the Book to read it.', {
    style: 'happyblue',
    className: 'base',
    position:'top center',
  });
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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
<script type="text/javascript">
  
</script>
@endsection
