<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Patra Padhdai</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>



<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link href='https://fonts.googleapis.com/css?family=B612|Delius+Swash+Caps|Montez|Lobster|Josefin+Sans|Shadows+Into+Light|Pacifico|Amatic+SC:700|Orbitron:400,900|Rokkitt|Righteous|Dancing+Script:700|Bangers|Chewy|Sigmar+One|Architects+Daughter|Abril+Fatface|Covered+By+Your+Grace|Kaushan+Script|Gloria+Hallelujah|Satisfy|Lobster+Two:700|Comfortaa:700|Cinzel|Courgette|Aclonica|Allan|Annie+Use+Your+Telescope|Anonymous+Pro|Allerta+Stencil|Allerta|Amaranth|Anton|Architects+Daughter|Arimo|Artifika|Arvo|Asset|Astloch|Bangers|Bentham|Bevan|Bigshot+One|Bowlby+One|Bowlby+One+SC|Brawler|Buda:300|Cabin|Calligraffitti|Candal|Cantarell|Cardo|Carter+One|Caudex|Cedarville+Cursive|Cherry+Cream+Soda|Chewy|Coda|Coming+Soon|Copse|Corben|Cousine|Covered+By+Your+Grace|Crafty+Girls|Crimson+Text|Crushed|Cuprum|Damion|Dancing+Script|Dawning+of+a+New+Day|Didact+Gothic|Droid+Sans|Droid+Serif|EB+Garamond|Expletus+Sans|Fontdiner+Swanky|Forum|Francois+One|Geo|Give+You+Glory|Goblin+One|Goudy+Bookletter+1911|Gravitas+One|Gruppo|Hammersmith+One|Holtwood+One+SC|Homemade+Apple|Inconsolata|Indie+Flower|Irish+Grover|Istok+Web|Josefin+Sans|Josefin+Slab|Judson|Jura|Just+Another+Hand|Just+Me+Again+Down+Here|Kameron|Kenia|Kranky|Kreon|Kristi|La+Belle+Aurore|Lato|League+Script|Lekton|Limelight|Lobster|Lobster+Two|Lora|Love+Ya+Like+A+Sister|Loved+by+the+King|Luckiest+Guy|Maiden+Orange|Mako|Maven+Pro|Maven+Pro:900|Meddon|MedievalSharp|Megrim|Merriweather|Metrophobic|Michroma|Miltonian+Tattoo|Miltonian|Modern+Antiqua|Monofett|Molengo|Mountains+of+Christmas|Muli:300|Muli|Neucha|Neuton|News+Cycle|Nixie+One|Nobile|Nova+Cut|Nova+Flat|Nova+Mono|Nova+Oval|Nova+Round|Nova+Script|Nova+Slim|Nova+Square|Nunito|Old+Standard+TT|Open+Sans:300|Open+Sans|Open+Sans:600|Open+Sans:800|Open+Sans+Condensed:300|Orbitron|Orbitron:500|Orbitron:700|Orbitron:900|Oswald|Over+the+Rainbow|Reenie+Beanie|Pacifico|Patrick+Hand|Paytone+One|Permanent+Marker|Philosopher|Play|Playfair+Display|Podkova|Press+Start+2P|Puritan|Quattrocento|Quattrocento+Sans|Radley|Raleway:100|Redressed|Rock+Salt|Rokkitt|Ruslan+Display|Schoolbell|Shadows+Into+Light|Shanti|Sigmar+One|Six+Caps|Slackey|Smythe|Sniglet|Sniglet:800|Special+Elite|Stardos+Stencil|Sue+Elen+Francisco|Sunshiney|Swanky+and+Moo+Moo|Syncopate|Tangerine|Tenor+Sans|Terminal+Dosis+Light|The+Girl+Next+Door|Tinos|Ubuntu|Ultra|Unkempt|UnifrakturCook:bold|UnifrakturMaguntia|Varela|Varela+Round|Vibur|Vollkorn|VT323|Waiting+for+the+Sunrise|Wallpoet|Walter+Turncoat|Wire+One|Yanone+Kaffeesatz|Yeseva+One|Zeyada' rel='stylesheet' type='text/css'>
<script src="/js/microne.js"></script>

</head>
<link rel="stylesheet" href="/css/app.css">

<body>
<div class="logoPatra"><a class="logoLink" href="/"><img style="height: 100%" src="/image/logo/patra_header.png"><div class="centered">Patra</div></a></div>
<div class="rightHover"  id="Next">
 <span>Next</span>
