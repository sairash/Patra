
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous"></script>

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
  background-color: #fff;
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
  background-color: #FBF056;
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
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-width: 2px;

  border-color: black;
  
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<div class="bookbody dropdown">
    <a 
      class="book-container dropbtn"
      
      target="_blank"
      rel="noreferrer noopener"
    >
      <div class="book">
        <img
          alt="My Book"
          src="/image/noteBook/NoteBook_1.png"
          />
      </div>
      <div class="dropdown-content">
        <a href="fabric/index.html" >Make Cover</a>
        <a href="fabric/index.html" >Change Cover Color</a>
        <a href="#">Random</a>
        <a href="#">Upload</a>
      </div>
    </a>
    
</div>
<div class="rightHover" id="Next">
  <span>Write</span>
</div>
<div class="leftHover" id="Previous">
  <span>Read</span>
</div>

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
  $.notify('Click on the Book to customize it.', {
    style: 'happyblue',
    className: 'base',
    position:'top center',
  });
</script>