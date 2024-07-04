<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs 
   ================================================== -->
   <meta charset="utf-8">
   <title>TG SPORTS+</title>
   <meta name="description" content="">
   <meta name="author">
   
   <!-- mobile specific metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS 
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.min.css">
   <link rel="stylesheet" href="css/main.css">

   <!-- script 
   ================================================== -->
   <script src="js/modernizr.js"></script>
   <script src="js/registo.js"></script>
   <main>
		<section id="content"></section>
	</main>

</head>

<body>
	<!-- header
   ================================================== -->
   <header id="main-header">
	
   	<div class="row">

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class="menu-icon">Menu</span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class="menu-icon">Menu</span>
         	</a>   
			<div id="logo">
				<a href="#hero"><img src="Logo.png" alt="Logo"></a>
		 	</div>         

			 <ul id="nav" class="nav">
        		<li><a class="smoothscroll" href="#hero">Inicio</a></li>
        		<li><a class="smoothscroll" href="#history">História</a></li>
				<li><a class="smoothscroll" href="#portfolio">Ligas</a></li>
				<li><a class="smoothscroll" href="#services">Clubes</a></li>
				<li><a class="smoothscroll" href="#about">Prémios</a></li>
				<li><a class="smoothscroll" href="#Estrelas">Estrelas</a></li>
				<li><a class="smoothscroll" href="#contact">Contactos</a></li>
				<li><a href="#" id="loginBtn">Login</a></li>
				
				<!-- Verificar se o utilizador está autenticado -->
				<?php if (isset($_SESSION['username'])): ?>
					<li><a href="ligacao2.php" id="registerBtn">Registar</a></li>
					<!---<li><a href="logout.php">Logout</a></li>-->
					
				<?php else: ?>
					<li style="color: yellow;">Utilizador: <?php echo $_SESSION['username']; ?></li>
				<?php endif; ?>
    		</ul>

	      </nav> <!-- end #nav-wrap -->
		  <div id="messageBox" style="display: none;"></div>

	<!-- Modal de Registo -->				
	<div id="registerModal" class="modal">
  	<div class="modal-content">
		<span class="close">&times;</span>
    	<h2 style="color: black;">Registo do Utilizador</h2>
    <form action="index.php" method="post">
      <input type="text" id = "username" name="username" placeholder="Nome de Uitlizador">
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="password" placeholder="Palavra-Pass">
      <button type="submit">Registar</button>
    </form>
  	</div>

	<!-- Modal de login -->					
	  <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 style="color: black;">Login</h2>
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="Nome de Utilizador">
                    <input type="password" name="password" placeholder="Palavra-Pass">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
	</header> <!-- end header -->

	
   <!-- homepage hero
   ================================================== -->
   <section id="hero">	
   	  
		<div class="row hero-content">

			<div class="twelve columns hero-container">

			   <!-- hero-slider start-->
			   <div id="hero-slider" class="flexslider">

				   <ul class="slides">

					   <!-- slide -->
					   <li>
						   <div class="flex-caption">
								<h1 class="">TG SPORTS+
								</h1>	
									
								<h3 class="">TG SPORTS+ é um site onde podes ver os jogadores e os seus respetivos clubes.</h3>				   
							</div>						
					   </li>

					   <!-- slide -->
					   <li>						
							<div class="flex-caption">
								<h1 class="">TG SPORTS+</h1>

								<h3 class="">No TG SPORTS+ também podes ter acesso às ligas dos clubes mais conhecidos da Europa.</h3>			   
							</div>					
					   </li>

					   <!-- slide -->
					   <li>
						   <div class="flex-caption">
								<h1 class="">TG SPORTS+
								<h3 class="">No TG SPORTS+ podes ver prémios que são atribuidos aos jogadores mais destacados do ano. </h3>			   
							</div>
					   </li>					              

				   </ul>

			   </div> <!-- end hero-slider -->				   

	      </div> <!-- end twelve columns-->

		</div> <!-- end row -->	

		<div id="more">
		      <a class="smoothscroll" href="#contact">Mais sobre Nós<i class="fa fa-angle-down"></i></a>
			  
		</div> 	

   </section> <!-- end homepage hero -->

 <!-- historia
   ================================================== -->
   <section id="istoria">

	<div class="row section-head">
 
	   <div class="twelve columns">
 
		  <h1>História do Futebol <span></span></h1>
 
		  <hr />
 
		  <p>
			<font color="white" face="Arial, sans-serif">
			- O futebol, essa paixão que une nações em torno de uma bola, tem uma história tão cativante quanto os jogos que vemos nos estádios hoje. Começou no século XIX, em Inglaterra, 
			quando alguém teve a ideia genial de criar regras jogos de bola.</font>
			</p>

			<p>
				<font color="white" face="Arial, sans-serif">
			- A bola jogou-se mundo fora, conquistando corações em lugares tão diversos como o Brasil, Argentina e tantos outros.Em 1930, no Uruguai, tivemos o primeiro Mundial de Seleções, 
			o grande encontro internacional que consolidou o futebol como uma linguagem global.</font>
			</p>

			<p>
				<font color="white" face="Arial, sans-serif">
			- Hoje, não faltam competições emocionantes, como a Champions League na Europa e a Libertadores na América do Sul.
			O futebol é mais do que um jogo; é cultura, é moda, é parte do nosso quotidiano.</font>
			</p>

			<p>
				<font color="white" face="Arial, sans-serif">
			- Com a tecnologia dando uma ajudinha, o VAR chegou para esclarecer aquelas decisões polémicas que sempre geram discussões acaloradas. 
			O futebol é como um livro em constante escrita, com cada jogo adicionando um novo capítulo à sua rica história.
			Assim, se és fã de golos, emoções e dessa ligação única que o futebol cria entre as pessoas, estás no sítio certo.
			</font>
		  </p>
 
	   </div>
 
	</div> <!-- end section-head -->
 
	<div class="row items">
	</div>
 
 </section> 
 
   <!-- portfolio
   ================================================== -->
   <section id="portfolio">

      <div class="row section-head">

      	<div class="twelve columns">

      		<h1>Ligas <span></span></h1>

	         <hr />               

	         <p>
	         </p>

	      </div>

      </div> <!-- end section-head -->

      <div class="row items">

         <!-- portfolio-wrapper -->
         <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-01">
	                  <img src="images/portfolio/Premier (2).ico" alt="Premier League">
                     <div class="overlay"></div>                       
                     <div class="portfolio-item-meta">
     					      <h5>Premier League</h5>
                        <p></p>
     					   </div> 
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
        		</div> <!-- item end -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-02">
                     <img src="images/portfolio/SerieA2.ico" alt="Série A">
                     <div class="overlay">
                      <div class="portfolio-item-meta">
          					   <h5>Série A</h5>
                           <p></p>
          					</div>
                     </div>
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
         	</div> <!-- item end -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-03">
                     <img src="images/portfolio/Laliga (2).png" alt="Laliga">                        
                     <div class="overlay">
                      <div class="portfolio-item-meta">
          					   <h5>Laliga</h5>
                           <p></p>
          					</div>
                     </div>
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
         	</div> <!-- item end -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-04">
                     <img src="images/portfolio/bundesliga.png" alt="Bundesliga">
                     <div class="overlay">
                      <div class="portfolio-item-meta">
          					   <h5>Bundesliga</h5>
                           <p></p>
          					</div>
                     </div>
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
         	</div> <!-- item end -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-05">
                   <img src="images/portfolio/Ligue1.ico" alt="Ligue1">
                     <div class="overlay">
                      <div class="portfolio-item-meta">
          					   <h5>Ligue 1</h5>
                           <p></p>
          					</div>
                     </div>
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
         	</div> <!-- item end -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-06">
                     <img src="images/portfolio/LP.ico" alt="LP">
                     <div class="overlay">
                      <div class="portfolio-item-meta">
          					   <h5>Liga Portugal</h5>
                           <p></p>
          					</div>
                     </div>
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
         	</div> <!-- item end -->

     

         </div> <!-- end portfolio-wrapper -->
		
         <!-- modal popup
	   	========================================================= -->
         <div id="modal-01" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/Premier (2).ico" alt="Premier League" />
	      	</div>

		      <div class="description-box">
			      <h4>Premier League</h4>
			      <p>Premier League (em português: Primeira Liga) é uma liga profissional de futebol da Inglaterra e está no topo do sistema de ligas do futebol inglês, sendo a principal competição de futebol do país.

					É disputada por vinte clubes no sistema de pontos corridos, em que no final de cada temporada os quatro melhores colocados participam da Liga dos Campeões da UEFA, e os três piores são rebaixados para a EFL Championship, dando lugar aos três melhores desta competição. Cada temporada decorre entre agosto e maio, tendo 38 rodadas com dez partidas cada, totalizando 380 partidas em toda a temporada. A maioria dos jogos são disputados durante o período da tarde nos sábados e domingos e algumas vezes durante a noite no meio da semana.</p>
               <span class="categories">Liga inglesa</span>
		      </div>

            <div class="link-box group">
            	<a href=https://www.premierleague.com>Saber Mais</a>
            	<a href="#" class="popup-modal-dismiss">Sair</a>         
            </div>

	      </div><!-- modal-01 end -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/SerieA2.ico" alt="Série A" />
	      	</div>

		      <div class="description-box">
			      <h4>Série A</h4>
			      <p>Campeonato Italiano de Futebol é um termo não-oficial usado para se referir ao sistema de ligas de futebol da Itália, que reúne mais de 4 mil clubes divididos em 4 divisões profissionais e outras 5 amadoras A Lega Nazionale Professionisti Serie A (em português: Liga Nacional de Profissionais Série A; abreviação oficial: LNPA), mais conhecida simplesmente como Serie A é a divisão principal da competição de desporto no país.</p>
               <span class="categories">Liga Italiana</span>
		      </div>

            <div class="link-box">            	
               <a href=https://www.legaseriea.it/en>Saber Mais</a>
		         <a href="#" class="popup-modal-dismiss">Sair</a>
            </div>

	      </div><!-- modal-02 end -->

         <div id="modal-03" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/Laliga (2).png" alt="LaLiga" />
	      	</div>

		      <div class="description-box">
			      <h4>Laliga</h4>
			      <p>A Primera División da Liga de Fútbol Profesional, conhecida como LaLiga ou LaLiga Santander, por razões de patrocínio, ou ainda Liga das Estrelas, é a primeira divisão da liga espanhola de futebol profissional entre clubes da Espanha. É disputada por vinte clubes, sob o sistema de disputa de pontos corridos, onde os clubes jogam entre si no sistema de turno e returno.</p>
               <span class="categories">Liga Espanhola</span>
		      </div>

            <div class="link-box">
               <a href=https://www.laliga.com/en-GB>Saber Mais</a>
		         <a href="#" class="popup-modal-dismiss">Sair</a>
            </div>

	      </div><!-- modal-03 end -->

			<div id="modal-04" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/bundesliga.png" alt="bundesliga" />
	      	</div>

		      <div class="description-box">
			      <h4>Bundesliga</h4>
			      <p>A Bundesliga foi originalmente fundada em 1962 na cidade de Dortmund pela Deutscher Fußball-Bund (Associação Alemã de Futebol), mas agora é controlada pela Deutsche Fußball Liga (Liga Alemã de Futebol), sendo a liga mais lucrativa da Europa. A primeira temporada foi em 1963 e teve como primeiro campeão o Colônia, sendo que o primeiro artilheiro foi o famoso Uwe Seeler, do Hamburgo, e desde então, apenas a cidade de Munique celebrou dois de seus clubes como campeões: o Bayern e o München 1860. Sua estrutura e organização, juntamente com outras ligas de futebol da Alemanha, sofreram mudanças frequentes até os dias de hoje. Atualmente a Bundesliga é formada por 18 equipas</p>
               <span class="categories">Liga Alemã</span>
		      </div>

            <div class="link-box">
               <a href=https://www.bundesliga.com/en/bundesliga>Saber Mais</a>
		         <a href="#" class="popup-modal-dismiss">Sair</a>
            </div>

	      </div><!-- modal-04 end -->

	      <div id="modal-05" class="popup-modal slider mfp-hide">	

	      	<div class="media">
	      		<img src="images/portfolio/Ligue1.ico" alt="" />
	      	</div>      	

		      <div class="description-box">
			      <h4>League 1</h4>		      

			      <p>A Ligue 1 (até 2002 chamada Division 1), também conhecida como Ligue 1 Uber Eats por razões de patrocínio, é a primeira divisão da liga francesa de futebol profissional entre clubes da França, sendo a principal competição futebolística no país. Organizada pela Ligue de Football Professionnel desde 1929.</p>

			      <div class="categories">Liga Francesa</div>
               
		      </div>

            <div class="link-box">
               <a href=https://www.ligue1.com>Saber Mais</a>
		         <a href="#" class="popup-modal-dismiss">Sair</a>
            </div>		      

	      </div><!-- modal-05 end -->

	      <div id="modal-06" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/LP.ico " alt="" />
	      	</div>	

		      <div class="description-box">
			      <h4>Primeira Liga</h4>			      

			      <p>A Primeira Liga (Liga NOS por razões de patrocínio) é o principal escalão do sistema de ligas de futebol de Portugal. Criada na época 1934–35 pela Federação Portuguesa de Futebol, é organizada pela Liga Portuguesa de Futebol Profissional desde a temporada 1995–96. É disputada por dezoito clubes, num sistema de promoção e despromoção com a Segunda Liga. Até à época 2020-21, a Primeira Liga terá a designação comercial de Liga NOS, devido ao patrocínio com a empresa de telecomunicações e entretenimento NOS. No final da época 2019–20 ocupava o 6.º lugar no ranking da UEFA.</p>

			      <div class="categories">Liga Portuguesa</div>
               
		      </div>

            <div class="link-box">
               <a href=https://www.ligaportugal.pt/pt/homepage>Saber Mais</a>
		         <a href="#" class="popup-modal-dismiss">Sair</a>
            </div>

	      </div><!-- modal-06 end -->

	     <div id="modal-07" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/modals/m-coffee.jpg" alt="" />
	      	</div>	

		      <div class="description-box">
			      <h4>Coffee Cup</h4>			      

			      <p></p>

			      <div class="categories">Branding</div>
               
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
		         <a href="#" class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-07 end -->

	      <div id="modal-08" class="popup-modal mfp-hide">

		      <div class="media">
	      		<img src="images/portfolio/modals/m-judah.jpg" alt="" />
	      	</div>	

		      <div class="description-box">
			      <h4>Judah</h4>			      

			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

			      <div class="categories">Webdesign</div>
               
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
		         <a href="#" class="popup-modal-dismiss">Close</a>
            </div>

	      </div>

      </div>  

   </section> 

   <section id="services">

   	<div class="row section-head">

      	<div class="twelve columns">

      		<h1>Clubes<span></span></h1>

	         <hr />      	         

	         <p>
	         </p>

	      </div>

      </div> <!-- end section-head -->

      <div class="row mobile-no-padding">      	

	      <div class="service-list bgrid-third s-bgrid-half tab-bgrid-whole group">

	      	<div class="bgrid">	               

	            <h3>Premier league</h3>

	          <div class="service-content">	                  
		            <table>
					<tr>
					
						<td><img src="images\england\676.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Liverpool15(1).png">Liverpool</a></td>
					</tr>
					<tr>
						<td><img src="images\england\680.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ManchesterUnited.png">Manchester United</a></td>
					</tr>
					<td><img src="images\england\679.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/manchesterCity.png">Manchester City</a></td>
					</tr>
					<td><img src="images\england\728.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Tottenham(1).png">Tottenham</a></td>
					</tr>
					<td><img src="images\england\630.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Chelsea(1).png">Chelsea</a></td>
					</tr>
					<td><img src="images\england\602.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Arsenal(1).png">Arsenal</a></td>
					</tr>
					<td><img src="images\england\603.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ast.PNG">Aston Villa</a></td>
					</tr>
					<td><img src="images\england\650.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ever.PNG">Everton</a></td>
					</tr>
					<td><img src="images\england\673.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Lei.PNG">Leicester City </a></td>
					</tr>
					<td><img src="images\england\740.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Wol.PNG">Wolves</a></td>
					</tr>
					<td><img src="images\england\713.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Sou.PNG">Southampton</a></td>
					</tr>
					<td><img src="images\england\688.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/New.PNG">Newcastle</a></td>
					</tr>
					<td><img src="images\england\642.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="dados/Cry.PNG">Crystal Palace</a></td>
					</tr>
					<td><img src="images\england\735.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/West.PNG">West Wam</a></td>
					</tr>
					<td><img src="images\england\671.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Leeds.PNG">Leeds United </a></td>
					</tr>
					<td><img src="images\england\734.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Brom.PNG">West Brom</a></td>
					</tr>
					<td><img src="images\england\654.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/fulh.PNG">Fulham</a></td>
					</tr>
					<td><img src="images\england\618.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bri.PNG">Brighton</a></td>
					</tr>
					<td><img src="images\england\708.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/She.PNG">Sheffield United</a></td>
					</tr>
					<td><img src="images\england\622.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bur.PNG">Burnley</a></td>
					</table>
	            </div>	  

				</div> 
				<div class="bgrid">	              

	            <h3>Série A</h3>                  

	            <div class="service-content">	                  
		            <table>
					<tr>
						<td><img src="images\italy\1139.png" width="15" height="15"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Juve.PNG">Juventus</a></td>
					</tr>
					<tr>
						<td><img src="images\italy\1099.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/AC.PNG">AC Milan</a></td>
					</tr>
					<td><img src="images\italy\1135.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Inter.PNG">Inter Milan</a></td>
					</tr>
					<td><img src="images\italy\1150.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Napo.PNG">Napoles </a></td>
					</tr>
					<td><img src="images\italy\1140.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Laz.PNG">Lázio</a></td>
					</tr>
					<td><img src="images\italy\1106.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ata.PNG">Atalanta</a></td>
					</tr>
					<td><img src="images\italy\1156.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Par.PNG">Parma</a></td>
					</tr>
					<td><img src="images\italy\1129.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Fi.PNG">Fiorentina</a></td>
					</tr>
					<td><img src="images\italy\1111.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bolo.PNG">Bologna</a></td>
					</tr>
					<td><img src="images\italy\707654.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Cro.PNG">Crotone</a></td>
					</tr>
					<td><img src="images\italy\1114.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Cag.PNG">Cagliari</a></td>
					</tr>
					<td><img src="images\italy\1132.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ge.PNG">Genoa</a></td>
					</tr>
					<td><img src="images\italy\1167.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Sam.PNG">Sampdoria</a></td>
					</tr>
					<td><img src="images\italy\1173.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Spe.PNG">Spezia</a></td>
					</tr>
					<td><img src="images\italy\1174.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Tori.PNG">Torino</a></td>
					</tr>
					<td><img src="images\italy\1178.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Udi.PNG">Udinese</a></td>
					</tr>
					<td><img src="images\italy\2188.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ben.PNG">Benevento</a></td>
					</tr>
					<td><img src="images\italy\2201.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/He.PNG">Hellas Verona</a></td>
					</tr>
					<td><img src="images\italy\3800256.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Sas.PNG">Sassuolo</a></td>
					</tr>
					<td><img src="images\italy\1100.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ro.PNG">Roma</a></td>
						
					</table>
	            </div>	
					
			   </div> <!-- end bgrid -->

			   <div class="bgrid">	              

	            <h3>LaLiga</h3>
                 <div class="service-content">	                  
		            <table>
					<tr>
						<td><img src="images\spain\1737.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/RM.PNG">Real Madrid</a></td>
					</tr>
					<tr>
						<td><img src="images\spain\1708.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bar.PNG">Barcelona</a></td>
					</tr>
					<td><img src="images\spain\814344.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/AM.PNG">Atlético Madrid</a></td>
					</tr>
					<td><img src="images\spain\67035569.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Sev.PNG">Sevilha</a></td>
					</tr>
					<td><img src="images\spain\1503260.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Soc.PNG">Real Sociedad</a></td>
					</tr>
					<td><img src="images\spain\67004779.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Vi.PNG">Villarreal</a></td>
					</tr>
					<td><img src="images\spain\1775.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Va.PNG">Valencia</a></td>
					</tr>
					<td><img src="images\spain\1733.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Be.PNG">Betis</a></td>
					</tr>
					<td><img src="images\spain\1710.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Get.PNG">Getafe</a></td>
					</tr>
					<td><img src="images\spain\67040821.png" width="15" height="15"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Grana.PNG">Granada</a></td>
					</tr>
					<td><img src="images\spain\1717.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Le.PNG">Levante</a></td>
					</tr>
					<td><img src="images\spain\1688.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Al.PNG">Alaves</a></td>
					</tr>
					<td><img src="images\spain\1747.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Val.PNG">Valladolid</a></td>
					</tr>
					<td><img src="images\spain\1753.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Ei.PNG">Eibar</a></td>
					</tr>
					<td><img src="images\spain\2092.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Vigo.PNG">Celta de Vigo</a></td>
					</tr>
					<td><img src="images\spain\102014.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bil.PNG">Atlético Bilbao</a></td>
					</tr>
					<td><img src="images\spain\4212294.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Hu.PNG">Huesca</a></td>
					</tr>
					<td><img src="images\spain\1503411.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Diz.PNG">Cádiz</a></td>
					</tr>
					<td><img src="images\spain\814429.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/El.PNG">Elche</a></td>
					</tr>
					<td><img src="images\spain\1685.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Osa.PNG">Osasuna</a></td>
					</tr>
					
					</table>
	            </div>	
	            
			   </div> <!-- end bgrid -->

				<div class="bgrid">	              
	                  
	            <h3>Bundesliga</h3> 
                <div class="service-content">	                  
		            <table>
					<tr>
						<td><img src="images\germany\915.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bay.PNG">Bayern</a></td>
					</tr>
					<tr>
						<td><img src="images\germany\907.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Dor.PNG">Dortmund</a></td>
					</tr>
					<td><img src="images\germany\901.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Lev.PNG">Leverkusen</a></td>
					</tr>
					<td><img src="images\germany\91013388.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Leip.PNG">Leipzig</a></td>
					</tr>
					<td><img src="images\germany\961.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/wo.PNG">Wolfsburg</a></td>
					</tr>
					<td><img src="images\germany\892922.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/UN.PNG">Union Berlin</a></td>
					</tr>
					<td><img src="images\germany\121206.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/st.PNG">Stuttgard</a></td>
					</tr>
					<td><img src="images\germany\908.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/mo.PNG">Monchengladbach</a></td>
					</tr>
					<td><img src="images\germany\912.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/fr.PNG">Frankfurt</a></td>
					</tr>
					<td><img src="images\germany\944.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/i.PNG">Freiburg</a></td>
					</tr>
					<td><img src="images\germany\2238.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/au.PNG">Augsburg</a></td>
					</tr>
					<td><img src="images\germany\879226.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/hof.PNG">Hoffenheim</a></td>
					</tr>
					<td><img src="images\germany\948.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/bre.PNG">Bremen</a></td>
					</tr>
					<td><img src="images\germany\2247.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ta.PNG">Hertha</a></td>
					</tr>
					<td><img src="images\germany\916.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/kol.PNG">FC Koln</a></td>
					</tr>
					<td><img src="images\germany\904.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/Bie.PNG">Bielefeld</a></td>
					</tr>
					<td><img src="images\germany\918.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/mai.PNG">Mainz</a></td>
					</tr>
					<td><img src="images\germany\920.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/saa.PNG">Schalke 04</a></td>
					</tr>
					</table>
	            </div>	
	            
				</div> <!-- end bgrid -->

			   <div class="bgrid">

	            <h3>League 1</h3>
                <div class="service-content">	                  
		            <table>
					<tr>
						<td><img src="images\france\868.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/pss.PNG">PSG</a></td>
					</tr>
					<tr>
						<td><img src="images\france\858.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/lii.PNG">Lille</a></td>
					</tr>
					<td><img src="images\france\865.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ly.PNG"> Lyon</a></td>
					</tr>
					<td><img src="images\france\866.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/mars.PNG">Marseille</a></td>
					</tr>
					<td><img src="images\france\884.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ree.PNG">Rennes</a></td>
					</tr>
					<td><img src="images\france\859.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/mont.PNG">Montpellier</a></td>
					</tr>
					<td><img src="images\france\826.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/mona.PNG">Monaco</a></td>
					</tr>
					<td><img src="images\france\871.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/len.PNG">Lens</a></td>
					</tr>
					<td><img src="images\france\875.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/an.PNG">Angers</a></td>
					</tr>
					<td><img src="images\france\844.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/metz.PNG">Metz</a></td>
					</tr>
					<td><img src="images\france\2061.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/bres.PNG">Brest</a></td>
					</tr>
					<td><img src="images\france\851.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/bor.PNG">Bordeux</a></td>
					</tr>
					<td><img src="images\france\862.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ni.PNG">Nice</a></td>
					</tr>
					<td><img src="images\france\828.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/aaaa.PNG">St.Etienne</a></td>
					</tr>
					<td><img src="images\france\846.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/nan.PNG">Nantes</a></td>
					</tr>
					<td><img src="images\france\872.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/sta.PNG">Strasbourg</a></td>
					</tr>
					<td><img src="images\france\2047.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/raa.PNG">Reims</a></td>
					</tr>
					<td><img src="images\france\860.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/nim.PNG">Nimes</a></td>
					</tr>
					<td><img src="images\france\2005.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/lor.PNG">Lorient</a></td>
					</tr>
					<td><img src="images\france\839.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/dij.PNG"> Dijon</a></td>
					</tr>
					</table>
	            </div>	
	            
			   </div> <!-- end bgrid -->

			   <div class="bgrid">	               

	            <h3>Primeira liga</h3>
                <div class="service-content">	                  
		            <table>
					<tr>
						<td><img src="images\portugal\1489.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ting.PNG">Sporting</a></td>
					</tr>
					<tr>
						<td><img src="images\portugal\1478.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/por.PNG">Porto</a></td>
					</tr>
					<td><img src="images\portugal\1487.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ca.PNG">Benfica</a></td>
					</tr>
					<td><img src="images\portugal\1494.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/sc.PNG">Vitória SC</a></td>
					</tr>
					<td><img src="images\portugal\1471.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/boa.PNG">Boavista</a></td>
					</tr>
					<td><img src="images\portugal\2386.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/ferr.PNG">Paços de Ferreira</a></td>
					</tr>
					<td><img src="images\portugal\2397.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/fama.PNG">Famalicão</a></td>
					</tr>
					<td><img src="images\portugal\1488.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/bra.PNG">Braga</a></td>
					</tr>
					<td><img src="images\portugal\2448.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/cla.PNG">Santa Clara</a></td>
					</tr>
					<td><img src="images\portugal\2383.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/rio.PNG">Rio Ave</a></td>
					</tr>
					<td><img src="images\portugal\1474.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/bel.PNG">Belenenses</a></td>
					</tr>
					<td><img src="images\portugal\2389.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/moo.PNG">Moreirense</a></td>
					</tr>
					<td><img src="images\portugal\2433.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/nacc.PNG">Nacional</a></td>
					</tr>
					<td><img src="images\portugal\1476.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/mar.PNG">Maritimo</a></td>
					</tr>
					<td><img src="images\portugal\1481.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/gil.PNG">Gil Vicente</a></td>
					</tr>
					<td><img src="images\portugal\2424.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/to.PNG">Tondela</a></td>
					</tr>
					<td><img src="images\portugal\1485.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/far.PNG">Farense</a></td>
					</tr>
					<td><img src="images\portugal\2438.png" width="20" height="20"></td>
						<td>&nbsp;&nbsp;<a href="Dados/po.PNG">Portimonense</a></td>
					</tr>
					</table>
	            </div>	
	        
			   </div> <!-- end bgrid -->

	      </div> <!-- end service-list -->	      

      </div> <!-- end row -->      

   </section> <!-- end services -->

   <!-- About Section
   ================================================== -->
   <section id="about">

   	<div class="row section-head">

      	<div class="twelve columns">

      		<h1>Prémios<span></span></h1>

	         <hr />     	    

	         <p>Os prémios são atribuidos aos jogadores mais destacados do ano
	         </p>

	      </div> <!-- end section-head -->

      </div>

      <div class="row mobile-no-padding">       	

      	<div class="process bgrid-half tab-bgrid-whole group">

      		<div class="bgrid">

			      <h3>Bola de Ouro</h3>	

			      <p><table class="center">
  <tr>
    <th>Nome&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th>Clube/Nacionalidade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th>Ano&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Paris Sainr Germain/Argentina)</td>
    <td>2023</td>
  </tr>
  <tr>
    <td>Karim</td>
    <td>(Real Madrid/França)</td>
    <td>2022</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Paris Saint Germain/Argentina)</td>
    <td>2021</td>
  </tr>
  <tr>
    <td>Não houve premiação</td>
    <td>devido à COVID-19</td>
    <td>2020</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Barcelona/Argentina)</td>
    <td>2019</td>
  </tr>
  <tr>
    <td>Luka Modric</td>
    <td>(Real Madrid/Croácia)</td>
    <td>2018</td>
  </tr>
  <tr>
    <td>Cristiano Ronaldo</td>
    <td>(Real Madrid/Portugal)</td>
    <td>2017</td>
  </tr>
  <tr>
    <td>Cristiano Ronaldo </td>
    <td>(Real Madrid/Portugal)</td>
    <td>2016</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Barcelona/Argentina)</td>
    <td>2015</td>
  </tr>
  <tr>
    <td>Cristiano Ronaldo</td>
    <td>(Real Madrid/Portugal)</td>
    <td>2014</td>
  </tr>
  <tr>
    <td>Cristiano Ronaldo</td>
    <td>(Real Madrid/Portugal)</td>
    <td>2013</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Barcelona/Argentina)</td>
    <td>2012</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Barcelona/Argentina)</td>
    <td>2011</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Barcelona/Argentina)</td>
    <td>2010</td>
  </tr>
  <tr>
    <td>Lionel Messi</td>
    <td>(Barcelona/Argentina)</td>
    <td>2009</td>
  </tr>
  <tr>
    <td>Cristiano Ronaldo</td>
    <td>(Manchester United/Portugal)</td>
    <td>2008</td>
  </tr>
  <tr>
    <td>Kaká </td>
    <td>(Milan/Brasil)</td>
    <td>2007</td>
  </tr>
  <tr>
    <td>Fabio Cannavaro </td>
    <td>(Juventus/Itália)</td>
    <td>2006</td>
  </tr>
  <tr>
    <td>Ronaldinho </td>
    <td>(Barcelona/Brasil)</td>
    <td>2005</td>
  </tr>
  <tr>
    <td>Andriy Shevchenko </td>
    <td>(Milan/Ucrânia)</td>
    <td>2004</td>
  </tr>
  <tr>
    <td>Pavel Nedved </td>
    <td>(Juventus/Rep.Checa)</td>
    <td>2003</td>
  </tr>
  <tr>
    <td>Ronaldo Nazário </td>
    <td>(Inter de Milão/Brasil)</td>
    <td>2002</td>
  </tr>
  <tr>
    <td>Michael Owen  </td>
    <td>(Liverpool/Inglaterra)</td>
    <td>2001</td>
  </tr>
  <tr>
    <td>Luís Figo </td>
    <td>(Real Madrid/Portugal)</td>
    <td>2000</td>
  </tr>
  <tr>
    <td>Rivaldo </td>
    <td>(Barcelona/Brasil)</td>
    <td>1999</td>
  </tr>
  <tr>
    <td>Zinedine Zidane </td>
    <td>(Juventus/França)</td>
    <td>1998</td>
  </tr>
  <tr>
    <td>Ronaldo Nazário</td>
    <td> (Inter de Milão/Brasil)</td>
    <td>1997</td>
  </tr>
  <tr>
    <td>Mattias Sämmer </td>
    <td>(Borussia Dortmund/Alemanha)</td>
    <td>1996</td>
  </tr>
  <td>George Weah </td>
    <td>(Milan/Libéria)</td>
    <td>1995</td>
  </tr>
  <tr>
    <td>Hristo Stoichkov </td>
    <td>(Barcelona/Bulgária)</td>
    <td>1994</td>
  </tr>
  <tr>
    <td>Roberto Baggio </td>
    <td>(Juventus/Itália)</td>
    <td>1993</td>
  </tr><td>Marco Van Basten </td>
    <td>(Milan/Holanda)</td>
    <td>1992</td>
  </tr>
  <tr>
    <td>Jean-Pierre Papin </td>
    <td>(Marselha/França)</td>
    <td>1991</td>
  </tr>
  <tr>
    <td>Lothar Matthäus </td>
    <td>(Inter de Milão/Alemanha)</td>
    <td>1990</td>
  </tr><td>Marco Van Basten </td>
    <td>(Milan/Holanda)</td>
    <td>1989</td>
  </tr>
  <tr>
    <td>Marco Van Basten </td>
    <td>(Milan/Holanda)</td>
    <td>1988</td>
  </tr>
  <tr>
    <td>Ruud Gullit </td>
    <td>(Milan/Holanda)</td>
    <td>1987</td>
  </tr><td>Igor Belanov </td>
    <td>(Dínamo Kiev/URSS)</td>
    <td>1986</td>
  </tr>
  <tr>
    <td>Michel Platini </td>
    <td>(Juventus/França)</td>
    <td>1985</td>
  </tr>
  <tr>
    <td>Michel Platini </td>
    <td>(Juventus/França)</td>
    <td>1984</td>
  </tr><td>Michel Platini </td>
    <td>(Juventus/França)</td>
    <td>1983</td>
  </tr>
  <tr>
    <td>Paolo Rossi </td>
    <td>(Juventus/Itália)</td>
    <td>1982</td>
  </tr>
  <tr>
    <td>Karl-Heinz </td>
    <td>(Bayern Munique/Alemanha)</td>
    <td>1981</td>
  </tr><td>Karl-Heinz  </td>
    <td>(Bayern Munique/Alemanha)</td>
    <td>1980</td>
  </tr>
  <tr>
    <td>Kevin Keegan </td>
    <td>(Hamburgo/Inglaterra)</td>
    <td>1979</td>
  </tr>
  <tr>
    <td>Kevin Keegan </td>
    <td>(Hamburgo/Inglaterra)</td>
    <td>1978</td>
  </tr><td>Allan Simonsen </td>
    <td>(B. Moenchengladbach/Dinamarca)</td>
    <td>1977</td>
  </tr>
  <tr>
    <td>Franz Beckenbauer </td>
    <td>(Bayern Munique/Alemanha)</td>
    <td>1976</td>
  </tr>
  <tr>
    <td>Oleg Blockhine </td>
    <td>(Dínamo Kiev/URSS)</td>
    <td>1975</td>
  </tr><td>Johann Cruijff </td>
    <td>(Barcelona/Holanda)</td>
    <td>1974</td>
  </tr>
  <tr>
    <td>Johann Cruijff</td>
    <td>(Barcelona/Holanda)</td>
    <td>1973</td>
  </tr>
  <tr>
    <td>Franz Beckenbauer </td>
    <td>(Bayern Munique/Alemanha)</td>
    <td>1972</td>
  </tr><td>Johann Cruijff </td>
    <td>(Ajax/Holanda)</td>
    <td>1971</td>
  </tr>
  <tr>
    <td>Gerd Müller </td>
    <td>(Bayern Munique/Alemanha)</td>
    <td>1970</td>
  </tr>
  <tr>
    <td>Gianni Rivera </td>
    <td>(Milan/Itália)</td>
    <td>1969</td>
  </tr><td>George Best </td>
    <td>(Manchester United/Inglaterra)</td>
    <td>1968</td>
  </tr>
  <tr>
    <td>Florian Albert </td>
    <td>(Ferencváros/Hungria)</td>
    <td>1967</td>
  </tr>
  <tr>
    <td>Bobby Charlton </td>
    <td>(Manchester United/Inglaterra)</td>
    <td>1966</td>
  </tr><td>Eusébio </td>
    <td>(Benfica/Portugal)</td>
    <td>1965</td>
  </tr>
  <tr>
    <td>Dennis Law </td>
    <td>(Manchester United/Escócia)</td>
    <td>1964</td>
  </tr>
  <tr>
    <td>Lev Iashin </td>
    <td>(D. Moscovo/URSS)</td>
    <td>1963</td>
  </tr><td>Josef Masopust </td>
    <td>(Dukla Praga/Checoslováquia)</td>
    <td>1962</td>
  </tr>
  <tr>
    <td>Omar Sivori</td>
    <td> (Itália/Juventus)</td>
    <td>1961</td>
  </tr>
  <tr>
    <td>Luis Suárez </td>
    <td>(Barcelona/Espanha)</td>
    <td>1960</td>
  </tr><td>Alfredo Di Stéfano </td>
    <td>(Real Madrid/Espanha)</td>
    <td>1959</td>
  </tr>
  <tr>
    <td>Raymond Kopa </td>
    <td>(Real Madrid/França)</td>
    <td>1958</td>
  </tr>
  <tr>
    <td>Alfredo Di Stéfano </td>
    <td>(Real Madrid/Espanha)</td>
    <td>1957</td>
	 </tr>
	<tr>
	<td>Stanley Matthews </td>
    <td>(Blackpool/Inglaterra)</td>
    <td>1956</td>
  </tr>