</div>
<div class="leftHover" id="Previous">
 <span>Previous</span>
</div>
<audio id="myAudio">
  <source src="https://audio.jukehost.co.uk/wlXU5Y91RXKke85jjWgraHS14bErRcuH" type="audio/mpeg">
</audio>
<input style="display: none;" type="text" id="datepicker" class="calendar">
<div  style="position: absolute; top: 55%; left: 65%">

<div class="paper" >
<button class="submitBtn" id="submitBtn" onclick="location.href = '/write';" style="cursor: pointer;"><span>Add today's Journey</span></button>
<div class="date" id="date"><?php echo " ".$pageData[0]->date; ?></div>
  <div class="lines">
    <div id="text" class="text" >
      <?php echo $pageData[0]->context; ?>

      </div>
  </div>

</div>
<div id="front_papers" class="front_papers" >
<a id="readLinkArrow" href="/edit" style="position: absolute;top: 40px;left: -40px; width: 40px;height: 40px;"><small style="position: absolute;top: 35%;left: 30%;font-size: 10px;text-decoration: none;color: white;">Edit</small><svg width="40px" height="40px" version="1.1" viewBox="0 0 193.12 63.765" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
 <g transform="translate(-17.927 -89.826)">
  <path d="m210.15 89.958-151.19-1e-6 -40.821 27.97 40.821 35.53h151.95z" fill="#ff141e" stroke="#000" stroke-width=".26458px"/>
 </g>
</svg></a>
<div class="front_title">Pictures and Memories</div>
  <div class="lines">
    <div id="front_text" class="front_text" >
      <div class="item_direction" >
        <div class="wrapper" id="item_direction_frontPage">

          <?php 
            $arrayOfImagesAndEmbeds = explode("/|||/", $pageData[0]->imagesAndEmbeds);
            foreach ($arrayOfImagesAndEmbeds as $key => $value) {
              if($value != 'null'){
                $mainDataOfImagesAndEmbeds=explode('/```/', $value);
                if (str_replace(' ', '', $mainDataOfImagesAndEmbeds[2])=='image') {

                  if (str_replace(' ', '', $mainDataOfImagesAndEmbeds[1])!='null') {
                    echo '<div class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src="'.$mainDataOfImagesAndEmbeds[0].'"><div style="width:100%;display:block;" class="caption">'.$mainDataOfImagesAndEmbeds[1].'</div></div></div>';
                  }else{
                    echo '<div class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src="'.$mainDataOfImagesAndEmbeds[0].' "></div></div>';
                  }
            
                  
                }else{
                  if (str_replace(' ', '', $mainDataOfImagesAndEmbeds[1])!='null') {
                    echo '<div class="item"><div class="polaroid"><div class="pin"></div><iframe style="width: 100%;height: 100%;" src='.$mainDataOfImagesAndEmbeds[0].'frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div style="width:100%;display:block;" class="caption">'.$mainDataOfImagesAndEmbeds[1].'</div></div></div>';
                  }else{
                    echo '<div class="item"><div class="polaroid"><div class="pin"></div><iframe style="width: 100%;height: 100%;" src="'.$mainDataOfImagesAndEmbeds[0].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>';
                  }
                }
              }else{
                echo '<div class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/aed6e7fd-444f-4769-b0a7-c422c8fd813c/dbrwhsu-7c49f74a-6e03-461e-bdde-50a9bf242d31.jpg/v1/fill/w_1024,h_745,q_75,strp/move_along_nothing_to_see_here_yard_sign_by_noberet_dbrwhsu-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD03NDUiLCJwYXRoIjoiXC9mXC9hZWQ2ZTdmZC00NDRmLTQ3NjktYjBhNy1jNDIyYzhmZDgxM2NcL2Ricndoc3UtN2M0OWY3NGEtNmUwMy00NjFlLWJkZGUtNTBhOWJmMjQyZDMxLmpwZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.Cecg2ZK5XcozTrJpEaz7gWXSptmVneCgKFueKNUmZUc"><div style="width:100%;display:block;" class="caption">Sad U have No Pic.</div></div></div>';
              }
              
            }
           ?>
          

        </div>
        </div>

      </div>
      </div>
  </div>

</div>
</div>


<div id="player"></div>
<script>
  var m = new Microne(document.getElementById('player'))
  m.source('<?php echo $pageData[0]->audio; ?>')

