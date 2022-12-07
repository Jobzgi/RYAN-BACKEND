<!DOCTYPE HTML>
<html>
	<head>
		<title>Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="http://localhost/evitrine/public/css/main.css" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>
	<body class="subpage" style="background: #DFA8E4";>
			<header id="header" style="background: #DFA8E4">
				<div style="height:40px"  class="logo"><a style=" font-size: 1.5em; color: #ffffff; text-decoration:none; margin-left:10px; margin-right:400px;" href="http://localhost:8000/">Laravel</a></div>
			</header>
</br>
</br>
</br>
<div class="container">

  <h1  style="color: #ffffff; font-variant: small-caps; font-style: ; font-weight: 500;">{{ $product->name_pr }}</h1>
</br>
</br>
  <div class="row">
    <div class="col-md-5" >
      <img class="img-fit" src="{{ asset('/uploads/products/' . $product->image) }}" alt="" width="400px" height= "400px" style= "border-radius:15px; ">
    </div>

    <div class="col-md-4">
      <h2 class="my-3" text-black style="color: #ffffff; font-variant: small-caps; font-style: ; font-weight: 400;">Details</h2>
      
      <h4 class="my-3" style="color: #ffffff; font-variant: small-caps; font-style: ; font-weight: 400;">Description :<h4>
      <h5 class="my-3" style="color: #ffffff;font-weight: 350; ">  {{ $product->description_pr }}</h6>
		<h4 class="my-3" style="color: #ffffff; font-variant: small-caps; font-style: ; font-weight: 400;">Price : {{ $product->price }}</h4>
<button class="btn btn" id="btio">
            <a href="http://127.0.0.1:8000/products" class="btn btn-sm ">Go back</a>
        </button>
     
    </div>
    
  </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
			<script src="http://localhost/evitrine/public/assets/js/jquery.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/jquery.scrollex.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/skel.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/util.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/main.js"></script>
	</body>

</html>