</table>   
			      </p>
				  

		   	</div>

      		<div class="bgrid">

<!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>  
   <script src="js/main.js"></script>



<h3>Bota de ouro</h3>

<p>

<table class="center">
<tr>
<th>Nome&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Golos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Ano&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
</tr>
<tr>
<td>Erling Haaland</td>
<td>36</td>
<td>2022-2023</td>
</tr>
<tr>
<td>Robert Lewandowski</td>
<td>35</td>
<td>2021-2022</td>
</tr>
<tr>
<td>Robert Lewandowski</td>
<td>41</td>
<td>2020-2021</td>
</tr>
<tr>
<td> Ciro Immobile</td>
<td>36</td>
<td>2019-2020</td>
</tr>
<tr>
<td>Lionel Messi</td>
<td>36</td>
<td>2018-2019</td>
</tr>
<tr>
<td>Lionel Messi</td>
<td>34</td>
<td>2017-2018</td>
</tr>
<td>Lionel Messi</td>
<td>37</td>
<td>2016-2017</td>
</tr>
<tr>
<td>Luis Suarez</td>
<td>40</td>
<td>2015-2016</td>
</tr>
<td>Cristiano Ronaldo</td>
<td>48</td>
<td>2014-2015</td>
</tr>
<tr>
<td>Cristiano Ronaldo</td>
<td>41</td>
<td>2013-2014</td>
</tr>
<td>Lionel Messi</td>
<td>46</td>
<td>2012-2013</td>
</tr>
<tr>
<td>Lionel Messi</td>
<td>50</td>
<td>2011-2012</td>
</tr>
<td>Cristiano Ronaldo</td>
<td>40</td>
<td>2010-2011</td>
</tr>
<tr>
<td> Lionel Messi</td>
<td>34</td>
<td>2009-2010</td>
</tr>
<td>Diego Forlan</td>
<td>34</td>
<td>2008-2009</td>
</tr>
<tr>
<td> Cristiano Ronaldo</td>
<td>31</td>
<td>2007-2008</td>
</tr>
<td>Francesco Totti</td>
<td>26</td>
<td>2006-2007</td>
</tr>
<tr>
<td>Luca Toni</td>
<td>31</td>
<td>2005-2006</td>
</tr>
<td>Diego Forlan</td>
<td>25</td>
<td>2004-2005</td>
</tr>
<tr>
<td>Thierry Henry</td>
<td>29</td>
<td>2003-2004</td>
</tr>
<td>Roy Makaay</td>
<td>29</td>
<td>2002-2003</td>
</tr>
<tr>
<td>Mário Jardel</td>
<td>42</td>
<td>2001-2002</td>
</tr>
<td>Henrik Larsson</td>
<td>35</td>
<td>2000-2001</td>
</tr>
<tr>
<td>Kevin Phillips</td>
<td>31</td>
<td>1999-2000</td>
</tr>
<td>Mário Jardel</td>
<td>36</td>
<td>1998-1999</td>
</tr>
<tr>
<td>Nikos Machlas</td>
<td>34</td>
<td>1997-1998</td>
</tr>
<td> Ronaldo</td>
<td>34</td>
<td>1996-1997</td>
</tr>
<tr>
<td>Zviad Endeladze</td>
<td>40</td>
<td>1995-1996</td>
</tr>
<td>Arsen Avetisyan</td>
<td>39</td>
<td>1994-1995</td>
</tr>
<tr>
<td>Dave Taylor</td>
<td>43</td>
<td>1993-1994</td>
</tr>
<td>Ally McCoist </td>
<td>34</td>
<td>1992-1993</td>
</tr>
<tr>
<td>Ally McCoist</td>
<td>34</td>
<td>1991-1992</td>
</tr>
<td>Darko Pancev</td>
<td>34</td>
<td>1990-1991</td>
</tr>
<tr>
<td>Hristo Stoichkov</td>
<td>38</td>
<td>1989-1990</td>
</tr>
<td> Hugo Sánchez</td>
<td>38</td>
<td>1988-1989</td>
</tr>
<tr>
<td>Dorin Mateut</td>
<td>43</td>
<td>1987-1988</td>
</tr>
<tr>
<td>Tanju Çolak</td>
<td>39</td>
<td>1986-1987</td>
</tr>
<tr>
<td> Toni Polster</td>
<td>39</td>
<td>1985-1986</td>
</tr>
<tr>
<td>Marco van Basten</td>
<td>37</td>
<td>1984-1985</td>
</tr>
<tr>
<td>Fernando Gomes</td>
<td>38</td>
<td>1983-1984</td>
</tr>
<tr>
<td>Ian Rush</td>
<td>32</td>
<td>1982-1983</td>
</tr>
<tr>
<td>Fernando Gomes</td>
<td>36</td>
<td>1981-1982</td>
</tr>
<tr>
<td>Wim Kieft</td>
<td>32</td>
<td>1980-1981</td>
</tr>
<tr>
<td>Georgi Slavkov</td>
<td>31</td>
<td>1979-1980</td>
</tr>
<tr>
<td>Erwin Vandenbergh</td>
<td>39</td>
<td>1978-1979</td>
</tr>
<tr>
<td>Kees Kist</td>
<td>34</td>
<td>1977-1978</td>
</tr>
<tr>
<td>Hans Krankl</td>
<td>41</td>
<td>1976-1977</td>
</tr>
<tr>
<td>Dudu Georgescu</td>
<td>47</td>
<td>1975-1976</td>
</tr>
<tr>
<td>Sotiris Kaiafas</td>
<td>39</td>
<td>1974-1975</td>
</tr>
<tr>
<td>Dudu Georgescu</td>
<td>33</td>
<td>1973-1974</td>
</tr>
<tr>
<td>Héctor Yazalde</td>
<td>46</td>
<td>1972-1973</td>
</tr>
<tr>
<td>Eusébio</td>
<td>40</td>
<td>1971-1972</td>
</tr>
<tr>
<td>Gerd Müller</td>
<td>40</td>
<td>1970-1971</td>
</tr>
<tr>
<td>Josip Skoblar</td>
<td>44</td>
<td>1969-1970</td>
</tr>
<tr>
<td> Gerd Müller</td>
<td>38</td>
<td>1968-1969</td>
</tr>
<td>Petar Zhekov</td>
<td>36</td>
<td>1967-1968</td>
</tr>
<tr>
<td>Eusébio</td>
<td>42</td>
<td>1966-1967</td>
</tr>
<tr>

