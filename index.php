<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body {
			background-color:rgba(195, 195, 195, 0.61);
		}
		article {
			max-width:1024px;
			margin: 0 auto;
			border: 1px solid #f70c0c;
			padding: 10px
		}
		h1 {
			text-align:center;
		}
	</style>
</head>
<body>

<article>

	<h1>Responsive youtube video</h1>

	<iframe width="560" height="315" src="//www.youtube.com/embed/w8EXDtoGfrs" frameborder="0" allowfullscreen></iframe>

	<p>jQuery functionality wraps youtube iframe with div.youtube-video which is then used by <a href="http://fitvidsjs.com/">fitsvids.com</a> plugin to make youtube video responsive.</p>

</article>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="jquery.fitvids.js"></script>
<script src="script.js"></script>

</body>
</html>