</script>
<script type="text/javascript">
  tippy('#readLinkArrow', {
    content: "Edit First Page",
  });
  tippy('.ui-datepicker-trigger', {
    content: "Edit First Page",
  });
  tippy('#submitBtn', {
    content: "Write Today's Day To Your Diary",
  });
  gotFilesHigher=false;
  gotFileslower=false;
  dataOfDiary=[]

  allDates=[]
  var id="<?php echo $pageData[0]->id; ?>";
  oneHigher=parseInt(id)+1;
  oneLower=parseInt(id)-1;

  $.get("/senddates", function(data, status){
      allDates=data.data['dates'].split("/```/");

        function enableAllTheseDays(date) {
            var sdate = $.datepicker.formatDate( 'yy/m/d', date)
            if($.inArray(sdate, allDates) != -1) {
                return [true];
            }
            return [false];
        }

        $('#datepicker').datepicker({
          showOn: "button",
          buttonImage: "https://www.flaticon.com/svg/static/icons/svg/42/42314.svg",
          buttonImageOnly: true,
          buttonText: "Select date",
          dateFormat: 'yy/m/d',
          beforeShowDay: enableAllTheseDays,
          onSelect: function(dateText, inst) {
            window.location.href = "/getPage?date="+dateText;

          }
        });
      console.log(allDates);

  });

  $.get("/givemediaryData/"+id, function(data, status){
      gotData={'id':data.data[0]['id'],'page_no':data.data[0]['page_id'],'date':data.data[0]['date'],'context':data.data[0]['context'],'imagesAndEmbeds':data.data[0]['imagesAndEmbeds'],'audio':data.data[0]['audio']};
      dataOfDiary[data.data[0]['page_id']]=gotData;

  });


  $.get("/givemediaryData/"+oneHigher, function(data, status){
    if (data.data != "NA") {
      gotData={'id':data.data[0]['id'],'page_no':data.data[0]['page_id'],'date':data.data[0]['date'],'context':data.data[0]['context'],'imagesAndEmbeds':data.data[0]['imagesAndEmbeds'],'audio':data.data[0]['audio']};
      dataOfDiary[data.data[0]['page_id']]=gotData;
    }else{
      dataOfDiary[oneHigher]='NA';
    }
    gotFilesHigher=true;
    
  });
  $.get("/givemediaryData/"+oneLower, function(data, status){
    if (data.data != "NA") {
      gotData={'id':data.data[0]['id'],'page_no':data.data[0]['page_id'],'date':data.data[0]['date'],'context':data.data[0]['context'],'imagesAndEmbeds':data.data[0]['imagesAndEmbeds'],'audio':data.data[0]['audio']};
      dataOfDiary[data.data[0]['page_id']]=gotData;
    }else{
      dataOfDiary[oneLower]='NA';
    }
    gotFileslower=true;
    
  });
  console.log(dataOfDiary);
</script>


