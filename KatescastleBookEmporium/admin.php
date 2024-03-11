<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

	<!-- #BeginTemplate "master.dwt" -->

	<head>
	
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\common.php"; ?>
		
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<!-- #BeginEditable "doctitle" -->
		<title>Admin</title>		
		<!-- #EndEditable -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
		
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
		
			.button
			{
				font-weight: bold;
				width: 150px;
			}
			
			.text
			{
				border-color: silver;
				border-style: inset;
			}
			
			.select
			{
				border-color: silver;
				border-style: inset;
				width: 200px;
			}
			
			.checkbox
			{
				border-color: silver;
				border-style: inset;
			}
			
			.form
			{
				border-color: silver;
				border-style: outset;
				background-color: silver;
				padding: 20px;
			}
			
			.table
			{
				table-layout:fixed;
				display: inline-block;
				border-style: solid;
				border-width: thin;
			}
			
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
						
							function DoGetToken(&$strText, &$strToken, $strDelim)
							{
								// "142, espionage, Espionage" 
								$nPos = strpos($strText, $strDelim);
								
								if ($nPos !== false)
								{
									$strToken = substr($strText, 0, $nPos);
									$strText = substr($strText, $nPos + strlen($strDelim));
								}
								else
								{
									$strToken = $strText;
									$strText = "";
								}
							}
						
							$g_strLoginDisplay = "block";
							$g_strAdminDisplay = "none";
							
							if (isset($_SESSION["LOGIN"]) && ($_SESSION["LOGIN"] == true))
							{
								$g_strLoginDisplay = "none";
								$g_strAdminDisplay = "block";
							}
							if (isset($_POST["button"]))
							{
								if ($_POST["button"] == "LOGIN")
								{
									$results = DoFindQuery1($g_dbKatesCastle, "users", "username", "admin");
									if ($results && ($results->num_rows > 0))
									{
										if ($row = $results->fetch_assoc())
										{
											if ($_POST["text_password"] == DoAESDecrypt($row["password"]))
											{
												$g_strLoginDisplay = "none";
												$g_strAdminDisplay = "block";
												$_SESSION["LOGIN"] = true;
											}
										}
									}
								}
								else if ($_POST["button"] == "LOGOUT")
								{
									$g_strLoginDisplay = "block";
									$g_strAdminDisplay = "none";
								}
							}
							else if (isset($_POST["hidden_submit_topics"]))
							{
								$strDelim = ", ";
								$strCategoryID = "";
								$strSubcategoryID = "";
								$strTopicID = "";
								$strName = "";
								$strDesc = "";
								$bError = false;
								$results = true;
								$strText = "";
								$bChanges = false;
								
								$arraySaveTopics = json_decode($_POST["hidden_save_topics"]);
								if ($arraySaveTopics)
								{
									/*
										stdClass Object ( 
										
										[3, fiction, Fiction, 1, action, Action] => Array ( [0] => 142, espionage, Espionage 
																							[1] => 143, martial_arts, Martial Arts 
																							[2] => 144, disasters, Disasters 
																							[3] => 145, war, War 
																							[4] => 146, treasure, Treasure ) 
																							
										[3, fiction, Fiction, 2, crime, Crime] => Array ( [0] => 147, drugs, Drugs 
																						  [1] => 148, gangs, Gangs 
																						  [2] => 149, hate, Hate 
																						  [3] => 150, robbery, Robbery 
																						  [4] => 151, terrorism, Terrorism )
									*/ 
									foreach ($arraySaveTopics as $strKey => $arrayTopics)
									{
										//echo $strKey . "<br>";
										//print_r($arrayTopics);
										//echo "<br><br>";						
																				
										DoGetToken($strKey, $strCategoryID, $strDelim);
										DoGetToken($strKey, $strName, $strDelim);
										DoGetToken($strKey, $strDesc, $strDelim);
										
										DoGetToken($strKey, $strSubcategoryID, $strDelim);
										DoGetToken($strKey, $strName, $strDelim);
										DoGetToken($strKey, $strDesc, $strDelim);
										
										for ($nI = 0; $nI < count( $arrayTopics); $nI++)
										{																						
											$strText = $arrayTopics[$nI];
											DoGetToken($strText, $strTopicID, $strDelim);
											DoGetToken($strText, $strName, $strDelim);
											DoGetToken($strText, $strDesc, $strDelim);
											
											if ($strTopicID == "*")
											{
												$results = DoInsertQuery4($g_dbKatesCastle, "topics", "name", $strName, 
																		"description", $strDesc, "category_id", $strCategoryID, "subcategory_id", $strSubcategoryID);
												$bChanges = true;
											}
											else
											{
												$results = DoFindQuery3($g_dbKatesCastle, "topics", "id", $strTopicID, 
																		"name", $strName, "description", $strDesc);
												if ($results && ($results->num_rows == 0))
												{
													$results = DoUpdateQuery2($g_dbKatesCastle, "topics", "name", $strName, 
																			"description", $strDesc, "id", $strTopicID);
													$bChanges = true;
												}
											}
											if (!$results)
											{
												$bError = false;
												break;
											}
										}
									}
								}
								else
								{
									print_r($_POST);
								}
								$arrayDeletedTopics = json_decode($_POST["hidden_deleted_topics"]);
								if ($arrayDeletedTopics)
								{
									for ($nI = 0; $nI < count($arrayDeletedTopics); $nI++)
									{
										$strText = $arrayDeletedTopics[$nI];
										DoGetToken($strText, $strID, $strDelim);
										$results = DoDeleteQuery($g_dbKatesCastle, "topics", "id", $strID);
										$bChanges = true;
									}
								}
								if ($bError)

									PrintJavascriptLine("AlertError(\"Your topics could not be added!\");", 5, true);
								else if ($bChanges)
									PrintJavascriptLine("AlertSuccess(\"Your topics were updated!\");", 5, true);
								else
									PrintJavascriptLine("AlertWarning(\"No changes to your topics were found!\");", 5, true);
							}
							else
							{
								//print_r($_POST);
							}

						?>
					
						<div id="login" style="display:<?php echo $g_strLoginDisplay; ?>">
							
							
							<form method="post" class="form">
								<label id="label_password">Password </label>
								<input id="text_password" name="text_password" type="password" class="text" /><br/><br/>
								<label id="label_show">Show password </label>
								<input id="checkbox_show" type="checkbox" class="checkbox" onclick="OnClickShowPassword()" /><br/><br/>
								<input name="button" type="submit" value="LOGIN" />
							</form>
						
							<script type="text/javascript">
							
								function OnClickShowPassword()
								{
									if (GetInput("checkbox_show").checked)
										GetInput("text_password").type = "text";
									else
										GetInput("text_password").type = "password";
								}
								
							</script>
						</div>
						
						<?php
						
							function DoGetCategoryOptions()
							{
								global $g_dbKatesCastle;
								
								$results = DoFindAllQuery($g_dbKatesCastle, "categories");
								if ($results && ($results->num_rows > 0))
								{
									$strSelected = " selected";
									while ($row = $results->fetch_assoc())
									{
										echo "<option" . $strSelected . ">" . $row["id"] . ", " . $row["name"] . ", " . $row["description"] . "</option>\n";
										$strSelected = "";
									}
								}
							}
							
							function DoCreateCategoryEntries()
							{
								global $g_dbKatesCastle;
								
								$resultsCat = DoFindAllQuery($g_dbKatesCastle, "categories");
								if ($resultsCat && ($resultsCat->num_rows > 0))
								{
									while ($rowCat = $resultsCat->fetch_assoc())
									{
										echo "g_arrayCategories.push(\"" . $rowCat["id"] . ", " .  $rowCat["name"] . ", " .  $rowCat["description"] . "\");\n";
									}
								}																												
							}
							
							function DoCreateSubcategoryEntries()
							{
								global $g_dbKatesCastle;

								$resultsCat = DoFindAllQuery($g_dbKatesCastle, "categories");
								if ($resultsCat && ($resultsCat->num_rows > 0))
								{
									while ($rowCat = $resultsCat->fetch_assoc())
									{																													
										$resultsSubcat = DoFindQuery1($g_dbKatesCastle, "subcategories", "category_id", $rowCat["id"]);
										if ($resultsSubcat && ($resultsSubcat->num_rows > 0))
										{
											echo "g_arrayCategory2Subcategory[\"" . $rowCat["id"] . ", " . $rowCat["name"] . ", " . $rowCat["description"] . "\"] = [";
											
											$nCount = 1;
											while ($rowSubcat = $resultsSubcat->fetch_assoc())
											{
												echo "\"" . $rowSubcat["id"] . ", " . $rowSubcat["name"] . ", " . $rowSubcat["description"] . "\"";
												if ($nCount < $resultsCat->num_rows)
													echo ",";
											}
											echo "];\n";
										}
										else
										{
											echo "g_arrayCategory2Subcategory[\"" . $rowCat["id"] . ", " . $rowCat["name"] . ", " . $rowCat["description"] . "\"] = [];\n";
										}
									}
								}
							}
							
							function DoCreateTopicEntries()
							{
								global $g_dbKatesCastle;

								$resultsCat = DoFindAllQuery($g_dbKatesCastle, "categories");
								if ($resultsCat && ($resultsCat->num_rows > 0))
								{
									while ($rowCat = $resultsCat->fetch_assoc())
									{																													
										$resultsSubcat = DoFindQuery1($g_dbKatesCastle, "subcategories", "category_id", $rowCat["id"]);
										if ($resultsSubcat && ($resultsSubcat->num_rows > 0))
										{
											while ($rowSubcat = $resultsSubcat->fetch_assoc())
											{
												$resultsTopics = DoFindQuery2($g_dbKatesCastle, "topics", "category_id", $rowCat["id"], "subcategory_id", $rowSubcat["id"]);
												if ($resultsTopics && ($resultsTopics->num_rows > 0))
												{
													echo "g_arrayCategory2Subcategory2Topic[\"" . $rowCat["id"] . ", " . $rowCat["name"] . ", " . $rowCat["description"] . ", " . $rowSubcat["id"] . ", " . $rowSubcat["name"] . ", " . $rowSubcat["description"] . "\"] = [";
													$nCount = 1;
													while ($rowTopics = $resultsTopics->fetch_assoc())
													{
														echo "\"" . $rowTopics ["id"] . ", " . $rowTopics ["name"] . ", " . $rowTopics ["description"] . "\"";
														if ($nCount < $resultsTopics->num_rows)
															echo ",";
														$nCount++;
													}
													echo "];\n";
												}
											}
										}
										else
										{
											echo "g_arrayCategory2Subcategory[\"" . $rowCat["id"] . ", " . $rowCat["name"] . ", " . $rowCat["description"] . "\"] = [];\n";
										}
									}
								}
							}
							
						
						?>
					
						<div id="admin" style="display:<?php echo $g_strAdminDisplay; ?>">
						
							<form method="post" class="form" style="width:65px;">
								<input name="button" type="submit" value="LOGOUT" />
							</form>
							<br/><br/>
								
							<form method="post" id="form_details" class="form" style="width:2000px;">
								<table cellpadding="10" cellspacing="0" border="0" class="table">
									<tr><td colspan="2"><b>TOPICS</b></td></tr>
									<tr>
										<td style="text-align:right">Select a category:</td>
										<td>
											<select id="select_categories" onchange="OnChangeCategory('select_categories', 'select_subcategories', 'select_topics')" class="select">
												<?php DoGetCategoryOptions(); ?>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">Select a subcategory:</td>
										<td>
											<select id="select_subcategories" onchange="OnChangeSubcategory('select_categories', 'select_subcategories', 'select_topics')" class="select">
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<select id="select_topics" class="select" size="10" style="width:200px;height:200px;">
											</select>
										</td>
										<td>
											<input type="button" value="DELETE" class="button" onclick="DoDeleteListItem('select_topics')"/><br/>
											<br/>
											<input type="button" value="COPY" class="button" onclick="DoCopyListItem('select_topics', 'hidden_id', 'text_topic_name', 'text_topic_desc')"/>
										</td>
									</tr>
									<tr>
										<td style="text-align:right"><label id="label_topic">Topic name:</label></td>
										<td>
											<input type="hidden" id="hidden_id"/>
											<input id="text_topic_name" type="text" class="text" style="width:150px;" onkeydown="return /[a-z,_]/i.test(event.key)"/>
										</td>
									</tr>
 									<tr>
										<td style="text-align:right"><label id="label_topic">Topic description:</label></td>
										<td><input id="text_topic_desc" type="text" class="text" style="width:150px;" onkeydown="return /[a-z,A-Z,_]/i.test(event.key)"/></td>
									</tr>
									<tr>
										<td><input type="button" value="EDIT" class="button" onclick="DoEditListItem('select_topics', 'hidden_id', 'text_topic_name', 'text_topic_desc', 'select_categories', 'select_subcategories')"/></td>
										<td><input type="button" value="ADD" class="button" onclick="DoAddListItem('select_topics', 'text_topic_name', 'text_topic_desc', 'select_categories', 'select_subcategories')"/></td>
									</tr>
									<tr>
										<td colspan="2"><input type="button" value="SAVE TOPICS" class="button" onclick="OnClickSaveButton('update_topics')"/></td>
									</tr>
								</table>
								<input name="hidden_submit_topics" id="hidden_submit_topics" type="hidden" value="SUBMIT"/>
								<input name="hidden_save_topics" id="hidden_save_topics" type="hidden" />
								<input name="hidden_deleted_topics" id="hidden_deleted_topics" type="hidden" />
							</form>
								
							<script type="text/javascript">
							
								let g_arrayCategories = [];
								<?php DoCreateCategoryEntries(); ?>
								
								let g_arrayCategory2Subcategory = [];
								<?php DoCreateSubcategoryEntries(); ?>
								
								let g_arrayCategory2Subcategory2Topic = {};
								<?php DoCreateTopicEntries(); ?>
								
								let g_arrayDeletedTopics = [];
									
								function OnChangeCategory(strCategorySelectID, strSubcategorySelectID, strTopicSelectID)
								{
									let selectCategory = GetInput(strCategorySelectID),
										selectSubcategory = GetInput(strSubcategorySelectID),
										strSelectedText = "",
										arraySubcategoryItems = [],
										option = null;
	
									if (selectCategory && selectSubcategory && (selectCategory.selectedIndex > -1))
									{
										strSelectedText = selectCategory.options[selectCategory.selectedIndex].text;
										arraySubcategoryItems = g_arrayCategory2Subcategory[strSelectedText];
										
										while (selectSubcategory.options.length > 0)
											selectSubcategory.remove(0);
												
										if (arraySubcategoryItems !== undefined)
										{
											for (let nI = 0; nI < arraySubcategoryItems.length; nI++)
											{
												option = document.createElement("option");
												option.text = arraySubcategoryItems[nI];
												selectSubcategory.add(option);
											}
											selectSubcategory.selectedIndex = 0;
											
											if (strTopicSelectID !== undefined)
												OnChangeSubcategory(strCategorySelectID, strSubcategorySelectID, strTopicSelectID);
										}
									}
								}
								
								function OnChangeSubcategory(strCategorySelectID, strSubcategorySelectID, strTopicSelectID)
								{
									let selectCategory = GetInput(strCategorySelectID),
										selectSubcategory = GetInput(strSubcategorySelectID),
										selectTopic = GetInput(strTopicSelectID),
										strSelectedCategoryText = "",
										strSelectedSubcategoryText = "",
										arrayTopicItems = [],
										option = null;
	
									if (selectCategory && selectSubcategory && selectTopic && (selectCategory.selectedIndex > -1) && (selectSubcategory.selectedIndex > -1))
									{
										strSelectedCategoryText = selectCategory.options[selectCategory.selectedIndex].text;
										strSelectedSubcategoryText = selectSubcategory.options[selectSubcategory.selectedIndex].text;
										arrayTopicItems = g_arrayCategory2Subcategory2Topic[strSelectedCategoryText + ", " + strSelectedSubcategoryText];
										
										while (selectTopic.options.length > 0)
											selectTopic.remove(0);
											
										if (arrayTopicItems !== undefined)
										{
											for (let nI = 0; nI < arrayTopicItems.length; nI++)
											{
												option = document.createElement("option");
												option.text = arrayTopicItems[nI];
												selectTopic.add(option);
											}
											selectTopic.selectedIndex = 0;
										}
									}
								}
								
								OnChangeCategory("select_categories", "select_subcategories");
								OnChangeSubcategory("select_categories", "select_subcategories", "select_topics");
	
								function DoDeleteListItem(strListID)
								{
									let list = GetInput(strListID);

									if (list.selectedIndex > -1)
									{
										let strValue = list.options[list.selectedIndex].text;
										if (strValue.indexOf("*") == -1)
										{
											g_arrayDeletedTopics.push(strValue);
										}
										list.remove(list.selectedIndex);
										list.focus();
									}
									else
									{
										AlertError("Please select an Item to delete!");
									}
								}
								
								function DoEditListItem(strListID, strHiddenID, strTextNameID, strTextDescID, strCategoryID, strSubcategoryID)
								{
									let list = GetInput(strListID),
										textName = GetInput(strTextNameID),
										textDesc = GetInput(strTextDescID),
										hiddenID = GetInput(strHiddenID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										strKey = "", 
										strValue = "", strItem = "",
										arrayTopics = [],
										strIDInArray = "", 
										strDelim = ", ";
									
									if (list.selectedIndex > -1)
									{
										strKey = selectCategory.options[selectCategory.selectedIndex].text + ", " + 
													selectSubcategory.options[selectSubcategory.selectedIndex].text;
										strValue = hiddenID.value + ", " + textName.value + ", " + textDesc.value;
										
										list.options[list.selectedIndex].text = strValue;
										arrayTopics = g_arrayCategory2Subcategory2Topic[strKey];
										for (let nI = 0; nI < arrayTopics.length; nI++)
										{
											strItem = arrayTopics[nI];
											strIDInArray = DoGetToken(strItem, strDelim);
											if (hiddenID.value == strIDInArray)
											{
												arrayTopics[nI] = strValue;
												break;
											}
										}
										g_arrayCategory2Subcategory2Topic[strKey] = arrayTopics;
									}
									else
									{
										AlertError("Please select an Item to edit!");
									}
								}
								
								function DoCopyListItem(strListID, strHiddenID, strTextNameID, strTextDescID)
								{
									let list = GetInput(strListID),
										textName = GetInput(strTextNameID),
										textDesc = GetInput(strTextDescID),
										hiddenID = GetInput(strHiddenID),
										nPos = 0;
									
									if (list.selectedIndex > -1)
									{
										strValue = list.options[list.selectedIndex].text;
										nPos1 = strValue.indexOf(",");
										nPos2 = strValue.lastIndexOf(",");
										hiddenID.value = strValue.substring(0, nPos1)
										textName.value = strValue.substring(nPos1 + 2, nPos2);
										textDesc.value = strValue.substring(nPos2 + 2);
									}
									else
									{
										AlertError("Please select an Item to edit!");
									}
								}
								
								function DoAddListItem(strListID, strTextNameID, strTextDescID, strCategoryID, strSubcategoryID)
								{
									let list = GetInput(strListID),
										textName = GetInput(strTextNameID),
										textDesc = GetInput(strTextDescID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										option = null,
										strItem = "";
										
									option = document.createElement("option");
									strItem = "*, " + textName.value + ", " + textDesc.value
									option.text = strItem;
									list.add(option);
									
									strKey = selectCategory.options[selectCategory.selectedIndex].text + ", " + 
												selectSubcategory.options[selectSubcategory.selectedIndex].text;
									g_arrayCategory2Subcategory2Topic[strKey].push(strItem);
								}
								
								function OnClickSaveButton(strFunction)
								{
									if (strFunction == "update_topics")
									{
										let hiddenSaveTopics = GetInput("hidden_save_topics"),
											hiddenDeletedTopics = GetInput("hidden_deleted_topics");
											
										hiddenSaveTopics.value = JSON.stringify(g_arrayCategory2Subcategory2Topic);
										hiddenDeletedTopics.value  = JSON.stringify(g_arrayDeletedTopics);
									}
									document.getElementById("form_details").submit();
								}								
								
							</script>

						</div>

					
					
					
					
					
					
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
					<span class="footer_link" id="show_shopping_cart_span"><img alt="" width="2%" class="footer_image" src="images/shopping_cart.png" />&nbsp;<a href="ShoppingCart.php" id="show_shopping_cart_link" onclick="OnClickShowCartButton()">Show Shopping Cart</a></span>
					<span class="footer_link" id="hide_shopping_cart_span" style="display:none;"><img alt="" width="2.5%" class="footer_image" src="images/shopping_cart.png" />&nbsp;<a href="" id="hide_shopping_cart_link" onclick="OnClickHideCartButton()">Hide Shopping Cart</a></span>	
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
