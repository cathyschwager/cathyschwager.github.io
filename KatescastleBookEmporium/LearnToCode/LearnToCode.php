<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "../master.dwt" -->

	<head>
	
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\common.php"; ?>
		
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<!-- #BeginEditable "doctitle" -->
		<title>Learn To Code</title>

		<style>
</style>		

				<script type="text/javascript">

					const arrayCategoryBookmarks= [];
					
					const arrayCategoryBookLists = [];
									
				</script>
				
				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
		<!-- #EndEditable -->
		<link href="../styles/style.css" rel="stylesheet" type="text/css" />
		
 		<!-- #BeginEditable "PageStyles" -->

		<style>
</style>		

		<!-- #EndEditable -->

		
			<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\SweetAlert.js"; ?>
			<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\common.js"; ?>											

			<!-- #BeginEditable "Subcategories" -->

				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
			<!-- #EndEditable -->
			
	</head>
	
	<body>
	
		<!-- Begin Container -->
		<div id="container">
			<!-- Begin Masthead -->
			<div id="masthead">
				<div class="CenterVertically Logo" >
					<img alt="" height="100" src="../images/Logo.png" />
				</div>
				<div id="Title" class="CenterVertically Title">
					<h2 style="display:inline;">KATESCASTLE Book Emporium</h2><br/>
					<img class="Books" alt="" src="../images/Books.png" /><br/><br/>
					<h6 class="Motto">“So many books, so little time” - Frank Zappa</h6>
 				</div>
				<div class="CenterVertically Contact">
					<table cellpadding="3" cellspacing="0" border="0">
						<tr>
							<td style="text-align:right;"><b>ABN:</b></td>
							<td>81 431 577 147</td>
						</tr>
						<tr>
							<td style="text-align:right;"><b>Phone:</b></td>
							<td>
							<img src="../images/CathysMobile.png" width="90" /></td>
						</tr>
						<tr>
							<td style="text-align:right;"><b>Email:</b></td>
							<td>
							<img src="../images/CathysEmail.png" width="200"/></td>
						</tr>
						<tr>
							<td style="text-align:right;"><b>Facebook:</b></td>
							<td><a href="../<?php echo $g_strFacebook; ?>">Katescastle Book Emporium</a></td>
						</tr>
						<tr><td colspan=2></td></tr>
						<tr>
							<td colspan=2><b>Web site coded by Gregary Boyles</b></td>
						</tr>
						<tr>
							<td style="text-align:right;"><b>Enquiries:</b></td><td>
							<img src="../images/AdminEmail.png" width="190"/></td>
						</tr>
					</table>
				</div>
			</div>
			<!-- End Masthead -->
			<!-- Begin Page Content -->
			<div id="page_content">
				<!-- Begin Sidebar -->
				
				<div id="sidebar" class="sidebar">
					<span id="top">&nbsp;</span><br/>
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../FAQ/FAQ.php">FAQ</a></li>
						<li><a href="LearnToCode.php">Learn to code</a></li>
						<li><a href="../Requests/Requests.php">Requests</a></li>
