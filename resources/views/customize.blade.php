<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="lib/fabric.min.js"></script>
<!DOCTYPE html>
<html>
<head>
  <title>Customize Cover</title>
    <style>

    @import url(https://fonts.googleapis.com/css?family=B612);
    @import url(https://fonts.googleapis.com/css?family=Delius+Swash+Caps);

html{
    font-family: B612;
}
a{
    text-decoration: none;
}
button{
    border:0;
    text-decoration: none;
    margin-right: 14px;
    padding: 8px;
    background-color: #d9b8c4;
    color: white;
    border-radius: 5px;
}
button:hover{
    background-color: #703d57;
}
.logoPatra{
  position:fixed;
  font-family: B612;
  top: 10px;
  left: 10px;
  z-index: 99999;
  height: 80px;
  width: 80px;

}
.logoLink{
  position: relative;
  text-align: center;
  color: white;
  font-family: Delius Swash Caps;
}
.centered {
  position: absolute;
  top:  0%;
  left: 50%;
  transform: translate(-50%, -100%);
  font-size: 40px;
}
#drawing-mode {
  margin-bottom: 10px;
  vertical-align: top;
}
.drawing-mode-options {
  display: inline-block;
  vertical-align: top;
  margin-bottom: 10px;
  margin-top: 10px;
  background: #f5f2f0;
  padding: 10px;
}
label {
  display: inline-block; width: 130px;
}
.info {
  display: inline-block;
  width: 25px;
  background: #ffc;
}
#bd-wrapper {
  min-width: 1500px;
}
.loginSignup{
    position:fixed;
    top: 40px;
    right: 10px;
    z-index: 99999;
}
.login{
    margin-right: 14px;
    padding: 8px;
    background-color: #d9b8c4;
    color: white;
    border-radius: 5px;
}
.signup{
    margin-right: 20px;
    padding: 8px;
    background-color: #703d57;
    color: white;
    border-radius: 5px;
}

</style>
</head>
<body >
<div class="logoPatra"><a class="logoLink" href="/"><img style="height: 100%" src="image/logo/patra_header.png"><div class="centered">Patra</div></a></div>
<div class="loginSignup">
   @if (Route::has('login'))
      @auth
        <a class="login" href="/profile">Profile</a>
        <a class="signup" href="/noteBook">Book</a>
      @else
          <a class="login" href="/login">Login</a>
        @if (Route::has('register'))
          <a class="signup" href="/register">Signup</a>
        @endif
      @endauth
    @endif
</div>
    <div style="display: flex;justify-content: center;">
        <canvas id="c" width="500" height="600" style="border:1px solid #aaa"></canvas>


        <div style="display: inline-block; margin-left: 10px">
          
          <button id="drawing-mode" class="btn btn-info">Cancel drawing mode</button><br>

          <div class="drawing-mode-options" id="drawing-mode-options">
            <label for="drawing-mode-selector">Mode:</label>
            <select id="drawing-mode-selector">
              <option>Pencil</option>
              <option>Circle</option>
              <option>Spray</option>
              <option>Pattern</option>

              <option>hline</option>
              <option>vline</option>
              <option>square</option>
              <option>diamond</option>
            </select><br>

            <label for="drawing-line-width">Line width:</label>
            <span class="info">30</span><input type="range" value="30" min="0" max="150" id="drawing-line-width"><br>

            <label for="drawing-color">Line color:</label>
            <input type="color" value="#005E7A" id="drawing-color"><br>

            <label for="drawing-shadow-color">Shadow color:</label>
            <input type="color" value="#005E7A" id="drawing-shadow-color"><br>

            <label for="drawing-shadow-width">Shadow width:</label>
            <span class="info">0</span><input type="range" value="0" min="0" max="50" id="drawing-shadow-width"><br>

            <label for="drawing-shadow-offset">Shadow offset:</label>
            <span class="info">0</span><input type="range" value="0" min="0" max="50" id="drawing-shadow-offset"><br>
          </div>
          <div class="drawing-mode-options" id="cancelDrawingToEnter" style="margin-top: 10px; background: #f5f2f0;width: 294px;">
            <button type="submit" onclick="addMe()">Add Text</button>
            <input type="color" value="#000000" id="textColor"><br>
            <label>Backcover</label>
            <input style="margin-right: 50px;margin-left: -47.5px;" type="color" value="#000000" >
            <button type="submit" onclick="addMe()">Update</button><br>
            <button type="submit" onclick="pick()">Pick Color</button>
        </div>
        <div >
            <label id="pickedColorValue" style="font-size: 10px;">Pick a color to see here</label>
        </div>
        <div style="margin-top: 10px; ">
            <button id="clear-canvas" class="btn btn-info">Clear</button>
            <button type="submit" onclick="uploadImage()">Upload Cover</button>
            <button type="submit" onclick="onChangeUpload()">Dowload Cover</button>
        </div>
        </div>
        
    </div>
