<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Patra-Lekhdai</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/default-picker.min.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>


<link rel="stylesheet" href="css/default-picker/light.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href='https://fonts.googleapis.com/css?family=B612|Delius+Swash+Caps|Montez|Lobster|Josefin+Sans|Shadows+Into+Light|Pacifico|Amatic+SC:700|Orbitron:400,900|Rokkitt|Righteous|Dancing+Script:700|Bangers|Chewy|Sigmar+One|Architects+Daughter|Abril+Fatface|Covered+By+Your+Grace|Kaushan+Script|Gloria+Hallelujah|Satisfy|Lobster+Two:700|Comfortaa:700|Cinzel|Courgette|Aclonica|Allan|Annie+Use+Your+Telescope|Anonymous+Pro|Allerta+Stencil|Allerta|Amaranth|Anton|Architects+Daughter|Arimo|Artifika|Arvo|Asset|Astloch|Bangers|Bentham|Bevan|Bigshot+One|Bowlby+One|Bowlby+One+SC|Brawler|Buda:300|Cabin|Calligraffitti|Candal|Cantarell|Cardo|Carter+One|Caudex|Cedarville+Cursive|Cherry+Cream+Soda|Chewy|Coda|Coming+Soon|Copse|Corben|Cousine|Covered+By+Your+Grace|Crafty+Girls|Crimson+Text|Crushed|Cuprum|Damion|Dancing+Script|Dawning+of+a+New+Day|Didact+Gothic|Droid+Sans|Droid+Serif|EB+Garamond|Expletus+Sans|Fontdiner+Swanky|Forum|Francois+One|Geo|Give+You+Glory|Goblin+One|Goudy+Bookletter+1911|Gravitas+One|Gruppo|Hammersmith+One|Holtwood+One+SC|Homemade+Apple|Inconsolata|Indie+Flower|Irish+Grover|Istok+Web|Josefin+Sans|Josefin+Slab|Judson|Jura|Just+Another+Hand|Just+Me+Again+Down+Here|Kameron|Kenia|Kranky|Kreon|Kristi|La+Belle+Aurore|Lato|League+Script|Lekton|Limelight|Lobster|Lobster+Two|Lora|Love+Ya+Like+A+Sister|Loved+by+the+King|Luckiest+Guy|Maiden+Orange|Mako|Maven+Pro|Maven+Pro:900|Meddon|MedievalSharp|Megrim|Merriweather|Metrophobic|Michroma|Miltonian+Tattoo|Miltonian|Modern+Antiqua|Monofett|Molengo|Mountains+of+Christmas|Muli:300|Muli|Neucha|Neuton|News+Cycle|Nixie+One|Nobile|Nova+Cut|Nova+Flat|Nova+Mono|Nova+Oval|Nova+Round|Nova+Script|Nova+Slim|Nova+Square|Nunito|Old+Standard+TT|Open+Sans:300|Open+Sans|Open+Sans:600|Open+Sans:800|Open+Sans+Condensed:300|Orbitron|Orbitron:500|Orbitron:700|Orbitron:900|Oswald|Over+the+Rainbow|Reenie+Beanie|Pacifico|Patrick+Hand|Paytone+One|Permanent+Marker|Philosopher|Play|Playfair+Display|Podkova|Press+Start+2P|Puritan|Quattrocento|Quattrocento+Sans|Radley|Raleway:100|Redressed|Rock+Salt|Rokkitt|Ruslan+Display|Schoolbell|Shadows+Into+Light|Shanti|Sigmar+One|Six+Caps|Slackey|Smythe|Sniglet|Sniglet:800|Special+Elite|Stardos+Stencil|Sue+Elen+Francisco|Sunshiney|Swanky+and+Moo+Moo|Syncopate|Tangerine|Tenor+Sans|Terminal+Dosis+Light|The+Girl+Next+Door|Tinos|Ubuntu|Ultra|Unkempt|UnifrakturCook:bold|UnifrakturMaguntia|Varela|Varela+Round|Vibur|Vollkorn|VT323|Waiting+for+the+Sunrise|Wallpoet|Walter+Turncoat|Wire+One|Yanone+Kaffeesatz|Yeseva+One|Zeyada' rel='stylesheet' type='text/css'>
<script src="js/microne.js"></script>
<link rel="stylesheet" href="/css/app.css">