</table>
</p>	

</div> 

<div class="bgrid">

<h3>World Soccer</h3>	

<p>Edição	Jogador	
<p>2022 Lionel Messi

<p>2021 Robert Lewandowski	

<p>2020	 Robert Lewandowski	

<p>2019	 Lionel Messi	

<p>2018	 Luka Modric	

<p>2017	 Cristiano Ronaldo	

<p>2016	 Cristiano Ronaldo	

<p>2015	 Lionel Messi	

<p>2014	 Cristiano Ronaldo	

<p>2013	 Cristiano Ronaldo	

<p>2012	 Lionel Messi	

<p>2011	 Lionel Messi	

<p>2010	 Xavi	

<p>2009	 Lionel Messi

<p>2008	 Cristiano Ronaldo	

<p>2007	 Kaká	

<p>2006	 Fabio Cannavaro	

<p>2005	 Ronaldinho Gaúcho	

<p>2004	 Ronaldinho Gaúcho	

<p>2003	 Pavel Nedved	

<p>2002	 Ronaldo	

<p>2001	 Michael Owen	

</p>

</div>

<div class="bgrid">

<h3>Golden Boy</h3>

<p>Edição	Jogador
<p>2023 Jude Bellingham

<p>2022 Gavi

<p>2021 Pedri