<!--
						<li><a href="Children/Children.php">Children</a></li>
						<li><a href="Emporium/Emporium.php">Emporium</a></li>
						<li onclick="DoTogglePopupMenu('fiction_popup_menu')"><a href="#top">Fiction</a></li>
							<div class="MenuPopup" id="fiction_popup_menu">
								<ul>
									<li class="MenuPopupItem"><a href="fiction/action/action.php">Action</a></li>
									<li class="MenuPopupItem"><a href="fiction/crime/crime.php">Crime</a></li>
									<li class="MenuPopupItem"><a href="fiction/fantasy/fantasy.php">Fantasy</a></li>
									<li class="MenuPopupItem"><a href="fiction/general/general.php">General</a></li>
									<li class="MenuPopupItem"><a href="fiction/horror/horror.php">Horror</a></li>
									<li class="MenuPopupItem"><a href="fiction/mystery/mystery.php">Mystery</a></li>
									<li class="MenuPopupItem"><a href="fiction/romance/romance.php">Romance</a></li>
									<li class="MenuPopupItem"><a href="fiction/saga/saga.php">Sagas</a></li>
									<li class="MenuPopupItem"><a href="fiction/science/science.php">Science</a></li>
									<li class="MenuPopupItem"><a href="fiction/thrillers/thrillers.php">Thrillers</a></li>
									<li class="MenuPopupItem"><a href="fiction/westerns/westerns.php">Westerns</a></li>
								</ul>
							</div>
						<li onclick="DoTogglePopupMenu('non_fiction_popup_menu')"><a href="#Top">Non-Fiction</a></li>
							<div class="MenuPopup" id="non_fiction_popup_menu">
								<ul>
									<li class="MenuPopupItem"><a href="non_fiction/arts/arts.php">Arts</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/autobiographies/autobiographies.php">Auto/Biography</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/cooking/cooking.php">Cooking</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/crafts/crafts.php">Crafts</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/education/education.php">Education</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/gardening/gardening.php">Gardening</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/health/health.php">Health</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/hobbies/hobbies.php">Hobbies</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/humour/humour.php">Humour</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/outdoors/outdoors.php">Outdoors</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/reference/reference.php">Reference</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/religion/religion.php">Religion</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/sports/sports.php">Sports</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/technology/technology.php">Technology</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/travel/travel.php">Travel</a></li>
									<li class="MenuPopupItem"><a href="non_fiction/world/world.php">World</a></li>
								</ul>
							</div>
						<li onclick="DoTogglePopupMenu('specialist_popup_menu')"><a href="#Top">Specialist</a></li>
							<div class="MenuPopup" id="specialist_popup_menu">
								<ul>
									<li class="MenuPopupItem"><a href="specialist/antique/antique.php">Antique pre-1950</a></li>
									<li class="MenuPopupItem"><a href="specialist/vintage/vintage.php">Vintage 1950-1975</a></li>
									<li class="MenuPopupItem"><a href="specialist/retro/retro.php">Retro 1975-2000</a></li>
									<li class="MenuPopupItem"><a href="specialist/first_editions/first_editions.php">First Editions</a></li>
									<li class="MenuPopupItem"><a href="specialist/classics/classics.php">Classics</a></li>
									<li class="MenuPopupItem"><a href="specialist/shakespeare/shakespeare.php">Shakespeare</a></li>
									<li class="MenuPopupItem"><a href="specialist/penguin/penguin.php">Penquin</a></li>
									<li class="MenuPopupItem"><a href="specialist/box_sets/box_sets.php">Box Sets</a></li>
									<li class="MenuPopupItem"><a href="specialist/series/series.php">Series</a></li>
									<li class="MenuPopupItem"><a href="specialist/authors/authors.php">Prolific Authors</a></li>
									<li class="MenuPopupItem"><a href="specialist/readers_digest/readers_digest.php">Reader's Digest Condensed</a></li>
									<li class="MenuPopupItem"><a href="specialist/mills_and_boon/mills_and_boon.php">Mills &amp; Boon</a></li>
									<li class="MenuPopupItem"><a href="specialist/national_geographic/national_geographic.php">National Geographic</a></li>
									<li class="MenuPopupItem"><a href="specialist/miscellaneous/miscellaneous.php">Miscellaneous</a></li>
									<li class="MenuPopupItem"><a href="specialist/penguin/penguin.php">Penquin</a></li>
								</ul>
							</div>
						<li><a href="young_adults/young_adults.php">Young Adults</a></li>
-->						
						<?php DoGenerateMenu(); ?>

						<li><a href="../admin.php">Admin Login</a></li>
					</ul>
				</div>
				<!-- End Sidebar -->
				<!-- Begin Content -->
				<div id="content">
					
					<div id="Top" class="Top">&nbsp;</div>
					
					<!--<p><img class="ImageDisplayBlock" alt="" height="100" src="images/SiteUnderConstruction.png" /></p>-->
					<marquee behavior="alternate" width="100%"><h1>Site under construction...</h1></marquee>
		
					<script type="text/javascript">GeneratePageHeading();</script>
					<div id="TOC">
						<script type="text/javascript">
							GenerateMenu(g_arrayTopicBookmarks);
						</script>
					</div>
					<script type="text/javascript">
						GeneratePageContents(g_arrayTopicBookmarks, g_arrayTopicBookLists);
					</script>
											
					<!-- #BeginEditable "content" -->
					
					
					
					
					
					
					
		<style>
