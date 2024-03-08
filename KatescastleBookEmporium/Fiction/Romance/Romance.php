<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "../../master.dwt" -->

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<!-- #BeginEditable "doctitle" -->
		<title>Romance</title>

		<style>
</style>		

				<script type="text/javascript">

					g-arrayCategoryBookmarks = [];
					
					g_arrayCategoryBookLists = [];
					
				</script>
				
		<!-- #EndEditable -->
		<link href="../../styles/style2.css" rel="stylesheet" type="text/css" />
		
		<div id="OrderForm" style="display:none;">
			<h4>CONTACT DETAILS FOR ORDER</h4>

			<form id="OrderForm" method="post" class="OrderDetailsForm">
				<label id="LabelGivenNames" for="GivenNames"><b>Given names</b></label><br/>
				<input id="TextGivenNames" type="text" size="30"/><br/>
				
				<label id="LabelSurname" for="Surname"><b>Surname</b></label><br/>
				<input id="TextSurname" type="text" size="30"/><br/>
				
				<label id="LabelEmail" for="Email"><b>Email address</b></label><br/>
				<input id="TextEmail" type="text" size="50"/><br/>
				
				<label id="LabelMobile" for="Phone"><b>Phone number (digits only) </b></label><br/>
				<input id="TextPhoneNumber" type="text" size="15"/><br/>
				
				<label id="LabelAddress" for="Address"><b>Unit/Street </b></label><br/>
				<input id="TextAddress" type="text" size="60"/><br/>

				<label id="LabelSuburb" for="Address"><b>City/Suburb/Town </b></label><br/>
				<input type="text" id="TextSuburb" size="30" onchange="DoAddPostCodes"DoOnChangeSuburb()/><br/>

				<label id="LabelState" for="Address"><b>State </b></label><br/>
				<select id="SelState" onchange="OnStateChange()">
					<option value="ACT">ACT</option>
					<option value="NSW">NSW</option>
					<option value="NT">NT</option>
					<option value="QLD">QLD</option>
					<option value="SA">SA</option>
					<option value="TAS">TAS</option>
					<option value="VIC" selected>VIC</option>
					<option value="WA">WA</option>
				</select><br/>

				<label id="LabelPostcode" for="Address"><b>Postcode </b></label><br/>
				<select id="SelPostcode">
				</select><br/><br/>
				
				<input id="ButtonClear" type="button" value="ERASE DETAILS" class="NextButton" onclick="DoEraseDetails()"/>
				<br/><br/>

				<label id="LabelSubtotal" for="Subtotal"><b>Subtotal </b></label><br/>
				<input id="TextSubtotal" type="text" size="10" readonly /><br/>

				<label id="LabelPostage" for="Postage"><b>Postage &amp; handling </b></label><br/>
				<input id="TextPostage" type="text" size="10" readonly /><br/>

				<label id="LabelTotal" for="Postage"><b>Total </b></label><br/>
				<input id="TextTotal" type="text" size="10" readonly /><br/><br/>

				<input id="ButtonNext" type="button" value="NEXT" class="NextButton" onclick="DoValidateOrderDetails()"/>
			</form>
			<br/><br/>
		</div>

 		<!-- #BeginEditable "PageStyles" -->

		<style>
