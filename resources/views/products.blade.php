<!DOCTYPE html>
<html>
<head>
	<title> Products </title>
	<Style>
		* {
			margin: 0;
		}

		.pc {
			display: flex;
			justify-content: space-around;
		}

		h1 {
			text-align: center;
			margin-top: 100px;
		}

	</Style>
</head>
<body>
	<div class = "pc">
	<figure>
   <p><img src="1_img.jpg" width="200" height="200"></p>
   <figcaption onclick = "go(this)"><button>Black metal products</button></figcaption>
  </figure>
    <figure>
   <p><img src="1_img.jpg" width="200" height="200"></p>
   <figcaption onclick = "go(this)"><button>Stainless metal products</button></figcaption>
  </figure>
  <figure>
   <p><img src="2_img.jpg" width="200" height="200"></p>
   <figcaption onclick = "go(this)"><button>Pipeline valve</button></figcaption>
  </figure>
</div>
<script>
	function go(element) {
		var g = element.innerText;
		switch(g) {
			case "Black metal products":
			alert("20 tons");
			break;

			case "Stainless metal products":
			alert("10 tons");
			break;

			case "Pipeline valve":
			alert("Will be in the next month");
			break;

			default:
			alert("Error!");
			break;
		}
	}
</script>
<h1> <b>Upper you can checkout if there is metal in the stock<b> </h1>
</body>
</html>