<p>2021 Pedri

<p>2020	 Erling Håland

<p>2019	 João Félix

<p>2018	 Matthijs de Ligt	

<p>2017	 Kylian Mbappe	

<p>2016	 Renato Sanches	

<p>2015	 Anthony Martial	

<p>2014	 Raheem Sterling	

<p>2013	 Paul Pogba	

<p>2012	 Isco	

<p>2011	 Mario Götze	

<p>2010	 Mario Balotelli	

<p>2009	 Alexandre Pato	

<p>2008	 Anderson	

<p>2007	 Kun Agüero	

<p>2006	 Cesc Fábregas	

<p>2005	 Lionel Messi	

<p>2004	 Wayne Rooney

<p>2003	 Rafael van der Vaart	
</p>

</div> <!-- end process -->      	

</div> <!-- end row -->


<div class="row team section-head">

 <div class="twelve columns">

   <h1>Estrelas do Futebol Mundial<span></span></h1>

   <hr />	         

</div>

</div> <!-- end section-head -->

<div class="row">

<div id="team-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half mob-bgrid-whole group">

  <div class="bgrid member">

		  <div class="member-pic">
			  <img src="images/team/member01-k.jpg" alt=""/>
		   <div class="mask"></div>       	
	 </div>
	 <div class="member-name">
		<h3>Ronaldo Nazário</h3>
		<span>Ex Jogador Brasileiro</span>
	 </div>

	 <p>Ronaldo Luís Nazário de Lima, mais conhecido como Ronaldo ou Ronaldo Fenômeno, é um empresário e ex-futebolista brasileiro que atuava como atacante, amplamente reconhecido como um dos melhores futebolistas de todos os tempos. Atualmente é presidente do clube Real Valladolid, da Espanha.

