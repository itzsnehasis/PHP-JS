<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class = "block">
      Hover Me Mother Fucker!
      <div class = "tooltip">Surprise Mother Fucker ;)</div>
    </div>
  </body>
</html>

<style>

  .block{
    position        : absolute;
    padding         : 25px 10px;
    width           : 200px;
    background-color: silver;
    color           : white;
    text-align      : center;
    border-radius   : 10px;
    top             : 40%;
    left            : 40%;
  }

  .tooltip{
    position          : absolute;
    padding           : 25px 10px;
    width             : 240px;
    background-color  : black;
    color             : white;
    bottom            : 0%;
    left              : 110%;
    border-radius     : 10px;
    visibility        : hidden;
  }

  @keyframes tooltip_anim {
    from {transform: scale(0.5,0.5);}
    to   {transform: scale(1,1);}
  }

  .block:hover .tooltip{
    visibility        : visible;
    animation-name    : tooltip_anim;
    animation-duration: 0.5s;
  }

  .block .tooltip::after{
    content     : "";
    position    : absolute;
    border-width: 10px;
    border-style: solid;
    border-color: transparent black transparent transparent;
    top         : 40%;
    right       : 100%;
  }

</style>
