<%@page import="Controller.*"%>
<%@page import="java.util.ArrayList"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ZEUS Intranet</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" media="all" href="css/bootstrap3_3_5.min.css">
<link rel="stylesheet" media="all" href="css/ur-front.css">

<script type="text/javascript" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=G-50DCJGBBH2&amp;l=dataLayer&amp;cx=c"></script>
<script src="https://www.googletagmanager.com/gtag/js?id=UA-1748433-31"></script>
<script type="text/javascript">
function verifChamp()
{
	var valid = 0;
	var mdp = document.getElementById("mdp");
	var login = document.getElementById("login");
	if(login.value == "")
	{
		login.setAttribute("placeholder","Renseignez ce champ!");
		login.setAttribute("style","border: 3px solid red; color: red;");
		valid=1;

	}
	if(mdp.value=="")
	{
		mdp.setAttribute("placeholder","Renseignez ce champ!");
		mdp.setAttribute("style","border: 3px solid red; color: red;");
		valid=1;
	}
	
	if(valid==0)
		{
			return true;
		}else{
			return false;
		}
	
}
</script>

</head>
<body>
<nav class="navbar">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="accueil.jsp">ZEUS Intranet</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a href="#">FAQ</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">Blog</a></li>
<li class="green"><a href="index.jsp">Login</a></li>
</ul>
</div>
</div>
</nav>
<div class="jumbotron">
<div class="container">
<h1>Connexion à l'intranet</h1>
<p>Gérer vos interventions..</p>
</div>
</div>
<div class="body">
    <div class="container">
        <div class="form-holder">
            <div class="row">
                <div class="col-md-6">
                    <form id="loginUserForm" action="" method="POST" class="" novalidate="novalidate">
                        <div class="form-group">
                            <input type="text" name="login" class="form-control" id="login" placeholder="Login" autofocus="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Password">
                        </div>
                        <input type="submit" name="valider" onclick="return verifChamp()"  class="btn btn-primary"></input>
                            <a href="#" class="pull-right switchToForgotPassword">Mot de passe oublié?</a>
                	</form>
            	</div>
         	</div>
    	</div>
	</div> 
                        <%
							if(request.getParameter("valider")!= null)
							{
								String login = request.getParameter("login");
								String mdp = request.getParameter("mdp");
								
								ArrayList<Integer> Agent2 = controleur.verifConnexion(login,mdp);
								int verif = Agent2.get(0);
								
								if(verif>0)
								{
									ArrayList<String> monUser = controleur.champs(login);
                                    HttpSession maSession = request.getSession();
                                    maSession.setAttribute("login",login);
                                    maSession.setAttribute("nomA", monUser.get(0));
                                    maSession.setAttribute("prenomA", monUser.get(1));
									response.sendRedirect("accueil.jsp");
								}else{
									out.println("Login ou mot de passe incorrect");
								}
							}
						%>



	<div id="widgets">
		<div class="container">
			<div class="cols">
				<div class="col">
					<h3>ABOUT</h3>
					<ul>
						<li><a href="https://uptimerobot.com/about">About</a></li>
						<li><a href="https://blog.uptimerobot.com">Blog</a></li>
						<li><a href="https://uptimerobot.com/privacyPolicy">Privacy Policy</a> / <a href="termsOfService">Terms</a></li>
						<li><a href="https://uptimerobot.com/careers">Careers</a></li>
					</ul>
				</div>
				<div class="col">
					<h3>MONITORING</h3>
					<ul>
						<li><a href="https://uptimerobot.com/locations">Locations &amp; IPs</a></li>
						<li><a href="https://uptimerobot.com/pricing">Pricing</a></li>
					</ul>
				</div>
				<div class="col">
					<h3>SUPPORT</h3>
					<ul>
						<li><a href="https://uptimerobot.com/faq">FAQ</a></li>
						<li><a href="https://uptimerobot.com/support">Contact Us</a></li>
					</ul>
				</div>
					<div class="col">
						<h3>DEVELOPERS</h3>
						<ul>
							<li><a href="https://uptimerobot.com/api">API</a></li>
						</ul>
				</div>
			</div>
		</div>
	</div>

<footer id="footer">
<div class="container">
<div class="logo">
<a href="accueil.jsp"><img src="img/logo_f.png" alt="Uptime Robot"></a>
</div>
<div class="right">
<p>Zeus Intranet © 2020. All Rights Reserved</p>
</div>
</div>
</footer>

