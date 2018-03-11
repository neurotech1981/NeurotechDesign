<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Neurotech Design</title>
<!-- <link href="css/boilerplate.css" rel="stylesheet" type="text/css"> -->

<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/tabs.css" />
<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
        <script src="js/modernizr.custom.js"></script>

	<script src="js/responsiveImg.js">
    $("img").responsiveImg();
    breakpoints : 
    "_small":360,
    "_medium":780,
    "_large":900
    },
    srcAttribute : "src",
    pathToPHP : "js",
    createNewImages : true,
    jpegQuality : 90,
    callback:false 
    </script>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



</head>
<body>	
        <svg class="hidden">
            <defs>
                <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
            </defs>
        </svg>
        
<script src="js/respond.min.js"></script>
         <header class="codrops-header">
<!--<div class="wrap">
    <div class="outerdiv">
    <div id="canvas" class="div1">

    </div>    
    <div class="div2">
        <br><h1> NEUROTECH DESIGN <span>Webutvikling for små / mellomstore bedrifter og privatpersoner</span></h1>
    </div>
    </div>
</div>-->
   
<script> $("#img2").responsiveImg();</script><br>
<center><img id="img2" src="images/logo_01.png" style="max-width:100%;" alt=""/></center>
            </header>
        
            <section>
                <div class="tabs tabs-style-bar">
                    <nav>
                        <ul>
                            <li><a href="#section-bar-1" class="icon icon-home3"><span>Fremside</span></a></li>
                            <li><a href="#section-bar-2" class="icon icon-users"><span>Klienter</span></a></li>
                            <li><a href="#section-bar-3" class="icon icon-wrench"><span>Tjenester</span></a></li>
                            <li><a href="#section-bar-4" class="icon icon-info2"><span>Om oss</span></a></li>
                            <li><a href="#section-bar-5" class="icon icon-mail"><span>Kontakt oss</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-bar-1"><p>
	                        <div class="jumbotron_kontakt" style="width:450px;height:100%;"> 
		                        dd
	                        </div>
                        </p></section>
                        <section id="section-bar-2"><p>2</p></section>
                        <section id="section-bar-3"><p>3</p></section>
                        <section id="section-bar-4"><p>4</p></section>                        
                        <section id="section-bar-5">      
                                    <div id="inner">
                                    <div class="jumbotron_fremside" style="width:450px;height:100%;"> 
                                    <form action="process.php" method="post" id="msform" class="form-inline">

                                    <fieldset>
                                    <!-- Form Name -->
                                    <h2 align="left">Kontakt skjema</h2>
									<p> Har du spørsmål a.</p>
                                    <!-- Text input-->
                                    <div class="control-group" align="left">
                                      <label class="control-label" for="txtEpost"></label>
                                      <div class="controls"><span style="text-align: left"></span>
                                      <div class="left-inner-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                       <!-- <input type="text" class="form-control" />-->
                                         <input name="name" type="text" required class="input-medium" 
                                         id="name" placeholder="Ditt navn" autocomplete="on" size="30" >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="control-group" align="left">

                                      <label class="control-label" for="txtEpost"></label>
                                      <div class="controls">
                                        <div class="left-inner-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                        <input name="email" type="text" required class="input-medium" 
                                        id="email" placeholder="E-Post" autocomplete="on" size="30">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="control-group" align="left">
                                      <label class="control-label" for="txtMelding"></label>
                                      <div class="left-inner-addon">                     
                                        <textarea name="message" placeholder="Din melding..." cols="38" rows="7" id="message"></textarea>
                                      </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="control-group">
                                      <label class="control-label" for="btnSend"></label>
                                      <div class="left-inner-addon">
                                        <button id="btnSend" name="btnSend" type="submit" value="Submit" class="btn-kontakt">
                                         Send</button>
                                      </div>
                                    </div>
                                    </fieldset>
                                    </form>
                                    </div></div></section></section></div></body><!-- /content -->
                                    <!-- /tabs -->
             <footer class="footer">
			 	<p>&copy; 2017 Neurotech Design</p>
      		</footer>
            <script src="js/cbpFWTabs.js"></script>
        <script>
            (function() {
                [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });
            })();
        </script>

</html>

