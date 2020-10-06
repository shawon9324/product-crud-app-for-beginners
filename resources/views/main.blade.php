<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("https://2.bp.blogspot.com/-T-X3a644KfE/XG7QMqYpP3I/AAAAAAAADbc/qxB7z2iA_m0EOtmkiLsXN2jabyKIj_NoQCPcBGAYYCw/s1600/web-design-background-montreal-1-1200x630.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <h2>LARAVEL 7 - PRODUCT CRUD-APPLICATION FOR THE BEGINNERS</h2>
<a href="{{ route('product.index')}}"><button class="btn btn-primary"><h1 style="font-size:40px"> CLICK HERE TO EXPLORE THE APPLICATION</h1></button></a>  
  <p>Md. Shahriar Karim Shawon</p>
</div>

</body>
</html>
