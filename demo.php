<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
       
        label{
            position: absolute;
            width: 45px;
            height: 22px;
            right: 20px;
            top: 20px;
            border: 2px solid;
            border-radius: 20px;
        }
        label:before{
            position: absolute;
            content: '';
            width:20px;
            height: 20px;
            left: 1px;
            top: 1px;
            border-radius: 50%;
            background: #000;
            cursor: pointer;
            transition: 0.4s;
        }
        label.active:before{
            left: 24px;
            background: #fff;
        }
        body.night{
            background: #000;
            color: #fff;
        }
        @media screen and (min-width:900px) {
          .respon{
            display: flex;
          }
          img{
            height:50%;
            width:auto;
            padding-top: 3vh;
            padding-right: 5%;
          }
          p{
            max-width: 80%;
            line-height: 30px;
          }
        }
    </style>
</head>
<body>
  <header>
    <label  id="dark-change"></label>
  </header>
  
  
    <script>
        var content = document.getElementsByTagName('body')[0];
        var darkMode = document.getElementById('dark-change');
        darkMode.addEventListener('click', function(){
            darkMode.classList.toggle('active');
            content.classList.toggle('night');
        })
    </script>
</body>
</html>