<script type="text/javascript">
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
  $.notify('Use ← and → keys to change page', {
    style: 'happyblue',
    className: 'base',
    position:'bottom left',
  });

    function submitted() {
        var elem=document.getElementById('text').innerHTML;
        console.log(elem);
    }


    function totalImagesAndEmbeds(item){
      totalFiles=item.split("/```/");
      console.log(totalFiles);
      if (totalFiles[0].trim()!='null') {
        if (totalFiles[2].trim()=='image') {
          if (totalFiles[1].trim()!='null') {
            $('#item_direction_frontPage').append('<div class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src='+totalFiles[0]+'><div style="width:100%;display:block;" class="caption">'+totalFiles[1]+'</div></div></div>');
          }else{
            $('#item_direction_frontPage').append('<div class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src='+totalFiles[0]+'></div></div>');
          }
          
        }else{
          if (totalFiles[1].trim()!='null') {
            $('#item_direction_frontPage').append('<div class="item"><div class="polaroid"><div class="pin"></div><iframe style="width:100%;height:100%;border:none;" src='+totalFiles[0]+' allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div style="width:100%;display:block;" class="caption">'+totalFiles[1]+'</div></div></div>');
          }else{
            $('#item_direction_frontPage').append('<div class="item"><div class="polaroid"><div class="pin"></div><iframe style="width:100%;height:100%;border:none;" src='+totalFiles[0]+' allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>');
          }
        }
      }else{
        $('#item_direction_frontPage').append('<div class="item"><div class="polaroid"><div class="pin"></div><img style="width:100%;height:100%;border:none;" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/aed6e7fd-444f-4769-b0a7-c422c8fd813c/dbrwhsu-7c49f74a-6e03-461e-bdde-50a9bf242d31.jpg/v1/fill/w_1024,h_745,q_75,strp/move_along_nothing_to_see_here_yard_sign_by_noberet_dbrwhsu-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD03NDUiLCJwYXRoIjoiXC9mXC9hZWQ2ZTdmZC00NDRmLTQ3NjktYjBhNy1jNDIyYzhmZDgxM2NcL2Ricndoc3UtN2M0OWY3NGEtNmUwMy00NjFlLWJkZGUtNTBhOWJmMjQyZDMxLmpwZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.Cecg2ZK5XcozTrJpEaz7gWXSptmVneCgKFueKNUmZUc"><div style="width:100%;display:block;" class="caption">Sad U have No Pic.</div></div></div>');
      }
    }



    function showDataFinalPoint(){

        oneHigher=parseInt(id)+1;
        oneLower=parseInt(id)-1;
        if (oneHigher in dataOfDiary) {
          
        }else{
          $.get("/givemediaryData/"+oneHigher, function(data, status){
            if (data.data != "NA") {
              gotData={'id':data.data[0]['id'],'page_no':data.data[0]['page_id'],'date':data.data[0]['date'],'context':data.data[0]['context'],'imagesAndEmbeds':data.data[0]['imagesAndEmbeds'],'audio':data.data[0]['audio']};
              dataOfDiary[data.data[0]['page_id']]=gotData;
              console.log(dataOfDiary)
            }else{
              dataOfDiary[oneHigher]='NA';
            }
            gotFilesHigher=true;
            
          });
        }

        if (oneLower in dataOfDiary) {

        }else{
          $.get("/givemediaryData/"+oneLower, function(data, status){
            if (data.data != "NA") {
              gotData={'id':data.data[0]['id'],'page_no':data.data[0]['page_id'],'date':data.data[0]['date'],'context':data.data[0]['context'],'imagesAndEmbeds':data.data[0]['imagesAndEmbeds'],'audio':data.data[0]['audio']};
              dataOfDiary[data.data[0]['page_id']]=gotData;
              console.log(dataOfDiary);
            }else{
              dataOfDiary[oneLower]='NA';
            }
            gotFileslower=true;
            
          });
        }

        totalFiles=dataOfDiary[id]['imagesAndEmbeds'].split("/|||/");
        totalFiles.forEach(totalImagesAndEmbeds)
        m.audio.currentTime=m.audio.duration;
        m.source(dataOfDiary[id]['audio']);
        if (window.history.replaceState) {
           //prevents browser from storing history with each change:
           window.history.replaceState({},null, '/read/'+id);
        }
        $('#date').html(' ');
        $('#date').append(' '+dataOfDiary[id]['date']);
        $('#text').html(' ');
        $('#text').append(dataOfDiary[id]['context']);
        $('#text').show( "slow" );
        $("#item_direction_frontPage").show("slide",'fast');
        document.getElementById("myAudio").play();
    }


    function getDataAboutDiary(side){
        if (id in dataOfDiary) {
          if (dataOfDiary[id] != 'NA') {
            gotFilesHigher=false;
            gotFileslower=false;

            $('#text').hide( "fast" );
            $("#item_direction_frontPage").hide("slide",function(){
              done:showDataFinalPoint();
            });
            $('#item_direction_frontPage').html(' ');
            document.getElementById("myAudio").play();


          }else{
            console.log(id);
            console.log(dataOfDiary);
            id= parseInt(id)-(side);
            $.notify('No more Page Found.', {
              style: 'happyblue',
              className: 'base',
              position:'bottom left',
            });
          }
        }else{
          console.log(id);
          console.log(dataOfDiary);
          id= parseInt(id)-(side);
          notifyTooFast();
        }

    }

 function notifyTooFast(){
  $.notify('Too Fast!!', {
    style: 'happyblue',
    className: 'base',
    position:'bottom left',
  });
}

    $(window).bind('keydown', function(e){
      
      if (e.keyCode==37){
        id =parseInt(id)-1;
        getDataAboutDiary(-1);
      }else if (e.keyCode==39){
        
        id =parseInt(id)+1;
        getDataAboutDiary(1);
      }
    });
    $("#Next").click(function() {                                            
        id =parseInt(id)+1;
      getDataAboutDiary(1);
    });
    $("#Previous").click(function() {                                            
        id =parseInt(id)-1;
        getDataAboutDiary(-1);
    });
    jQuery(function(){

        
    })
</script>





</html>
