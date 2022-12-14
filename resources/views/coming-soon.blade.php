<!DOCTYPE html>
<html>
  <head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RY08JG00FC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RY08JG00FC');
</script>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9420042936331392"
     crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  <style>
  body, html {
    height: 100%;
    margin: 0;
  }

  .bgimg {
    background-image: url({{ asset_url("bg.jpg") }});
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    /* font-family: "Courier New", Courier, monospace; */
    font-family: 'Permanent Marker', cursive;
    font-size: 25px;
  }

  .topleft {
    position: absolute;
    top: 0;
    left: 16px;
  }

  .bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
  }

  .middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  hr {
    margin: auto;
    width: 40%;
  }
  </style>
</head>
<body>

<div class="bgimg">
  <!-- <div class="topleft">
    <p>Logo</p>
  </div> -->
  <div class="middle">
    <h1>Something exciting is cooking...</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <!-- <div class="bottomleft">
    <p>Some text</p>
  </div> -->
</div>

<!-- Tiles -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9420042936331392"
     data-ad-slot="2772835822"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-9420042936331392"
     data-ad-slot="8344688717"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 15, 2022 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
