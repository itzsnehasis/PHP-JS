<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <svg width = "100" height = "100">
      <circle cx= "50" cy = "50" r = "40" id = "on_color" />
    </svg>
    <button type="button" onclick = "documnet.getElementByID('on_color').fill='red'">click</button>
  </body>
</html>
<style>

  #on_color{
    fill: green;
  }

</style>
