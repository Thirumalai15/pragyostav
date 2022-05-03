<!doctype html>
<html lang="en">

<head>
    <title>Pragyotsav&mdash; A National Level Technical Festival</title>
    <link rel="icon" type="image/xl-icon" href="{{ url_for('static',    filename='images/prag.png') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ url_for('static',    filename='css/vendor/bootstrap.min.css') }}">
   
    <style>
      
        body {
          font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;/* */
 color:#fffec1;
  font-size: 16px;
  line-height: 30px;
  text-align: center;
  font-weight: 300;
  position: relative;
  background-color:#171717;
}

body:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.5);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  z-index: 8;
}.button-34 {
  background: gold;
  border-radius: 999px;
  box-shadow: goldenrod 0 10px 20px -10px;
  box-sizing: border-box;
  color: #171717;
  cursor: pointer;
  font-family:'Times New Roman', Times, serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}
.titl {
            max-width: 40%;
            height: auto;

        
        }

        @media (max-width: 991.98px) {
            .titl {
                max-width: 80%;
            }
        }
.checkmark{
  box-shadow: #FFDF33;
}
        h1 {
          color: #FFDF33;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        li {
            font-size:20px;
          margin-left: -20px;
        }
      i {
        color: goldenrod;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background:transparent;
        padding: 60px;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
</head>
   
    <body>
      <div style="text-align: center; margin-bottom: -100px;">
        <img class="titl" src="{{url_for('static', filename='images/titlelogo.webp')}}" alt="Pragyotsav 2022"
            onerror="this.onerror=null;this.src='static/images/titlelogo.png';">

    </div>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Listed Successfully!!</h1> 
        <ul style="list-style-type: none; ">
          <li>Registration Id :&nbsp; {{reg}}</li>
          <li>Name :&nbsp;{{name}} </li>
          <li>Event :&nbsp;{{ename}} </li>
            <li>Kindly take record the above details for future references!!
            </li>
        </ul>
        <br>
        <a href="{{ url_for('home') }}"class="button-34">Redirect-Home</a>
      </div>
    </body>
</html>