<br />
<br />
<script id="main">
document.getElementById('cancelDrawingToEnter').style.display='none';
pickColorReq=false;
function pick(){
    pickColorReq=true;
}

  var $ = function(id){return document.getElementById(id)};

  var canvas = this.__canvas = new fabric.Canvas('c', {
    isDrawingMode: true
  });

canvas.on('mouse:up', function (e) {
    if(pickColorReq){
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");
        var imgData = ctx.getImageData(canvas.getPointer().x, canvas.getPointer().y, 1, 1);
        document.getElementById('pickedColorValue').innerHTML="rgb " + imgData.data[0] + " " + imgData.data[1] + " " + imgData.data[2];
        pickColorReq=false;
    }
});
  fabric.Object.prototype.transparentCorners = false;
function addMe(){
    text = new fabric.Textbox("Here", { left: 100, top: 100,fontFamily: 'B612',fill: document.getElementById('textColor').value,  });
    canvas.add(text).setActiveObject(textbox);
    console.log('GG');
}

function uploadImage(){
  const dataURL = canvas.toDataURL({
       width: canvas.width,
       height: canvas.height,
       left: 0,
       top: 0,
       format: 'png',
  });
  // console.log(dataURL);
  const urlToChange='/changecover/'+<?php echo $id; ?>;
  var csrf = document.querySelector('meta[name="csrf-token"]').content;
  let data = {_token: csrf,coverdata: dataURL};
  console.log(data);
  fetch(urlToChange, {
    method: "POST",
    headers: {
    '_token': csrf
    // 'Content-Type': 'application/x-www-form-urlencoded',
  },
    body: JSON.stringify(data)
  }).then(res => {
    console.log("Request complete! response:", res);
  });
}