</head>
<body>
 
<div class="logoPatra"><a class="logoLink" href="/"><img style="height: 100%" src="image/logo/patra_header.png"><div class="centered">Patra</div></a></div>
    <div>
      <div>
        <div id='editControls'>
          <div>
            <button data-role='undo'  id="undoButton"><i class='fa fa-undo'></i></button>
            <button data-role='redo'  id="redoButton"><i class='fa fa-repeat'></i></button>
            <button data-role='bold'  id="boldButton"><i class='fa fa-bold'></i></button>
            <button data-role='italic'  id="itallicButton"><i class='fa fa-italic'></i></button>
            <button data-role='underline'  id="underlineButton"><i class='fa fa-underline'></i></button>
            <button data-role='strikeThrough'  id="strikeThroughButton"><i class='fa fa-strikethrough'></i></button>
            <button data-role='justifyLeft'  id="justifyLeftButton"><i class='fa fa-align-left'></i></button>
            <button data-role='justifyCenter'  id="justifyCenterButton"><i class='fa fa-align-center'></i></button>
            <button data-role='justifyRight'  id="justifyRightButton"><i class='fa fa-align-right'></i></button>
            <button data-role='justifyFull'  id="justifyFullButton"><i class='fa fa-align-justify'></i></button>
            <button data-role='indent'  id="indentButton"><i class='fa fa-indent'></i></button>
            <button data-role='outdent'  id="outdentButton"><i class='fa fa-outdent'></i></button>
            <button data-role='insertUnorderedList' id="insertUnorderedListButton" ><i class='fa fa-list-ul'></i></a>
            <button data-role='insertOrderedList'  id="insertOrderedListButton"><i class='fa fa-list-ol'></i></button>
            <select id = 'selectFontFamily' style="font-family: B612;" onChange = "return fontChange();">
              <option value="null">Font Style</option>
            </select>
            <select id = 'selectFontSize' onchange="return fontSize()" >
              <option value="null">Font Sizes</option>
              <option value="64px">Large</option>
              <option value="32px">Very Big</option>
              <option value="24px">Big</option>
              <option value="18px">Medium</option>
              <option value="12px">Small</option>
              <option value="8px">Very Small</option>
            </select>
            <button>
                <div id="foreColor" class="colorpicker-custom-anchor colorpicker-circle-anchor">
                    <i class='fa fa-tint'></i>
                </div>
            </button>
            <button>
                <div id="backColor" class="colorpicker-custom-anchor colorpicker-circle-anchor">
                    <i class='fa fa-square'></i>
                </div>
            </button>
            <a id="myBtn" ><i class='fa fa-file-image-o'></i></a>
            <a id="myBtnEmbed" onclick="changeSound()"><i class='fa fa-music'></i></a>
          </div>
        </div>
        <textarea style="display: none;" id='output'></textarea>
      </div>
    </div>
    <style type="text/css">



</style>
<div  style="position: absolute; top: 55%; left: 65%">
<div class="paper" >
<button class="submitBtn" id="claimYourDay" onclick="submitted()" style="cursor: pointer;"><span>Claim your day</span></button>
<div class="date" id="date">Date:2020/10/01</div>
  <div class="lines">
    <div id="text" class="text" contenteditable spellcheck="true">
      Dear Diary,<br /><br />
      My Day was...

      </div>
  </div>

</div>
<div id="front_papers" class="front_papers" >
  <a id="readLinkArrow" href="/read/1" style="position: absolute;top: 40px;left: -40px; width: 40px;height: 40px;"><small style="position: absolute;top: 35%;left: 30%;font-size: 10px;text-decoration: none;color: white;">Read</small><svg width="40px" height="40px" version="1.1" viewBox="0 0 193.12 63.765" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
 <g transform="translate(-17.927 -89.826)">
  <path d="m210.15 89.958-151.19-1e-6 -40.821 27.97 40.821 35.53h151.95z" fill="#ff141e" stroke="#000" stroke-width=".26458px"/>
 </g>