</style>		

		<!-- #EndEditable -->

		
			<script type="text/javascript" src="../../global.js">											

				/***********************************************************************************************
				 ***********************************************************************************************
				 
				 EXAMPLE PAGE CONTENT
				 
				 arrayCategoryBookmarks contains the book categories which appears as a series of links at
				 the top of the page and as a series of headings to which those links will jump to on the page.
				 
				 arrayCategoryBookLists contains the details of the books in each category in the same order as
				 the bookmarks.
				 
				 ***********************************************************************************************
				 ***********************************************************************************************

					var g_arrayCategoryBookmarks= ["Bookmark1", "Bookmark2", "Bookmark2"];
					
					var g_arrayCategoryBookLists =
					[
					  // List of books for Bookmark1
					  [
					  	["Title 1", "Fred Smith", "4.00", "Book description 1", "image.jpg", "300"],
					  	["Title 2", "Fred Smith", "1.00", "Book description 2", "image.jpg", "160"],
					  	["Title 3", "Fred Smith", "3.00", "Book description 3", "image.jpg", "200"]
					  ],
					  // List of books for Bookmark2
					  [
					  	["Title 1", "Fred Smith", "4.00", "Book description 1", "image.jpg", "120"],
					  	["Title 2", "Fred Smith", "1.00", "Book description 2", "image.jpg", "230"],
					  	["Title 3", "Fred Smith", "3.00", "Book description 3", "image.jpg", "330"]
					  ],
					  // List of books for Bookmark3
					  [
					  	["Title 1", "Fred Smith", "4.00", "Book description 1", "image.jpg", "50"],
					  	["Title 2", "Fred Smith", "1.00", "Book description 2", "image.jpg", "170"],
					  	["Title 3", "Fred Smith", "3.00", "Book description 3", "image.jpg", "240"]
					  ]
					];
					
				***********************************************************************************************
				***********************************************************************************************/
					
			</script>
			
			<!-- #BeginEditable "Subcategories" -->

				<script type="text/javascript">

					const arrayCategoryBookmarks= ["Bookmark1", "Bookmark2", "Bookmark2"];
					
					const arrayCategoryBookLists = [];
					
				</script>
				
			<!-- #EndEditable -->
			
	</head>
	
	<body>
	
		<!-- Begin Container -->
		<div id="container">
			<!-- Begin Masthead -->
			<div id="masthead">
				<div class="CenterVertically Logo" >
					<img alt="" height="100" src="../../images/Logo.png" />
				</div>
				<div id="Title" class="CenterVertically Title">
					<h2 style="display:inline;">KATESCASTLE Book Emporium</h2><br/>
					<img class="Books" alt="" src="../../images/Books.png" /><br/><br/>
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
				
				<div id="sidebar">
					<span id="top">&nbsp;</span><br/>
					
					<ul>
						<li><a href="../../index.htm">Home</a></li>
						<li><a href="../../FAQ/FAQ.php">FAQ</a></li>
						<li><a href="../../LearnToCode/LearnToCode.html">Learn to code</a></li>
						<li><a href="../../Requests/Requests.html">Requests</a></li>
						<li><a href="../../Children/Children.php">Children</a></li>
						<li><a href="../../Emporium/Emporium.php">Emporium</a></li>
						<li onclick="DoToggleFictionPopupMenu()"><a href="#top">Fiction</a></li>
							<div class="MenuPopup" id="MenuPopup" name="FictionPopupMenu">
								<ul>
									<li class="MenuPopupItem">
									<a href="../Action/Action.php">Action</a></li>
									<li class="MenuPopupItem">
									<a href="../Crime/Crime.php">Crime</a></li>
									<li class="MenuPopupItem">
									<a href="../Fantasy.php">Fantasy</a></li>
									<li class="MenuPopupItem">
									<a href="../General/General.php">General</a></li>
									<li class="MenuPopupItem">
									<a href="../Horror/Horror.php">Horror</a></li>
									<li class="MenuPopupItem">
									<a href="../Mystery/Mystery.php">Mystery</a></li>
									<li class="MenuPopupItem">
									<a href="Romance.php">Romance</a></li>
									<li class="MenuPopupItem">
									<a href="../Sagas/Sagas.php">Sagas</a></li>
									<li class="MenuPopupItem">
									<a href="../Science/science.php">Science</a></li>
									<li class="MenuPopupItem">
									<a href="../Thrillers/Thrillers.php">Thrillers</a></li>
									<li class="MenuPopupItem">
									<a href="../Westerns/Westerners.html">Westerns</a></li>
								</ul>
							</div>
						<li onclick="DoToggleNonFictionPopupMenu()"><a href="#Top">Non-Fiction</a></li>
							<div class="MenuPopup" id="MenuPopup" name="NonFictionPopupMenu">
								<ul>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Arts/Arts.php">Arts</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/AutoBiographies/AutoBiographies.php">Auto/Biography</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Cooking/Cooking.php">Cooking</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Crafts/Crafts.php">Crafts</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Education/Education.php">Education</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Gardening/Gardening.php">Gardening</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Health/Health.php">Health</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Hobbies/Hobbies.php">Hobbies</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Humour/Humour.php">Humour</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Outdoors/Outdoors.php">Outdoors</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Reference/Reference.php">Reference</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Religion/Religion.php">Religion</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Sports/Sports.php">Sports</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Technology/Technology.php">Technology</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/Travel/Travel.php">Travel</a></li>
									<li class="MenuPopupItem">
									<a href="../../NonFiction/World/World.php">World</a></li>
								</ul>
							</div>
						<li onclick="DoToggleSpecialistPopupMenu()"><a href="#Top">Specialist</a></li>
							<div class="MenuPopup" id="MenuPopup" name="SpecialistPopupMenu">
								<ul>
									<li class="MenuPopupItem">
									<a href="../../Specialist/AntiquePre1950/AntiquePre1950.php">Antique pre-1950</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Vintage1950To1975/Vintage1950To1975.php">Vintage 1950-1975</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Retro1975To2000/Retro1975To2000.php">Retro 1975-2000</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/FirstEditions/FirstEditions.php">First Editions</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Classics/Classics.php">Classics</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Shakespeare/Shakespeare.php">Shakespeare</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Penguin/Penguin.php">Penquin</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/BoxSets/BoxSets.php">Box Sets</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Series/Series.php">Series</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/ProlificAuthors/ProlificAuthors.php">Prolific Authors</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/ReadersDigestCondensed/ReadersDigestCondensed.php">Reader's Digest Condensed</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/MillsAndBoon/MillsAndBoon.php">Mills &amp; Boon</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/NationalGeographic/NationalGeographic.php">National Geographic</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Miscellaneous/Miscellaneous.php">Miscellaneous</a></li>
									<li class="MenuPopupItem">
									<a href="../../Specialist/Penguin/Penguin.php">Penquin</a></li>
								</ul>
							</div>
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
							GenerateMenu(g_arrayCategoryBookmarks);
						</script>
					</div>
					<script type="text/javascript">
						GeneratePageContents(g_arrayCategoryBookmarks, g_arrayCategoryBookLists);
					</script>
											
					<!-- #BeginEditable "content" -->
					
					
					
					
					
					
					
					<!-- #EndEditable -->
				</div>
				<!-- End Content -->
			</div>
			<!-- End Page Content -->
			<!-- Begin Footer -->
			<div id="footer">
				<div class="FloatLeft Links" style="font-size:small;margin:10px;">
					<span class="footer_link" id="footer_link">
					<img alt="" width="1%" class="footer_image" src="../../images/top.png" />&nbsp;<a href="#Top">Top of Page</a></span>
					<span class="footer_link" id="footer_link">
					<img alt="" width="2%" class="footer_image" src="../../images/home.png" />&nbsp;<a href="../../index.htm">Home</a></span>
					<span class="footer_link" id="show_shopping_cart_span">
					<img alt="" width="2%" class="footer_image" src="../../images/shopping_cart.png" />&nbsp;<a href="../../ShoppingCart.html" id="show_shopping_cart_link" onclick="OnClickShowCartButton()">Show Shopping Cart</a></span>
					<span class="footer_link" id="hide_shopping_cart_span" style="display:none;">
					<img alt="" width="2.5%" class="footer_image" src="../../images/shopping_cart.png" />&nbsp;<a href="" id="hide_shopping_cart_link" onclick="OnClickHideCartButton()">Hide Shopping Cart</a></span>	
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
			
		</script>
			
	</footer>

<!-- #EndTemplate -->

</html>
