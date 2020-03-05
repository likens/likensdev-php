<!doctype html>
<html lang="en">
	<head>
		<title>
			<?php if ($title) {echo $title." // Caleb Likens // Front End Developer";} else {echo "Caleb Likens // Front End Developer";} ?>
		</title>
		<meta name="description" content="<?php echo $description ?>">
		<meta name="author" content="Caleb Likens">
		<meta name="owner" content="Caleb Likens">
		<meta name="copyright" content="&copy; <?php echo date("Y") ?> Caleb Likens">
		<meta name="viewport" content="width=device-width">
		<meta name="theme-color" content="#000000">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<style>*,:after,:before,button,input{line-height:normal}body,figure,h1,h2,h3,h4,h5,h6{margin:0}.header,.main,body{height:100%}.main:after,.main:before,.nav a:before{left:0;content:''}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}a{background:0 0;outline:0;-webkit-tap-highlight-color:rgba(255,255,255,.5);-moz-tap-highlight-color:rgba(255,255,255,.5);-o-tap-highlight-color:rgba(255,255,255,.5);-ms-tap-highlight-color:rgba(255,255,255,.5);tap-highlight-color:rgba(255,255,255,.5)}abbr[title]{border-bottom:1px dotted}strong{font-weight:700}img{border:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;-moz-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}*,:after,:before{box-sizing:border-box}::selection{background:rgba(255,255,255,.25)}::-moz-selection{background:rgba(255,255,255,.25)}html{font-family:sans-serif;font-size:62.5%;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{padding:0;width:100%;background:#000;font-size:1.6em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.bar,.bar:after,.bars:after,.block .submit,.block .text,.block .textarea,.block label,.header,.main,.nav a,.nav a:before{transition:all .2s ease}.header{overflow:auto;position:fixed;top:0;left:0;width:25rem;z-index:5000}.main{position:absolute;z-index:4000;color:#fff;width:100%;padding:0 3rem 0 25rem;font-weight:400;letter-spacing:-1px}.main .heading,.nav a{color:#fff;font-weight:700;text-transform:uppercase}.main:after,.main:before{position:fixed;width:100%;height:4rem;z-index:1000}.main:before{top:0;background:linear-gradient(to bottom,#000,transparent)}.main:after{bottom:0;background:linear-gradient(to top,#000,transparent)}.main .heading{font-size:6rem;letter-spacing:-3px;margin:0 0 4rem;line-height:1}.main>article{padding:3rem 0;width:100%;-webkit-animation:fade .5s;-moz-animation:fade .5s;animation:fade .5s}.main a{text-decoration:underline;color:#fff;padding:0 1px}.main a:hover,.nav a{text-decoration:none}.nav{position:absolute;top:0;left:0;width:25rem;z-index:5000;padding:3rem 0 0 3rem}.nav ul{margin:0;padding:0}.nav li{list-style:none;padding:0 0 .5rem}.nav a{letter-spacing:-2px;font-size:2rem;position:relative}.footer p,.result{letter-spacing:-1px}.nav a:before{width:0;height:100%;background:#FFF;position:absolute;bottom:0;z-index:-1}.footer,.social{bottom:0;left:0;z-index:5000}.nav a:hover{color:#000}.nav a:hover:before{width:100%}.nav li:first-child{padding:0 0 2rem}.nav li:first-child a{font-weight:600;font-size:3rem}.nav li:first-child span{font-size:2rem}.social{position:absolute;width:250px;padding:0 0 3rem 5rem}.social ul{margin:0;padding:0;list-style:none}.social li{display:inline-block;padding:0 0 0 1rem}.block label,.social a{display:block}.social svg{width:20px;height:20px}.social path{fill:#fff}.social a[href*=twitter]:hover path{fill:#55acee}.social a[href*=google]:hover path{fill:#dd4b39}.social a[href*=linkedin]:hover path{fill:#0976b4}.social a[href*=github]:hover path{fill:#555}.footer{position:fixed;width:100%;padding:0;text-align:right;color:#fff}.footer p{margin:0;font-size:1rem;position:absolute;bottom:1.1rem;left:6rem;font-weight:700;text-transform:uppercase}.block{position:relative}.block .text,.block .textarea{width:20rem;font-weight:300;font-size:1.8rem;margin:0 0 5px;border:none;border-bottom:1px solid #fff;background:0 0;color:transparent;resize:none;padding:0 5px;position:relative;height:30px;z-index:2000;letter-spacing:-1px}.block label{font-size:14px;position:absolute;top:0;line-height:33px;width:100%;z-index:1000;left:6px;background:#000;font-weight:500}.block .text:focus,.block .textarea:focus{padding:30px 5px 5px;height:60px;outline:0;border-color:#3498db;color:#fff;width:400px}.block .text:focus~label,.block .textarea:focus~label{color:#3498db}.block .text:valid,.block .textarea:valid{padding:30px 5px 5px;height:60px;margin:0 0 5px;border-color:#2ecc71;width:400px;color:#fff}.block .text:valid~label,.block .textarea:valid~label{color:#2ecc71}.block .textarea:focus,.block .textarea:valid{height:150px}.block .submit{display:block;background:#2ecc71;border:none;text-transform:uppercase;color:#fff;padding:0 15px;font-size:15px;height:0;margin:-5px 0 0 313px}.result,.resume p{margin:0}.block .textarea:valid~.submit{padding:5px 15px;height:30px}.subject{display:none;visibility:hidden;text-indent:-9999px;direction:ltr;color:transparent;position:absolute;left:-9999px;top:-9999px;width:0;height:0;opacity:0;z-index:-9999}.result{position:fixed;color:#fff;bottom:0;left:0;width:100%;z-index:8000;text-align:center;padding:5px 0;font-weight:700;text-transform:uppercase;font-size:14px}.result.error{background:#c0392b}.result.success{background:#2ecc71}@keyframes fade{from{opacity:0}to{opacity:1}}@-moz-keyframes fade{from{opacity:0}to{opacity:1}}@-webkit-keyframes fade{from{opacity:0}to{opacity:1}}.resume section{display:flex;padding-bottom:60px}.resume h2{margin:0;background:#fff;color:#000;padding:2px 4px;flex-shrink:0;align-self:flex-start;font-size:22px;width:130px;text-align:right}.resume .content{width:100%;border:2px solid #fff;padding:15px}.resume .job,.resume .list{padding-bottom:15px}.resume .job:last-child,.resume .list:last-child,.resume section:last-child{padding:0}.resume h3,.resume h4,.resume h5{display:inline-block;font-size:16px}.resume .info{font-weight:700;font-size:18px}.resume .info span{margin:0 5px}.resume ul{margin:10px 0}.resume li{line-height:1.3;font-size:14px}.resume .personal{display:block;text-align:left;padding-bottom:30px;font-size:30px;line-height:1.3}.resume .personal h3,.resume .personal h4{font-size:30px;line-height:1.3;margin:0}@media all and (max-width:800px){.block .text,.block .text:focus,.block .text:valid,.block .textarea,.block .textarea:focus,.block .textarea:valid,.header{width:100%}body,html{overflow:visible;height:auto}body[data-state=open] .header{height:200px}body[data-state=open] .bars .bar{-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);top:5px}body[data-state=open] .bars .bar:after{opacity:0}body[data-state=open] .bars:after{-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);top:24px}body[data-state=open] .main{opacity:.15}.header{overflow:hidden;position:absolute;height:50px}.nav,.social{width:100%;padding:0;position:relative;top:0;left:0;text-align:center}.nav ul{padding:0 0 2rem}.nav li{font-size:1.8rem}.nav li:first-child{padding:1.3rem 0 1.5rem}.nav li:first-child a{font-size:2.2rem}.nav li:first-child span{font-size:1.6rem}.main{padding:0;position:relative;height:auto}.main .heading{font-size:3.6rem;margin:0 0 1rem}.main>article{padding:6rem 1.5rem 1.5rem}.block .submit{position:absolute;right:0;bottom:-24px;margin:0}.bars{background:0 0;width:50px;padding:19px 17px 17px;position:absolute;height:50px;z-index:6000}.bars .bar{width:15px;height:2px;background:#fff;position:relative}.bars .bar:after,.bars:after{content:"";width:15px;height:2px;background:#fff;position:absolute}.bars .bar:after{top:5px;left:0}.bars:after{top:29px;left:17px}.footer,.footer p{position:relative}.footer{padding:15px 0}.footer p{width:100%;text-align:center;left:0;bottom:0}.resume section{display:block;padding-bottom:30px}.resume h2{text-align:left;width:auto;padding:4px 6px 2px;display:inline-block}}</style>
	</head>
	<body data-state="closed">
		<header class="header" role="banner">
			<div class="bars">
				<div class="bar"></div>
			</div>
			<nav class="nav" role="navigation">
				<ul>
					<li><a href="/" title="Home"><span>caleb</span>likens</a></li>
					<li><a href="/work" title="Work">work</a></li>
					<li><a href="/about" title="About">about</a></li>
					<li><a href="/resume" title="Resume">resume</a></li>
					<!-- <li><a href="/contact" title="Contact">contact</a></li> -->
				</ul>
			</nav>
			<div class="social">
				<ul>
					<li>
						<a href="//twitter.com/L1K3N5" title="Twitter" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<title>Twitter</title>
								<path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="//linkedin.com/in/CalebLikens" title="Linkedin" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<title>Linkedin</title>
								<path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="//github.com/likens" title="Github" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
								<title>Github</title>
								<path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</header>
		
		<main class="main<?php echo ' '.strtolower($title); ?>" role="main">
			<article role="article">