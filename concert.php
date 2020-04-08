<!DOCTYPE html>
<html>
<head>
	<title>Слайдер на CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
       
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="demo-images/hotpng.com.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        
	
</head>
<body class="gallery">
        <div id="sidebar" class="sidebar">
            <div class="menu-left-part">
                <div class="search-holder">
                    <label>
                        <input type="search" class="search-field" placeholder="Type here to search..." value="" name="s" title="Search for:">
                    </label>
                </div>
                <div class="site-info-holder">
                    <h1 class="site-title">Осень</h1>
                    <p class="site-description">
                        	
Хватит веселиться, хватит горевать
Можно расходиться, можно забывать
Кто бы что ни сделал, кем бы кто не стал
Никто не проиграл.
                    </p>
                </div>
                <?php require'leftsidebartml.php'; ?>
	<div class="all">
		<input checked type="radio" name="respond" id="desktop">
			<article id="slider">
					<input checked type="radio" name="slider" id="switch1">
					<input type="radio" name="slider" id="switch2">
					<input type="radio" name="slider" id="switch3">
					<input type="radio" name="slider" id="switch4">
					<input type="radio" name="slider" id="switch5">
				<div id="slides">
					<div id="overflow">
						<div class="image">
							<article><img src="demo-images/1.jpg"></article>
							<article><img src="demo-images/2.jpg"></article>
							<article><img src="demo-images/3.jpg"></article>
							<article><img src="demo-images/4.jpg"></article>
							<article><img src="demo-images/5.jpg"></article>
						</div>
					</div>
				</div>
				<div id="controls">
					<label for="switch1"></label>
					<label for="switch2"></label>
					<label for="switch3"></label>
					<label for="switch4"></label>
					<label for="switch5"></label>
				</div>
				<div id="active">
					<label for="switch1"></label>
					<label for="switch2"></label>
					<label for="switch3"></label>
					<label for="switch4"></label>
					<label for="switch5"></label>
				</div>
			</article>
	</div>
</body>
</html>