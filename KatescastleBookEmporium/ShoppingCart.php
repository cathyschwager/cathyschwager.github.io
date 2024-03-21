<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "master.dwt" -->

	<head>
	
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\common.php"; ?>
		
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<!-- #BeginEditable "doctitle" -->
		<title>Shopping Cart</title>
		
				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
		<!-- #EndEditable -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
		
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
					
					
						<?php
						
							$g_strDisplayPaypal = "none";
							$g_strDisplayTotals = "none";
							$g_fSubTotal = 0;
							$g_fPostage = 0;
							$g_fTotal = 0;
							$g_strSubmitButtonText = "SUBMIT ORDER";

							if (isset($_POST["hidden_shopping_cart"]))
							{
								$arrayShoppingCart = json_decode($_POST["hidden_shopping_cart"]);
								//print_r($arrayShoppingCart);
								
								/*
									stdClass Object 
									( 
										[arrayShoppingCartItems] => 
											Array 
											( 
												[0] => 
													stdClass Object 
													( 
														[id] => 5 [title] => Harry Potter & the Philosopher's Stone 
														[author] => J.K.Rowling [price] => 10.00 
														[summary] => The novel introduces readers to the magical world of Hogwarts School of Witchcraft and Wizardry and follows the adventures of a young boy named Harry Potter. Harry Potter is an orphan who has been living with his cruel and neglectful relatives, the Dursleys, ever since his parents were killed by the dark wizard Lord Voldemort when he was just a baby. On his eleventh birthday, Harry receives a letter from a mysterious messenger informing him that he is a wizard and has been accepted to attend Hogwarts. 
														[image_filename] => fiction/fantasy/images/HPPS220.jpg 
														[weight] => 0000000220 
														[type] => Soft Cover 
													) 
											) 
										[fShoppingCartTotal] => 10 
										[fShoppingCartTotalMass] => 220 
										[strGivenNames] => Greg 
										[strSurname] => Boyles 
										[strEmail] => gregplants@bigpond.com 
										[strMobile] => 0455328886 
										[strPhone] => 94013696 
										[strStreet] => 20 Bassets Road 
										[strSuburb] => Doreen 
										[strState] => VIC 
										[strPostcode] => 3754 
										[fPostage] => 22.36
									) 								
								*/
								$strNewLine = "\r\n";
								$strMessage = "FROM: " . $arrayShoppingCart->strGivenNames . " " . $arrayShoppingCart->strSurname . 
												$strNewLine . "MOBILE: " . $arrayShoppingCart->strMobile . 
												$strNewLine . "PHONE: " . $arrayShoppingCart->strPhone .
												$strNewLine . "ADDRESS: " .  $arrayShoppingCart->strStreet . ", " .  $arrayShoppingCart->strSuburb . ", " .  
												$arrayShoppingCart->strState . ", " . $arrayShoppingCart->strPostcode . 
												$strNewLine . $strNewLine . "BOOKS" . $strNewLine . "------" . $strNewLine;
								
								$arrayShoppingCartItems = $arrayShoppingCart->arrayShoppingCartItems;
								
								for ($nI = 0; $nI < count($arrayShoppingCartItems); $nI++)
								{
									$strMessage .= "ID: " . $arrayShoppingCartItems[$nI]->id . $strNewLine . 
													"TITLE: " . $arrayShoppingCartItems[$nI]->title . $strNewLine .
													"AUTHOR: " . $arrayShoppingCartItems[$nI]->author . $strNewLine .
													"TYPE: " . $arrayShoppingCartItems[$nI]->type . $strNewLine .
													"PRICE: $" . $arrayShoppingCartItems[$nI]->price . 
													$strNewLine . $strNewLine;
									$g_fSubTotal += floatval($arrayShoppingCartItems[$nI]->price);
								}				
								$g_fPostage = $arrayShoppingCart->fPostage;
								$g_fTotal = $g_fSubTotal + $g_fPostage;

								$strMessage .= $strNewLine . $strNewLine . "POSTAGE: $" . $arrayShoppingCart->fPostage . 	
												$strNewLine . "TOTAL: $" . $arrayShoppingCart->fShoppingCartTotal;
							
								$g_strDisplayPaypal = $g_strDisplayTotals = "block";
								$g_strSubmitButtonText = "RESUBMIT ORDER";
								//mail($g_strEmailCathy, "Order from Kate's Castle Book Emporium", $strMessage, "From: " . $arrayShoppingCart->strEmail . "\r\nCC: " . $g_strEmailAdmin);
								PrintJavascriptLine("AlertSuccess(\"Your order has been emailed to Cathy...\")", 1, true);
							}
						?>

						<script type="text/javascript">
							GenerateShoppingCartContents();
						</script>
					
						<div id="OrderFormDiv">
				
							<form id="OrderForm" method="post" class="OrderDetailsForm">
								<h4>CONTACT DETAILS</h4>
								<label id="LabelGivenNames" for="GivenNames"><b>Given names</b></label><br/>
								<input id="TextGivenNames" type="text" size="30"/><br/><br/>
								
								<label id="LabelSurname" for="Surname"><b>Surname</b></label><br/>
								<input id="TextSurname" type="text" size="30"/><br/><br/>
								
								<label id="LabelEmail" for="Email"><b>Email address</b></label><br/>
								<input id="TextEmail" type="text" size="50"/><br/><br/>
								
								<label id="LabelMobile" for="Phone"><b>Mobile number</b></label><br/>
								<input id="TextMobile" type="text" size="15" maxlength="10"onkeydown="return IsDigit(event)"/><br/><br/>
								
								<label id="LabelPhone" for="Phone"><b>Phone number</b></label><br/>
								(<label id="LabelAreaCode">00</label>)&nbsp;
								<input id="TextPhoneNumber" type="text" size="15" maxlength="10"onkeydown="return IsDigit(event)"/><br/><br/>
								
								<label id="LabelAddress" for="Address"><b>Unit/Street </b></label><br/>
								<input id="TextAddress" type="text" size="60"/><br/><br/>
				
								<label id="LabelSuburb" for="Address"><b>City/Suburb/Town </b></label><br/>
								<input type="text" id="TextSuburb" size="30" /><br/><br/>
				
								<label id="LabelState" for="Address"><b>State </b></label><br/>
								<select id="SelState" onchange="OnSelStateChange(this, document.getElementById('LabelAreaCode'))">
									<option value="02">ACT</option>
									<option value="02">NSW</option>
									<option value="08">NT</option>
									<option value="07">QLD</option>
									<option value="08">SA</option>
									<option value="03">TAS</option>
									<option value="03" selected>VIC</option>
									<option value="08">WA</option>
								</select><br/><br/>
				
								<label id="LabelPostcode" for="Address"><b>Postcode </b></label><br/>
								<input type="text" id="TextPostcode" maxlength="4" onkeydown="return IsDigit(event)"/><br/><br/>
								
								<input id="ButtonClear" type="button" value="ERASE DETAILS" class="NextButton" onclick="DoEraseDetails()"/>
								<br/><br/>
								<input id="ButtonNext" type="button" value="NEXT" class="NextButton" onclick="DoValidateOrderDetails()"/>
								<br/><br/>
								<div id="OrderTotals" style="display:<?php echo $g_strDisplayTotals; ?>;">
									<h4>TOTALS</h4>

									<label id="LabelSubtotal" for="Subtotal"><b>Subtotal </b></label><br/>
									<b>$ </b><input id="TextSubtotal" type="text" size="10" value="<?php echo sprintf("%.2f", $g_fSubTotal); ?>" readonly /><br/><br/>
					
									<label id="LabelPostage" for="Postage"><b>Postage &amp; handling </b></label><br/>
									<b>$ </b><input id="TextPostage" type="text" size="10" value="<?php echo sprintf("%.2f", $g_fPostage); ?>" readonly /><br/><br/>
					
									<label id="LabelTotal" for="Postage"><b>Total </b></label><br/>
									<b>$ </b><input id="TextTotal" type="text" size="10" value="<?php echo sprintf("%.2f", $g_fTotal); ?>" readonly /><br/><br/>
									<br/><br/>
									<input id="ButtonSubmitOrder" type="button" value="<?php echo $g_strSubmitButtonText; ?>" class="NextButton" onclick="DoSubmitOrder()"/>
									<br/><br/>
								</div>
								<h4>PAYMENT</h4>
								<p>Paypal or direct bank transfer...</p>
								<p>Use the email address <?php echo $g_strEmailCathy; ?> for Paypal...</p>
								<div id="Payment" style="display:<?php echo $g_strDisplayPaypal; ?>;">
									<table border="0" cellpadding="15" cellspacing="0">
										<tr>
											<td><a href="https://www.paypal.com"><img src="/images/Paypal.png" alt="" width="40" /></a></td>
											<td><a href="https://www.nab.com.au/personal/online-banking"><img src="/images/NAB.png" alt="" width="75" /></a></td>
											<td><a href="https://www.my.commbank.com.au/netbank/Logon/Logon.aspx"><img src="/images/Commonwealth.png" alt="" width="60" /></a></td>
											<td><a href="https://www.macquarie.com.au"><img src="/images/Macquarie.png" alt="" width="55" /></a></td>
										</tr>
										<tr>
											<td><a href="https://www.bendigobank.com.au"><img src="/images/BendigoBank.png" alt="" width="65" /></a></td>
											<td><a href="https://www.anz.com.au/ways-to-bank/internet-banking/personal/"><img src="/images/ANZ.png" alt="" width="40" /></a></td>
											<td><a href="https://banking.westpac.com.au/wbc/banking/handler?TAM_OP=login&URL=https%3A%2F%2Fbanking.westpac.com.au%2Fsecure%2Fbanking%2Foverview%2Fdashboard&logout=false"><img src="/images/Westpac.png" alt="" width="100" /></a></td>
											<td><a href="https://ibanking.bankofmelbourne.com.au/ibank/loginPage.action"><img src="/images/BOM.png" alt="" width="130" /></a></td>
										</tr>
									</table>
								</div>
								<input type="hidden" value="" name="hidden_shopping_cart" id="hidden_shopping_cart" />
							</form>
							<br/><br/>
						</div>
						
						<script type="text/javascript"> 
							OnSelStateChange(document.getElementById("SelState"), document.getElementById("LabelAreaCode"));
							InitContactForm();
						</script>
										
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