</svg></a>
<div class="front_title">Pictures and Memories</div>


  <div class="lines">
    <div id="front_text" class="front_text" >
      <div class="item_direction" >
        <div class="wrapper" id="item_direction_frontPage">

          

        </div>
        </div>

      </div>
      </div>
  </div>

</div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <span class="close"></span>
    <p>Upload Your Image here and then paste it's direct link bellow. <a target="_blank" href="https://imgbb.com/">https://imgbb.com/</a></p>
    <input id="imageLink" type="text" style="width: 100%;height: 40px;font-size: 30px;" placeholder="Image link here (https://i.ibb.co/L5FPdb1/image.png)" name="">
    <input oninput ="writingDescription('imageDescription')" id="imageDescription" type="text" style="width: 80%;height: 40px;font-size: 30px;" placeholder="Image Description" name="">
    <button style="width: 15%;height: 40px;font-size: 30px;background-color: lightgreen;border: none;border-radius: 5px;color: white;" onclick="imageOnFrontPage()">Submit</button>
    <span style="display: block;"><small id="imageDescriptionLeftCharacter">22 characters left</small></span>
    <hr>
    <p>Learn how to get embed code.<a target="_blank" href="/learn/embed/input">Here</a></p>
    <input id="embedLink" type="text" style="width: 100%;height: 40px;font-size: 30px;" placeholder="Only Embed Code here" name="">
    <input oninput ="writingDescription('embedDescription')" id="embedDescription" type="text" style="width: 80%;height: 40px;font-size: 30px;" placeholder="Embed Description" name="">
    <button style="width: 15%;height: 40px;font-size: 30px;background-color: lightgreen;border: none;border-radius: 5px;color: white;" onclick="iframeOnFrontPage()">Submit</button>
    <span style="display: block;"><small id="embedDescriptionLeftCharacter">22 characters left</small></span>
  </div>

</div>

<div id="myModalEmbed" class="modalEmbed">

  <!-- Modal content -->
  <div class="modal-contentEmbed">

    <span class="closeEmbed">x</span>
    <p>Upload Your music here and then paste it's direct link bellow. <a target="_blank" href="https://www.mediafire.com/upgrade/registration.php?pid=66">mediafire.com</a></p>
    <input id="musicLink" type="text" style="width: 80%;height: 40px;font-size: 30px;" placeholder="Image link here (https://srv-store5.gofile.io/download/XHhIVm/defaultOfMySiteThatIsCoolAndEpicAtTheSameTime.mp3)" name="">
    <button style="width: 15%;height: 40px;font-size: 30px;background-color: lightgreen;border: none;border-radius: 5px;color: white;" onclick="changeSound()">Submit</button>
  </div>

</div>


<div id="player">
</div>

<script type="text/javascript">

  tippy('#undoButton', {
    content: "Undo",
  });
  tippy('#redoButton', {
    content: "Redo",
  });
  tippy('#boldButton', {
    content: "Bold",
  });
  tippy('#itallicButton', {
    content: "Itallic",
  });
  tippy('#underlineButton', {
    content: "Underline",
  });
  tippy('#strikeThroughButton', {
    content: "Strike Through",
  });

tippy('#justifyLeftButton', {
    content: "Justify Left",
  });
tippy('#justifyCenterButton', {
    content: "Justify Center",
  });
tippy('#justifyRightButton', {
    content: "Justify Right",
  });
tippy('#justifyFullButton', {
    content: "Justify Full",
  });
tippy('#indentButton', {
    content: "Indent",
  });
tippy('#outdentButton', {
    content: "Outdent",
  });
tippy('#insertUnorderedListButton', {
    content: "Unordered List",
  });
tippy('#insertOrderedListButton', {
    content: "Ordered List",
  });
tippy('#insertOrderedListButton', {
    content: "Ordered List",
  });
tippy('#selectFontFamily', {
    content: "Fonts",
  });
tippy('#selectFontSize', {
    content: "Font Size",
  });