</style>		

				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
					
					
					
					
					
					
		<style>
</style>		

				<script type="text/javascript">

					const arrayCategoryBookmarks= ["Bookmark1", "Bookmark2", "Bookmark2"];
					
					const arrayCategoryBookLists = [];
					
				</script>
				
					
					
					
					
					
					
						<hr>
						<h1 style="color: red;font-weight:bold;">NEXT SESSION TIME: <span style="color:black;font-weight:normal;" id="NextSession">Thursday, 1/8</span></h1>
						<h2 style="color: blue;font-weight:bold;">PLACES AVAILABLE: </h2>

						<h3 id="SessionEmail" style="color: green;font-weight:bold;">Please 
						
						<a class="CodeSessionEmailLink" id="CodeSessionEmailLink" href="XXXX">email</a> Cathy to indicate your interest in attending the next session, as the space availabe is limited!</h3>
						<script type="text/javascript">

							var linkEmail = document.getElementById("CodeSessionEmailLink");

							if (linkEmail)
							{
								linkEmail.href = "mailto: " + g_strEmail + "?cc=" + g_strGregsEmail + 
												"&subject=I would like to attend the coding session on " + 
												document.getElementById("NextSession").innerText + 
												"&body=Name of child:%0D%0AAge:%0D%0A%0D%0AName of child:%0D%0AAge:%0D%0A%0D%0AName" + 
												" of child:%0D%0AAge:%0D%0A%0D%0AName of parent:%0D%0A%0D%0A";
							}
						</script> 
						<!--Cathy to indicate your interest in attending the next session, as the space availabe is limited!</h3>-->
						<hr>
						
						<h4><b>WHY WOULD YOU WANT TO LEARN TO CODE?</b></h4>
						
						<ul>
							<li class="ListItem">You are a small business person and you want to learn to code and deploy your own business web site, rather than pay $1000s to have a company manage it for you.</li>
							<br/>
							<li class="ListItem">You are a VCE student and want to get a head start with coding in preparation for your IT degree.</li>
							<br/>
							<li class="ListItem">You are a younger student and inventor and you want to learn to make games or robots.</li>
							<br/>
							<li class="ListItem">You are an adult and want to learn to be a creator of technology rather than just a consumer of it.</li>						
						</ul><br/>
					
						<h4><b>WHEN &amp; WHERE WILL SESSIONS BE HELD?</b></h4>
						
						<p class="Paragraph">The sessions will be held at the book store on Saturday afternoons starting at 12:00pm and 
						run for 2 hours, although there is no obligation to stay for the full 2 hours.</p>
						
						<h4><b>WHEN &amp; HOW OFTEN WILL SESSIONS BE HELD?</b></h4>
						
						<p class="Paragraph">The sessions will be held roughly every 2 weeks when Gragray Boyles (creator of this web site)
						is in Maryborough. Please keep an eye on 'NEXT SESSION TIME' at the top of this page.</p>
					
						<h4><b>PARENTAL SUPERVISION?</b></h4>
						
						<p class="Paragraph">For childen under the age of 16 it is a requirement for one parent to attend the session
						with them. This is for 4 reasons:</p>
						
						<ul>
							<li class="ListItem">It is an oppurtunity for you to spend quality time with your child, learning with them.</li>
							<br/>
							<li class="ListItem">This will put you in a position to help them one working on tutorials or projects at home.</li>
							<br/>
							<li class="ListItem">You are best placed to manage the behvior of your child which leaves Greg free to mentor your child individually as needed.</li>
							<br/>
							<li class="ListItem">It mitigates any liability issues and keeps the sessions free of charge.</li>
						</ul><br/>
																		
						<h4><b>WHAT CAN I LEARN?</b></h4>
												
						<ul>
							<li class="ListItem">Coding and deployment of a business or personal web site.</li>
								<ul>
									<li class="SubListItem">HTML</li>
									<li class="SubListItem">CSS</li>
									<li class="SubListItem">JavaScript</li>
									<li class="SubListItem">PHP</li>
									<li class="SubListItem">Free github web hosting</li>
									<li class="SubListItem">Paid web hosting</li>
									<li class="SubListItem">Home web hosting</li>
									<li class="SubListItem">Web administration with cPanel</li>
								</ul>
							<br/>
							<li class="ListItem">Coding of microcontrollers and associated digital electronics.</li>
								<ul>
									<li class="SubListItem">Arduino MCUs with Arduino IDE &amp; C/C++</li>
									<li class="SubListItem">ESP32 with Arduino IDE &amp; C/C++</li>
									<li class="SubListItem">Microbit MCU with Microbit web site &amp; block programming or Arduino IDE &amp; C/C++</li>
									<li class="SubListItem">Raspberry Pi Pico with Thonny &amp; Micropython or Arduino IDE &amp; C/C++</li>
									<li class="SubListItem">Tinkercad Circuits web site &amp; block programming or C/C++</li>
								</ul>
							<br/>
							<li class="ListItem">Coding of games.</li>
								<ul>
									<li class="SubListItem">With Unity &amp; C#(sharp)</li>
									<li class="SubListItem">With HTLM &gt;canvas&lt;&gt;/canvas&lt; &amp; JavaScript</li>
									<li class="SubListItem">For raw beginners with Scratch web site &amp; block programming</li>
									<li class="SubListItem">With Arduino MCUs &amp; C/C++</li>
								</ul>
							<br/>
							<li class="ListItem">Coding of Android apps.</li>
								<ul>
									<li class="SubListItem">MIT App Inventor &amp; block programming</li>
								</ul>
							<br/>						
							<li class="ListItem">Coding of Windows apps.</li>
								<ul>
									<li class="SubListItem">With Microsoft Visual Studio &amp; Visual C++</li>
								</ul>
							<br/>						
							<li class="ListItem">Coding of Python apps.</li>
								<ul>
									<li class="SubListItem">With PyCharm</li>
								</ul>
							<br/>
						</ul>
					
					
					
					
					
					
					
					<!-- #EndEditable -->
				</div>
				<!-- End Content -->
			</div>
			<!-- End Page Content -->
			<!-- Begin Footer -->
			<div id="footer">
				<div class="FloatLeft Links" style="font-size:small;margin:10px;">
					<span class="footer_link" id="footer_link">
					<img alt="" width="1%" class="footer_image" src="../images/top.png" />&nbsp;<a href="#Top">Top of Page</a></span>
					<span class="footer_link" id="footer_link">
					<img alt="" width="2%" class="footer_image" src="../images/home.png" />&nbsp;<a href="../index.htm">Home</a></span>
					<span class="footer_link" id="show_shopping_cart_span">
					<img alt="" width="2%" class="footer_image" src="../images/shopping_cart.png" />&nbsp;<a href="../ShoppingCart.php" id="show_shopping_cart_link" onclick="OnClickShowCartButton()">View Shopping Cart</a><span id="shopping_cart_total1"> ($0)</span></span>
					<span class="footer_link" id="hide_shopping_cart_span" style="display:none;">
					<img alt="" width="2.5%" class="footer_image" src="../images/shopping_cart.png" />&nbsp;<a href="" id="hide_shopping_cart_link" onclick="OnClickHideCartButton()">Close Shopping Cart</a><span id="shopping_cart_total2"> ($0)</span></span>
				</div>
				<div class="FloatRight Copyright">
					<div><b>Copyright &copy; 2023 Cathy Schwager.<br/>All Rights Reserved.</b></div>
				</div>
			</div>
			<!-- End Footer --></div>
		<!-- End Container -->
		
	</body>

	<footer>
		
		<script type="text/javascript">
		
			ScrollTopContent();
			SetShowHideShoppingCartLink();
			DoUpdateShoppingCartTotal();
			
		</script>
			
	</footer>

<!-- #EndTemplate -->

</html>