O diminutivo Ronaldinho surgiu na Copa do Mundo de 1994, para distingui-lo de Ronaldão, companheiro mais velho. Já o apelido de Fenômeno foi forjado pela imprensa italiana, quando defendeu a camisa da Internazionale. No seu auge, ficou conhecido pelas suas arrancadas, dribles e sua capacidade de finalização.Foi eleito o melhor jogador do mundo pela FIFA em 1996, 1997 e 2002. </p>

	 <ul class="member-social">
		
	 </ul>

  </div> <!-- end member -->

  <div class="bgrid member">
					  
		  <div class="member-pic">
		<img src="images/team/member02-k.jpg" alt=""/>
		 <div class="mask"></div>  
	 </div>
	 <div class="member-name">
		<h3>Ruud Gullit</h3>
		<span>Ex Jogador Holandês</span>
	 </div>

	 <p>Rudi Dil, nome de batismo de Ruud Gullit é um ex-futebolista Holandês, um dos maiores do país e do mundo nos anos 80.

Era conhecido pela extrema velocidade e estupenda força; em o seu rico pior pé, executava sempre velozes dribles e belos remates potentes de fora da área. Com toda sua técnica, inteligência, força e impulsão, Gullit é considerado até hoje como um dos poucos jogadores mais completos na história do futebol. </p>

	 <ul class="member-social">
		
	 </ul>

  </div> <!-- end member -->

  <div class="bgrid member">
					  
		  <div class="member-pic">
			  <img src="images/team/member04-k.jpg" alt=""/>
		   <div class="mask"></div>                          	
	 </div>
	 <div class="member-name">
		<h3>Fábio Cannavaro</h3>
		<span>Ex Jogador Italiano</span>
	 </div>

	 <p>Fabio Cannavaro é um técnico e ex-futebolista italiano que jogava como defesa central. Atualmente comanda o clube do Guangzhou Evergrande.

