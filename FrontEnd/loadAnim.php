<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/loadAnimStyle.css">
  <title>blur</title>
</head>
<section class="bg"></section>
<div class="loading-text">0%</div>

<body>
  <script>
    setTimeout(() => {
      window.location.href = setURL()
    }, 7000)
  </script>

  <script>
    const loadText = document.getElementsByClassName('loading-text')[0];
    const bg = document.querySelector('.bg');

    let load = 0;

    let int = setInterval(blurring, 30);

    function blurring() {
      load++


      if (load > 99) {
        clearInterval(int)
      }

      loadText.innerText = `${load}%`
      loadText.style.opacity = scale(load, 0, 100, 1, 0);
      bg.style.filter = `blur(${scale(load, 0, 100, 30, 0)}px)`;
    }

    const scale = (number, inMin, inMax, outMin, outMax) => {
      return (number - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;

    }
    setURL = () =>{
      let template = <?php echo $_SESSION['template']?>
      let url;
      if(template === "template1"){
        url = "../Template1/template1.php";
      }else if(template === "template2"){
        url = "../Template2/template2.php";
      }else if(template === "template3"){
        url = "../Template3/template3.php";
      }else if(template === "template4"){
        url = "../Template4/template4.php";
      }else if(template === "template5"){
        url = "../Template5/template5.php";
      }else if(template === "template6"){
        url = "../Template6/template6.php";
      }
      return url;
    }
  </script>
</body>

</html>