tippy('#foreColor', {
    content: "Text Color",
  });
tippy('#backColor', {
    content: "Background Color",
  });
tippy('#myBtn', {
    content: "Insert Image/ Embed",
  });
tippy('#myBtnEmbed', {
    content: "Insert Mp3",
  });
tippy('#claimYourDay', {
    content: "Stop Writing",
  });
tippy('#readLinkArrow', {
    content: "Read Diary",
  });

</script>


<script>
  musicFromUser='https://audio.jukehost.co.uk/zcrqQQtFiAsNZJKImoWWPCIlTblYthJL';
  imagesAndEmbededStuffs=[];
  var m = new Microne(document.getElementById('player'))
  m.source('https://audio.jukehost.co.uk/Pj16NZWVlmv1gupV9hpdyjQU2EKoIhZ0')

  function changeSound(){
    m.audio.currentTime=m.audio.duration;
    m.source($('#musicLink').val());
    musicFromUser=$('#musicLink').val();
  }
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

<script>
// Get the modal
var modalEmbed = document.getElementById("myModalEmbed");

// Get the button that opens the modal
var btnEmbed = document.getElementById("myBtnEmbed");

// Get the <span> element that closes the modal
var spanEmbed = document.getElementsByClassName("closeEmbed")[0];

// When the user clicks the button, open the modal 
btnEmbed.onclick = function() {
  modalEmbed.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanEmbed.onclick = function() {
  modalEmbed.style.display = "none";
}

</script>

<script type="text/javascript">

  function writingDescription(id){
    currentCharacters=document.getElementById(id).value.length;
    document.getElementById(id+"LeftCharacter").innerHTML=22-currentCharacters+" characters left";
    if (currentCharacters > 21) {
      document.getElementById(id).value=(document.getElementById(id).value.substring(0,21))
      document.getElementById(id+"LeftCharacter").innerHTML="0 characters left";
    }

  }


  var idOfElementOfFrotPage=1;

  function iframeOnFrontPage(){
    currentValue=document.getElementById("embedLink").value;
    
    if (currentValue.substring(0,7)=='<iframe') {

      var src = currentValue.split('src=')[1].split(/[ >]/)[0];
      
      $('#item_direction_frontPage').append('<div id="frontPageContent'+idOfElementOfFrotPage+'" class="item"><div class="polaroid"><div class="pin"></div><iframe style="width:100%;height:100%;border:none;" src='+src+' allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div style="width:100%;display:block;" class="caption">'+$('#embedDescription').val()+'</div><button  onclick="deleteFrontPageData('+idOfElementOfFrotPage+')" class="deleteItemFrontPage">Delete</button></div></div></div>');
      if ($('#embedDescription').val()=="") {
        imagesAndEmbededStuffs.push([src,'null','embed'])
      }else{
        imagesAndEmbededStuffs.push([src,$('#embedDescription').val(),'embed'])
      }
        
        $('#embedLink').val("");
        $('#embedDescription').val("");
        idOfElementOfFrotPage +=1;
        modal.style.display = "none";
        document.getElementById("embedDescriptionLeftCharacter").innerHTML="22 characters left";
    }
    
  }


  function imageOnFrontPage(){
    currentValue=document.getElementById("imageLink").value;
      $('#item_direction_frontPage').append('<div id="frontPageContent'+idOfElementOfFrotPage+'" class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src='+currentValue+'><div style="width:100%;display:block;" class="caption">'+$('#imageDescription').val()+'<button onclick="deleteFrontPageData('+idOfElementOfFrotPage+')" class="deleteItemFrontPage">Delete</button></div></div></div>');
      if ($('#imageDescription').val()=="") {
        imagesAndEmbededStuffs.push([$('#imageLink').val(),'null','image']);
      }else{
        imagesAndEmbededStuffs.push([$('#imageLink').val(),$('#imageDescription').val(),'image']);
      }

      $('#imageLink').val("");
      $('#imageDescription').val("");
      idOfElementOfFrotPage +=1;
      modal.style.display = "none";
      document.getElementById("imageDescriptionLeftCharacter").innerHTML="22 characters left";


    
  }

  function deleteFrontPageData(idToBeDeleted){
    $( "#frontPageContent"+idToBeDeleted ).remove();
    console.log(imagesAndEmbededStuffs);
    imagesAndEmbededStuffs.splice(idToBeDeleted-1,1);


  }
</script>



<script type="text/javascript">
  var foreColorPicker = new ColorPicker.Default('#foreColor', {
      color: 'Black'
  });
  foreColorPicker.on('change', function(color) {
    document.execCommand('styleWithCSS', false, true);
    document.execCommand('foreColor', false, color.rgba);
  });
  var backColorPicker = new ColorPicker.Default('#backColor', {
      color: 'Black',
      anchor: {
          cssProperty: 'color'
      }
  });
  backColorPicker.on('change', function(color) {
    document.execCommand('styleWithCSS', false, true);
    document.execCommand('backColor', false, color.rgba);
  });
    /*
    Big Thanks To:
    https://developer.mozilla.org/en-US/docs/Rich-Text_Editing_in_Mozilla#Executing_Commands
    */
    $('#editControls button').click(function(e) {
      switch($(this).data('role')) {
        default:
          document.execCommand($(this).data('role'), false, null);
          break;
        }
      update_output();
    })

    $('#text').bind('blur keyup paste copy cut mouseup', function(e) {
      update_output();
    })

    function imageInsert(){
      $('#text').append('<img src="'+$('#imageLink').val()+'" />');
      $('#imageLink').val("");
      modal.style.display = "none";

    }

    function update_output() {
      $('#output').val($('#text').html());
    }

    function updateFromimg(){
      $('#text').html($('#output').val());
      $( "#resizable" ).resizable();
    }
  var fonts = ["B612","Delius Swash Caps","Montez","Lobster","Josefin Sans","Shadows Into Light","Pacifico","Amatic SC", "Orbitron", "Rokkitt","Righteous","Dancing Script","Bangers","Chewy","Sigmar One","Architects Daughter","Abril Fatface","Covered By Your Grace","Kaushan Script","Gloria Hallelujah","Satisfy","Lobster Two","Comfortaa","Cinzel","Courgette","Aclonica","Allan","Annie Use Your Telescope","Anonymous Pro","Allerta Stencil","Allerta","Amaranth","Anton","Architects Daughter","Arimo","Artifika","Arvo","Asset","Astloch","Bangers","Bentham","Bevan","Bigshot One","Bowlby One","Bowlby One SC","Brawler","Buda:300","Cabin","Calligraffitti","Candal","Cantarell","Cardo","Carter One","Caudex","Cedarville Cursive","Cherry Cream Soda","Chewy","Coda","Coming Soon","Copse","Corben","Cousine","Covered By Your Grace","Crafty Girls","Crimson Text","Crushed","Cuprum","Damion","Dancing Script","Dawning of a New Day","Didact Gothic","Droid Sans","Droid Serif","EB Garamond","Expletus Sans","Fontdiner Swanky","Forum","Francois One","Geo","Give You Glory","Goblin One","Goudy Bookletter 1911","Gravitas One","Gruppo","Hammersmith One","Holtwood One SC","Homemade Apple","Inconsolata","Indie Flower","Irish Grover","Istok Web","Josefin Sans","Josefin Slab","Judson","Jura","Just Another Hand","Just Me Again Down Here","Kameron","Kenia","Kranky","Kreon","Kristi","La Belle Aurore","Lato","League Script","Lekton","Limelight","Lobster","Lobster Two","Lora","Love Ya Like A Sister","Loved by the King","Luckiest Guy","Maiden Orange","Mako","Maven Pro","Maven Pro:900","Meddon","MedievalSharp","Megrim","Merriweather","Metrophobic","Michroma","Miltonian Tattoo","Miltonian","Modern Antiqua","Monofett","Molengo","Mountains of Christmas","Muli:300","Muli","Neucha","Neuton","News Cycle","Nixie One","Nobile","Nova Cut","Nova Flat","Nova Mono","Nova Oval","Nova Round","Nova Script","Nova Slim","Nova Square","Nunito","Old Standard TT","Open Sans:300","Open Sans","Open Sans:600","Open Sans:800","Open Sans Condensed:300","Orbitron","Orbitron:500","Orbitron:700","Orbitron:900","Oswald","Over the Rainbow","Reenie Beanie","Pacifico","Patrick Hand","Paytone One","Permanent Marker","Philosopher","Play","Playfair Display","Podkova","Press Start 2P","Puritan","Quattrocento","Quattrocento Sans","Radley","Raleway:100","Redressed","Rock Salt","Rokkitt","Ruslan Display","Schoolbell","Shadows Into Light","Shanti","Sigmar One","Six Caps","Slackey","Smythe","Sniglet","Sniglet:800","Special Elite","Stardos Stencil","Sue Elen Francisco","Sunshiney","Swanky and Moo Moo","Syncopate","Tangerine","Tenor Sans","Terminal Dosis Light","The Girl Next Door","Tinos","Ubuntu","Ultra","Unkempt","UnifrakturCook:bold","UnifrakturMaguntia","Varela","Varela Round","Vibur","Vollkorn","VT323","Waiting for the Sunrise","Wallpoet","Walter Turncoat","Wire One","Yanone Kaffeesatz","Yeseva+One","Zeyada"];
var string = "";
var select = document.getElementById("selectFontFamily")
for(var a = 0; a < fonts.length ; a++){
  var opt = document.createElement('option');
  opt.value = opt.innerHTML = fonts[a];
  opt.style.fontFamily = fonts[a];
  select.add(opt);
}

  function fontSize(){
    var select = document.getElementById("selectFontSize");
    if (select.value != 'null') {
      document.execCommand("fontSize", false, "7");
      try {
        var fontElements = window.getSelection().anchorNode.parentNode
        fontElements.removeAttribute("size");
        fontElements.style.fontSize = select.value;
      }
      catch(err) {
        alert('Select Before you use this.');
      }
      select.selectedIndex=0;
      // document.execCommand('formatBlock', false, select.value);
    }
    
  }

  function fontChange(){
    var select = document.getElementById("selectFontFamily");
    select.style.fontFamily = select.value;
    if (select.value != 'null') {
      try {
        document.execCommand("fontName", false, select.value);
      }
      catch(err) {
        alert('Select Before you use this.');
      }
      select.selectedIndex=0;
  }
}
</script>

<script type="text/javascript">
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
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
  $.notify('Happy to see you!!', {
    style: 'happyblue',
    className: 'base',
    position:'bottom left',
  });
    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth()+1; 
    var yyyy = today.getFullYear();
    if(dd<10) 
    {
        dd='0'+dd;
    } 

    if(mm<10) 
    {
        mm='0'+mm;
    } 
    document.getElementById('date').innerHTML='Date:'+ yyyy+'/'+mm+'/'+dd;


    function submitted() {
      var elem=document.getElementById('text').innerHTML;
      var date=document.getElementById('date').innerHTML;
      if (imagesAndEmbededStuffs.length == 0) {
        listOfImagesAndEmbeds='null';
      }else{
        listOfImagesAndEmbeds=imagesAndEmbededStuffs;
      }
      if (musicFromUser=='https://download1472.mediafire.com/1s561d3t55fg/qptrnb9tn02b3qv/defaultOfMySiteThatIsCoolAndEpicAtTheSameTime.mp3' ) {
        audioFileToSend="https://download851.mediafire.com/hhgnhzw5e9jg/v8dwkudm6g90e5q/You+hadn%5C%27t+kept+any+audio+links+on+this+day.mp3";
      }else{
        audioFileToSend=musicFromUser;
      }
      var id="<?php echo($id) ?>"
      $.ajax({

       type:'POST',

       url:'/writediary',

       data:{context: elem,date:date,id:id,ImagesAndEmbeds:listOfImagesAndEmbeds,audiofile:audioFileToSend},

       success:function(data){
          // console.log(data);
          window.location.href = "/read/new"

       }

      });
    }
</script>
</body>
</html>