Foi o capitão da Seleção Italiana campeão do Mundo em 2006 e é considerado como um dos melhores defensas da história do futebol. O jogador recebeu no dia 27 de novembro de 2006 a Bola de Ouro, entregue pela revista France Football para o melhor jogador do futebol europeu. </p>

	 <ul class="member-social">
		
	 </ul>

	   </div> <!-- end member -->
	   <div class="bgrid member">
								
								<div class="member-pic">
								 <img src="images/team/member05-k.jpg" alt=""/>
								 <div class="mask"></div>  
						   </div>
						   <div class="member-name">
							  <h3>Lev Yashin</h3>
							  <span>Ex Jogador Russo</span>
						   </div>
			
						   <p>Lev Ivanovich Yashin OL - em russo: Лев Иванович Яшин foi um guarda-redes russo. Ele também foi vice-presidente da Federação de Futebol da União Soviética. Considerado por muitos como o melhor guarda-redes da história do futebol
			
			Era conhecido pelo apelido de Aranha Negra devido ao seu equipamento todo preto. Era conhecido pelo seu atletismo, posicionamento, estatura, bravura, presença imponente no gol e reflexos acrobáticos. Yashin durante a sua carreira inteira só sofreu um único golo de pénalti</p>
			
						   <ul class="member-social">
							  
						   </ul>
			
						</div> <!-- end member -->