function onChangeUpload(){
    const dataURL = canvas.toDataURL({
       width: canvas.width,
       height: canvas.height,
       left: 0,
       top: 0,
       format: 'png',
    });
    const link = document.createElement('a');
    link.download = 'image.png';
    link.href = dataURL;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
  var drawingModeEl = $('drawing-mode'),
      drawingOptionsEl = $('drawing-mode-options'),
      drawingColorEl = $('drawing-color'),
      drawingShadowColorEl = $('drawing-shadow-color'),
      drawingLineWidthEl = $('drawing-line-width'),
      drawingShadowWidth = $('drawing-shadow-width'),
      drawingShadowOffset = $('drawing-shadow-offset'),
      clearEl = $('clear-canvas');

  clearEl.onclick = function() { canvas.clear() };

  drawingModeEl.onclick = function() {
    canvas.isDrawingMode = !canvas.isDrawingMode;
    if (canvas.isDrawingMode) {
      drawingModeEl.innerHTML = 'Cancel drawing mode';
      drawingOptionsEl.style.display = '';
      document.getElementById('cancelDrawingToEnter').style.display='none';
    }
    else {
      drawingModeEl.innerHTML = 'Enter drawing mode';
      drawingOptionsEl.style.display = 'none';
      document.getElementById('cancelDrawingToEnter').style.display='';
    }
  };

  if (fabric.PatternBrush) {
    var vLinePatternBrush = new fabric.PatternBrush(canvas);
    vLinePatternBrush.getPatternSrc = function() {

      var patternCanvas = fabric.document.createElement('canvas');
      patternCanvas.width = patternCanvas.height = 10;
      var ctx = patternCanvas.getContext('2d');

      ctx.strokeStyle = this.color;
      ctx.lineWidth = 5;
      ctx.beginPath();
      ctx.moveTo(0, 5);
      ctx.lineTo(10, 5);
      ctx.closePath();
      ctx.stroke();

      return patternCanvas;
    };

    var hLinePatternBrush = new fabric.PatternBrush(canvas);
    hLinePatternBrush.getPatternSrc = function() {

      var patternCanvas = fabric.document.createElement('canvas');
      patternCanvas.width = patternCanvas.height = 10;
      var ctx = patternCanvas.getContext('2d');

      ctx.strokeStyle = this.color;
      ctx.lineWidth = 5;
      ctx.beginPath();
      ctx.moveTo(5, 0);
      ctx.lineTo(5, 10);
      ctx.closePath();
      ctx.stroke();

      return patternCanvas;
    };

    var squarePatternBrush = new fabric.PatternBrush(canvas);
    squarePatternBrush.getPatternSrc = function() {

      var squareWidth = 10, squareDistance = 2;

      var patternCanvas = fabric.document.createElement('canvas');
      patternCanvas.width = patternCanvas.height = squareWidth + squareDistance;
      var ctx = patternCanvas.getContext('2d');

      ctx.fillStyle = this.color;
      ctx.fillRect(0, 0, squareWidth, squareWidth);

      return patternCanvas;
    };

    var diamondPatternBrush = new fabric.PatternBrush(canvas);
    diamondPatternBrush.getPatternSrc = function() {

      var squareWidth = 10, squareDistance = 5;
      var patternCanvas = fabric.document.createElement('canvas');
      var rect = new fabric.Rect({
        width: squareWidth,
        height: squareWidth,
        angle: 45,
        fill: this.color
      });

      var canvasWidth = rect.getBoundingRect().width;

      patternCanvas.width = patternCanvas.height = canvasWidth + squareDistance;
      rect.set({ left: canvasWidth / 2, top: canvasWidth / 2 });

      var ctx = patternCanvas.getContext('2d');
      rect.render(ctx);

      return patternCanvas;
    };

    var img = new Image();
    img.src = '../assets/honey_im_subtle.png';

    var texturePatternBrush = new fabric.PatternBrush(canvas);
    texturePatternBrush.source = img;
  }

  $('drawing-mode-selector').onchange = function() {

    if (this.value === 'hline') {
      canvas.freeDrawingBrush = vLinePatternBrush;
    }
    else if (this.value === 'vline') {
      canvas.freeDrawingBrush = hLinePatternBrush;
    }
    else if (this.value === 'square') {
      canvas.freeDrawingBrush = squarePatternBrush;
    }
    else if (this.value === 'diamond') {
      canvas.freeDrawingBrush = diamondPatternBrush;
    }
    else {
      canvas.freeDrawingBrush = new fabric[this.value + 'Brush'](canvas);
    }

    if (canvas.freeDrawingBrush) {
      var brush = canvas.freeDrawingBrush;
      brush.color = drawingColorEl.value;
      if (brush.getPatternSrc) {
        brush.source = brush.getPatternSrc.call(brush);
      }
      brush.width = parseInt(drawingLineWidthEl.value, 10) || 1;
      brush.shadow = new fabric.Shadow({
        blur: parseInt(drawingShadowWidth.value, 10) || 0,
        offsetX: 0,
        offsetY: 0,
        affectStroke: true,
        color: drawingShadowColorEl.value,
      });
    }
  };

  drawingColorEl.onchange = function() {
    var brush = canvas.freeDrawingBrush;
    brush.color = this.value;
    if (brush.getPatternSrc) {
      brush.source = brush.getPatternSrc.call(brush);
    }
  };
  drawingShadowColorEl.onchange = function() {
    canvas.freeDrawingBrush.shadow.color = this.value;
  };
  drawingLineWidthEl.onchange = function() {
    canvas.freeDrawingBrush.width = parseInt(this.value, 10) || 1;
    this.previousSibling.innerHTML = this.value;
  };
  drawingShadowWidth.onchange = function() {
    canvas.freeDrawingBrush.shadow.blur = parseInt(this.value, 10) || 0;
    this.previousSibling.innerHTML = this.value;
  };
  drawingShadowOffset.onchange = function() {
    canvas.freeDrawingBrush.shadow.offsetX = parseInt(this.value, 10) || 0;
    canvas.freeDrawingBrush.shadow.offsetY = parseInt(this.value, 10) || 0;
    this.previousSibling.innerHTML = this.value;
  };

  if (canvas.freeDrawingBrush) {
    canvas.freeDrawingBrush.color = drawingColorEl.value;
    canvas.freeDrawingBrush.width = parseInt(drawingLineWidthEl.value, 10) || 1;
    canvas.freeDrawingBrush.shadow = new fabric.Shadow({
      blur: parseInt(drawingShadowWidth.value, 10) || 0,
      offsetX: 0,
      offsetY: 0,
      affectStroke: true,
      color: drawingShadowColorEl.value,
    });
  }

</script>

    </div>

    <script>
      (function(){
        var mainScriptEl = document.getElementById('main');
        if (!mainScriptEl) return;
        var preEl = document.createElement('pre');
        var codeEl = document.createElement('code');
        codeEl.innerHTML = mainScriptEl.innerHTML;
        codeEl.className = 'language-javascript';
        preEl.appendChild(codeEl);
      })();
    </script>

    <script>
(function() {
  window.addEventListener('load', function() {
    var canvas = this.__canvas || this.canvas,
        canvases = this.__canvases || this.canvases;

    canvas && canvas.calcOffset && canvas.calcOffset();

    if (canvases && canvases.length) {
      for (var i = 0, len = canvases.length; i < len; i++) {
        canvases[i].calcOffset();
      }
    }
  });
})();
</script>


  </body>
</html>
