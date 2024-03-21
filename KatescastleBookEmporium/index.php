<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "master.dwt" -->

	<head>
	
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\common.php"; ?>
		
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<!-- #BeginEditable "doctitle" -->
		<title>Home</title>

		<style>
</style>	
			
				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
		<!-- #EndEditable -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
		
		<div id="OrderForm" style="display:none;">
			<h4>CONTACT DETAILS FOR ORDER</h4>

			<form id="OrderForm" method="post" class="OrderDetailsForm">
				<label id="LabelGivenNames" for="GivenNames"><b>Given names</b></label><br/>
				<input id="TextGivenNames" type="text" size="30"/><br/><br/>
				
				<label id="LabelSurname" for="Surname"><b>Surname</b></label><br/>
				<input id="TextSurname" type="text" size="30"/><br/><br/>
				
				<label id="LabelEmail" for="Email"><b>Email address</b></label><br/>
				<input id="TextEmail" type="text" size="50"/><br/><br/>
				
				<label id="LabelMobile" for="Phone"><b>Phone number (digits only) </b></label><br/>
				<input id="TextPhoneNumber" type="text" size="15" onkeydown="return IsDigit(event)"/><br/><br/>
				
				<label id="LabelAddress" for="Address"><b>Unit/Street </b></label><br/>
				<input id="TextAddress" type="text" size="60"/><br/><br/>

				<label id="LabelSuburb" for="Address"><b>City/Suburb/Town </b></label><br/>
				<input type="text" id="TextSuburb" size="30" /><br/><br/>

				<label id="LabelState" for="Address"><b>State </b></label><br/>
				<select id="SelState">
					<option value="ACT">ACT</option>
					<option value="NSW">NSW</option>
					<option value="NT">NT</option>
					<option value="QLD">QLD</option>
					<option value="SA">SA</option>
					<option value="TAS">TAS</option>
					<option value="VIC" selected>VIC</option>
					<option value="WA">WA</option>
				</select><br/><br/>

				<label id="LabelPostcode" for="Address"><b>Postcode </b></label><br/>
				<input type="text" id="TextPostcode" onkeydown="return IsDigit(event)"/><br/><br/>
				
				<input id="ButtonClear" type="button" value="ERASE DETAILS" class="NextButton" onclick="DoEraseDetails()"/>
				<br/><br/>

				<label id="LabelSubtotal" for="Subtotal"><b>Subtotal </b></label><br/>
				<b>$ </b><input id="TextSubtotal" type="text" size="10" readonly /><br/><br/>

				<label id="LabelPostage" for="Postage"><b>Postage &amp; handling </b></label><br/>
				<b>$ </b><input id="TextPostage" type="text" size="10" readonly /><br/><br/>

				<label id="LabelTotal" for="Postage"><b>Total </b></label><br/>
				<b>$ </b><input id="TextTotal" type="text" size="10" readonly /><br/><br/>

				<input id="ButtonNext" type="button" value="NEXT" class="NextButton" onclick="DoValidateOrderDetails()"/>
			</form>
			<br/><br/>
		</div>

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
					<img alt="" height="100" src="images/Logo.png" />
				</div>
				<div id="Title" class="CenterVertically Title">
					<h2 style="display:inline;">KATESCASTLE Book Emporium</h2><br/>
					<img class="Books" alt="" src="images/Books.png" /><br/><br/>
					<h6 class="Motto">“So many books, so little time” - Frank Zappa</h6>
 				</div>
				<div class="CenterVertically Contact">
					<b>ABN:</b> 81 431 577 147<br/>
					<b>Phone:</b> 0447 817 687<br/>
					<b>Email:</b> <script type="text/javascript">GenerateCathysEmailAddress();</script><br/>
					<b>Facebook:</b> Katescastle Book Emporium<br/><br/>
					<div class="Author" id="Author">
						<b>Web site coded by Gregary Boyles</b><br/>
						<b>Enquiries:</b> <script type="text/javascript">GenerateGregsEmailAddress();</script>
					</div>
				</div>
			</div>
			<!-- End Masthead -->
			<!-- Begin Page Content -->
			<div id="page_content">
				<!-- Begin Sidebar -->
				
				<div id="sidebar" class="sidebar">
					<span id="top">&nbsp;</span><br/>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="FAQ/FAQ.php">FAQ</a></li>
						<li><a href="LearnToCode/LearnToCode.php">Learn to code</a></li>
						<li><a href="Requests/Requests.php">Requests</a></li>
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

						<li><a href="admin.php">Admin Login</a></li>
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

					const arrayCategoryBookmarks= ["Bookmark1", "Bookmark2", "Bookmark2"];
					
					const arrayCategoryBookLists = [];
					
				</script>
				
					
					
					
					
					
					
					<script type="text/javascript">

					</script>
								
			<h3>Where we started, where we've been and where we're going</h3>
			
			<img class="FloatLeft" alt="" height="200" src="images/170 High St.JPG" />
			<p class="Paragraph" style="width: 46%;">
				KATESCASTLE is a family owned and operated second hand book store opened in 2014.
				I, as a single mum of three, started it as a way to support my family and have a job
				that worked with my children's schedules. We started with the front room with a couple
				of dozen shelves at 170 High Street, Maryborough, Victoria then added the second room and a
				few more shelves before the owner decided it was time to renovate. 
			</p>
			<img class="FloatRight" alt="" height="200" src="images/170 High St Counter.JPG" />
			<br/>
			
			<img class="FloatLeft" alt="" height="200" src="images/170 Front of shop.JPG" />
			<p class="Paragraph" style="width: 58%;">
				WE were then able to secure the former Toyworld shop at 194 High Street. It was a big job,
				litterally moving everything down the street on a trolley. It took about three days but setting 
				up and settling in took a little longer. We were lucky as it had more space so more shelves were
				added. We also then had space to host Word in Winter events as well as Local Book Authors and 
				childrens literary events. 
			</p>
			<img class="FloaRight" alt="" height="200" src="images/170 Airplane seats.JPG" />
			
			
			<p class="Paragraph">
				Its been a great thing being able to give second hand books a way to get into new hands 
				to be read and enjoyed. Its great to interact with the locals and we have devevolped a very 
				valued regular clientel. Some coming from as faw away as Melbourne and St Arnaud. 
				We unfortunately closed our doors for a time and moved lock stock and barrell
				to a warehouse space and with the lockdowns were no longer able to do the Talbot Market.
				We are back doing the Market at Dunolly and are getting the website up and running and
				hope to open a new shop in the not to distant future. So watch this space.
			</p>
			
			<img class="ImageDisplayBlock" alt="" height="160" src="images/194 High Piano.jpg" />
			<img class="ImageDisplayBlock" alt="" height="160" src="images/194 High Counter.jpg" />
			<img class="ImageDisplayBlock" alt="" height="160" src="images/194 High Airplane.jpg" />
			<img class="ImageDisplayBlock" alt="" height="160" src="images/194 High Childrens.jpg" />
			<img class="ImageDisplayBlock" alt="" height="160" src="images/194 High tables.jpg" />
			
			<h3>Our Goal</h3>
			<h5>BOOKS FOR LIFE -TO FIND HOMES FOR UNWANTED BOOKS</h5>
			<p class="Paragraph" style="width: 68%;">
				We carry books to appeal to everyone from babies to centagenarians. So we have something 
				for everyone. We offer reasonably priced new children's books and of course preloved books 
				in every genre you can think of. 
				We sell and exchange and accept all books freely given. 
				We are still getting new stock in and its like christmas everytime, not knowing what the box or 
				bag may hold.
				We also offer a book ordering service so if you need help acquiring something and you're
				not very tech savy. With an up front payment we can find it and order it in for you. 
				We also have a customer request service so if you're looking for something, to finish a set
				or collection or a loved book from your child hood or someone borrowed a book and never returned 
				it. We can help with that too.
				
				Many second hand book shops have dissappeared and are dissappearing and its a shame 
				because more and more books are dissappearing into landfill every week.				
			</p>
			
			<img class="FloatRight" alt="" height="243" src="images/HomePageImage3.jpg" />
			
			<h3>Our Audience</h3>
			<img class="ImageDisplayBlock" alt="" height="168" src="images/HomePageImage1.jpg" />
			<img class="ImageDisplayBlock" alt="" height="168" src="images/194 High Cooking Rack.jpg" />
			<img class="ImageDisplayBlock" alt="" height="168" src="images/194 High Front Glass Display.jpg" />
			<img class="ImageDisplayBlock" alt="" height="168" src="images/194 High Double Glass Display.jpg" />
			<img class="ImageDisplayBlock" alt="" height="168" src="images/194 High Shelves.jpg" />
			<img class="ImageDisplayBlock" alt="" height="168" src="images/HomePageImage2.jpg" />
			
			<p>
			
				Have YOU got - We are looking for.    Have WE got - you are looking for.
				
			<p>
				
				Babies, Toddlers, Kinder, Children, Kids, Primary, Tweens, Students, Adolescents, Teens, Young Adult,
				<br/>High School, Coleege, University, Adult, Middlessence, Third AGge, Life Experienced, Centagenarians.
			</p>	
					
					
					
					
					
					
					
					<!-- #EndEditable -->
				</div>
				<!-- End Content -->
			</div>
			<!-- End Page Content -->
			<!-- Begin Footer -->
			<div id="footer">
				<div class="FloatLeft Links" style="font-size:small;margin:10px;">
					<span class="footer_link" id="footer_link"><img alt="" width="1%" class="footer_image" src="images/top.png" />&nbsp;<a href="#Top">Top of Page</a></span>
					<span class="footer_link" id="footer_link"><img alt="" width="2%" class="footer_image" src="images/home.png" />&nbsp;<a href="index.htm">Home</a></span>
					<span class="footer_link" id="show_shopping_cart_span"><img alt="" width="2%" class="footer_image" src="images/shopping_cart.png" />&nbsp;<a href="ShoppingCart.php" id="show_shopping_cart_link" onclick="OnClickShowCartButton()">View Shopping Cart</a><span id="shopping_cart_total1"> ($0)</span></span>
					<span class="footer_link" id="hide_shopping_cart_span" style="display:none;"><img alt="" width="2.5%" class="footer_image" src="images/shopping_cart.png" />&nbsp;<a href="" id="hide_shopping_cart_link" onclick="OnClickHideCartButton()">Close Shopping Cart</a><span id="shopping_cart_total2"> ($0)</span></span>
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