</li> <!-- end slide -->

</ul> <!-- end slides -->

</div> <!-- end flexslider -->         

</div> <!-- end row -->

</section> <!-- end testimonials section -->  

   <!-- contact
   ================================================== -->
   <section id="contact">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>Entre em contacto <span></span></h1>

	         <hr />	        

	      </div>

      </div> <!-- end section-head -->

      <div class="row">
      	
      	<div id="contact-form" class="six columns tab-whole left">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action=""  >
      			<fieldset>

                  <div class="group">
 						   <input name="contactName" type="text" id="contactName" placeholder="Nome" value="" minLength="2" required />
                  </div>
                  <div>
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required />
	               </div>
                  <div>
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Sujeito"  value="" />
	               </div>                       
                  <div>
	                 	<textarea name="contactMessage"  id="contactMessage" placeholder="mensagem" rows="10" cols="50" required ></textarea>
	               </div>                      
                  <div>
                     <button class="submitform">Submeter</button>
                     <div id="submit-loader">
                        <div class="text-loader">Enviar...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"></div>
            <!-- contact-success -->
      		<div id="message-success">
               <i class="icon-ok"></i>A sua mensagem foi enviado obrigado!<br />
      		</div>

         </div>

         <div class="six columns tab-whole right">

            <p class="lead"> 

	         <h3 class="address">E-Mail</h3>

			<p>tg1904650@gmail.com


</p>

<h3>Número de Telemóvel</h3>
<p>Telemóvel: 960124992 <br>
</p>
<video width="320" height="240" controls>
  <source src="VideoTGSports+.mp4" type="video/mp4">
  <source src="VideoTGSports+ 	.ogg" type="video/ogg">
 
</video>

</div>     	

</div> <!-- end row -->     

</section>  <!-- end contact -->

<!-- Footer
================================================== -->
<footer>

<div class="row">  

<div class="twelve columns content group">

<ul class="social-links">
<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>               
<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

</ul>

<hr />

<div class="info">

<div class="footer-logo"></div>

<p>
</p>	        

</div>

</div>           

<ul class="copyright">
<li></li> 

</ul>

<div id="go-top">
<a class="smoothscroll" title="Back to Top" href="#hero">Voltar para Cima<i class="fa fa-angle-up"></i></a>
</div>

</div> <!-- end row -->

</footer> <!-- end footer -->

<div id="preloader"> 
<div id="loader"></div>
</div> 

<!-- Java Script
================================================== --> 
<script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>  
   <script src="js/main.js"></script>

</body>
</html>