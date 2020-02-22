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
<style></style></head>
<body class="home">
<%
HttpSession maSession = request.getSession();

if(null != maSession.getAttribute("prenomA"))
	{
	String login =(String) maSession.getAttribute("prenomA");
	System.out.println(login);
%>
<nav class="navbar absolute">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="accueil.jsp">Zeus Intranet</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a href="#">FAQ</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">Blog</a></li>
<li class="green"><a href="login.jsp">Login</a></li>
</ul>
</div>
</div>
</nav>
<div class="home-feat">
<div class="container">
<h2>Downtime Happens. Get Notified!</h2>
<h1>50 Monitors, Checked Every 5 Minutes, Totally Free!</h1>
<a href="https://uptimerobot.com/pricing" class="btn btn-success btn-start">Start Monitoring</a>

<div style="margin-top: 100px; color: #fff;"></div>
</div>
</div>
<div class="main-features">
<div class="container">
<h3>Simple-yet-powerful features</h3>
<p class="main-features-header"></p>
<div class="row sh">
<%
ArrayList<agent> lesAgents = controleur.selectAgent(login);
out.print("<table id='data-tables' class=\"table table-dark\"> <thead> <tr><th> ID </th><th> Nom </th><th> Prénom </th> <th> Adresse </th> <th> CP </th>" + "<th> Ville </th><th> DateDeb </th><th> DateFin </th></tr></thead><tbody>" );
for (agent unAgent : lesAgents) {
 out.print ("<tr>" +
         "<td>" + unAgent.getIdA()+"</td>" +
         "<td>" + unAgent.getNomA()+"</td>" +
         "<td>" +unAgent.getPrenomA() +"</td>" +
         "<td>" +unAgent.getAdresse() +"</td>" +
         "<td>" +unAgent.getCodepostal() +"</td>" +
         "<td>" +unAgent.getVille() +"</td>" +
         "<td>" + unAgent.getDateDebutContrat()+"</td>" +
         "<td>" + unAgent.getDateFinContrat()+"</td>" +
         "</tr>"
 );
}
out.print("</tbody></table>");
%>

</div>
</div>
<div class="counting">
<div class="col-md-6" style="background: #307230; padding-top: 40px;">
<h2>Verifies downtime from multiple locations</h2>
<div class="row">
<img src="img/map.png" alt="">
</div>
</div>
<div class="col-md-6" style="background: #373b3e; padding-top: 40px;">
<h2>User-friendly dashboard</h2>
<div class="row">
<img src="img/dash.png" alt="" width="466px" height="243px">
</div>
</div>
</div>
<div id="widgets">
<div class="container">
<a href="https://uptimerobot.com/pricing" class="btn btn-success btn-start"> Start Monitoring</a>
<div class="cols">
<div class="col">
<h3>ABOUT</h3>
<ul>
<li><a href="#">About</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Privacy Policy</a> / <a href="termsOfService">Terms</a></li>
<li><a href="#">Careers</a></li>
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
<a href="index.jsp"><img src="img/logo_f.png" alt="Uptime Robot"></a>
</div>
<div class="right">
<p>Uptime Robot © 2020. All Rights Reserved</p>
</div>
</div>
</footer>

<script src="https://uptimerobot.com/assets/js/lib/jquery.js"></script>
<script src="https://uptimerobot.com/assets/js/lib/bootstrap/bootstrap3_3_5.min.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/js/lib/favico.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-system/nicescroll/jquery.nicescroll-3_6_0.min.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-system-info/notyfy/jquery.notyfy.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-system/momentjs/moment.min.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-content/jquery.bullseye/jquery.bullseye-1.0-min.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-content/truncate/jquery.truncate.min.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-form/select2-3.5.2/select2.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-form/validate/js/jquery.validate.min.js?v1.14"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-form/noUiSlider/jquery.nouislider.min2.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-form/creditCardValidator/jquery.creditCardValidator.js?v1.1"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-form/form/jquery.form.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-visualization/knob/knob.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-visualization/flot/jquery.flot.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-visualization/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="https://uptimerobot.com/assets/plugins/pl-visualization/flot/jquery.flot.time.js"></script>

<script type="text/javascript" src="https://uptimerobot.com/assets/js/common.js?v1.226"></script>
 
<div id="qtip-rcontainer"></div>
<%
	}else{
		response.sendRedirect("index.jsp");
	}
%>
</body>
</html>




