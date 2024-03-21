<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

	<!-- #BeginTemplate "master.dwt" -->

	<head>
	
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . "\common.php"; ?>
		
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<!-- #BeginEditable "doctitle" -->
		<title>Admin</title>		

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
					
					
					
					
					
					
					
		<style>
</style>		

				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
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

				<script type="text/javascript">

					g_arrayTopicBookmarks = [];
					
					g_arrayTopicBookLists = [];
					
				</script>
				
					
					
					
					
					
					
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
							
							function IsAlphaNumeric($nChar)
							{
								return (($nChar >= 'a') && ($nChar <= 'z')) || (($nChar >= 'A') && ($nChar <= 'Z')) || 
										(($nChar >= '0') && ($nChar <= '9'));
							}
							
							function DoFormat($strText)
							{
								$strText = str_replace(" ", "_", $strText);
								$strNewText = "";
								for ($nI = 0; $nI < strlen($strText); $nI++)
								{
									if (IsAlphaNumeric($strText[$nI]) || ($strText[$nI] == '_') || ($strText[$nI] == '-'))
										$strNewText .= $strText[$nI];
								}
								return $strText;
							}
							
							function DoGetColumnValue($strTableName, $strReturnColumnName, $strFindColumnName, $strFindColumnValue)
							{
								global $g_dbKatesCastle;
								$strValue = "";
								$results = DoFindQuery1($g_dbKatesCastle, $strTableName, $strFindColumnName, $strFindColumnValue);
								if ($results && ($results->num_rows > 0))
								{
									if ($row = $results->fetch_assoc())
									{
										$strValue = $row[$strReturnColumnName];
									}
								}
								return $strValue;
							}
							
							function DoGetFolder($strBookID)
							{
								global $g_dbKatesCastle;
								$strCategoryFolder = "";
								$strSubcategoryFolder = "";
								$strFolder = "";
								
								$results = DoFindQuery1($g_dbKatesCastle, "books", "id", $strBookID);
								if ($results && ($results->num_rows > 0))
								{
									if ($row = $results->fetch_assoc())
									{
										$strCategoryFolder = DoGetColumnValue("categories", "name", "id", $row["category_id"]);
										$strSubcategoryFolder = DoGetColumnValue("subcategories", "name", "id", $row["subcategory_id"]);
										$strFolder = $strCategoryFolder . "/" . $strSubcategoryFolder . "/images/";
									}
								}
								return $strFolder;
							}
							
							function DoDeleteExistingBookImageFile($strBookID)
							{
								global $g_dbKatesCastle;
								$strBookImageFilename = "";
								
								$results = DoFindQuery1($g_dbKatesCastle, "books", "id", $strBookID);
								if ($results && ($results->num_rows > 0))
								{
									if ($row = $results->fetch_assoc())
									{
										if ((strlen($row["image_filename"]) > 0) && (file_exists($row["image_filename"])))
										{
											unlink($row["image_filename"]);
										}
									}
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
							else if (isset($_POST["button_save_topics"]))
							{
								$strDelim = ",";
								$strCategoryID = "";
								$strSubcategoryID = "";
								$strTopicID = "";
								$strMsg = "";
								$bChanges = false;
								$results = true;
								
								$arraySavedTopics = json_decode($_POST["hidden_saved_topics"]);
								$arrayDeletedTopics = json_decode($_POST["hidden_deleted_topics"]);
																
								if ($arraySavedTopics)
								{
									//**************************************************************************
									//**************************************************************************
									//** 
									//** EXAMPLE SAVED TOPICS
									//** ---------------------
									//**
									//** stdClass Object 
									//** ( 
									//** 	[1,0] => Array
									//**    ( 
									//** 		[0] => stdClass Object 
									//**			( 
									//**				[id] => 1 
									//**				[name] => activity 
									//**				[description] => Activity Books 
									//**			) 
									//**		[1] => stdClass Object 
									//** 			( 
									//**				[id] => 2 
									//**				[name] => board 
									//**				[description] => Board Books 
									//**			) 
									//**	)
									//** )
									//** 
									//**************************************************************************
									//**************************************************************************									
									foreach ($arraySavedTopics as $strKey => $arrayTopics)
									{																																									
										for ($nI = 0; $nI < count($arrayTopics); $nI++)
										{										
											$objTopic = $arrayTopics[$nI];
																														
											if ($objTopic->id == "*")
											{
												$results = DoInsertQuery4($g_dbKatesCastle, "topics", "name", $objTopic->name, 
																		"description", $objTopic->description, "category_id", 
																		$objTopic->category_id, "subcategory_id", 
																		$objTopic->subcategory_id);
												$strMsg .= "NEW TOPIC: " . $objTopic->name . ", " . $objTopic->description . "\\n";
												$bChanges = true;
											}
											else
											{												
												$results = DoFindQuery5($g_dbKatesCastle, "topics", "id", $objTopic->id, 
																		"name", $objTopic->name, "description", $objTopic->description,
																		"category_id", $objTopic->category_id, "subcategory_id", 
																		$objTopic->subcategory_id);
																														
												if ($results && ($results->num_rows == 0))
												{
													$results = DoUpdateQuery2($g_dbKatesCastle, "topics", "name", 
																				$objTopic->name, "description", 
																				$objTopic->description, "id", 
																				$objTopic->id);
																				
													if ($results)
													{
														$strMsg .= "EDIT TOPIC: " . $objTopic->name . ", " . 
																	$objTopic->description . "\\n";
														$bChanges = true;
													}
												}
											}
											if (!$results)
											{
												$strMsg += "An error occured whilst updating your topics!<br/>";
												break;
											}
										}
									}
								}
								if ($arrayDeletedTopics)
								{
									//**************************************************************************
									//**************************************************************************
									//** 
									//** EXAMPLE DELETED TOPICS
									//** -----------------------
									//**
									//** Array ( [0] => stdClass Object ( [id] => 1 [name] => activity_books [description] => Activity Books ) )
									//**
									//**************************************************************************
									//**************************************************************************
									for ($nI = 0; $nI < count($arrayDeletedTopics); $nI++)
									{
										$results = DoDeleteQuery($g_dbKatesCastle, "topics", "id", $arrayDeletedTopics[$nI]->id);
										$strMsg .= "DELETE TOPIC: " . $arrayDeletedTopics[$nI]->description. "\\n";
										$bChanges = true;
									}
								}
								if ($bChanges)
								{
									if (strpos($strMsg, "error") !== false)
										PrintJavascriptLine("AlertWarning(\"" . $strMsg . "\");", 5, true);
									else
										PrintJavascriptLine("AlertSuccess(\"" . $strMsg . "\");", 5, true);
								}
								else
									PrintJavascriptLine("AlertWarning(\"No changes to your topics were found!\");", 5, true);
							}
							else if (isset($_POST["button_save_books"]))
							{
								$mapSavedBooks = json_decode($_POST["hidden_saved_books"]);
								$arrayDeletedBooks = json_decode($_POST["hidden_deleted_books"]);
								$strMsg = "";
								
								if ($mapSavedBooks)
								{
									/*
										[1,0,1] => Array
										( 
											[0] => ( 
													[category_id] => 1 
													[subcategory_id] => 0 
													[topic_id] => 1 
													[id] => * 
													[title] => xxxxxxx 
													[author] => yyyyyy 
													[summary] => sgsDFGSFDgSFDg 
													[price] => 3 
													[weight] => 345 
													[quantity] => 1 
												   ) 
										)
									*/
									$results = NULL;
									foreach ($mapSavedBooks as $strKey => $arraySavedBooks)
									{
										$strCategoryID = "";
										$strSubcategoryID = "";
										$strTopicID = "";

										DoGetToken($strKey, $strCategoryID, ",");
										DoGetToken($strKey, $strSubcategoryID, ",");
										DoGetToken($strKey, $strTopicID, ",");
										
										for ($nI = 0; $nI < count($arraySavedBooks); $nI++)
										{
											if (strcmp($arraySavedBooks[$nI]->id, "*") == 0)
											{
												$strMsg = "NEW BOOK: ";

												$results = DoInsertQuery7($g_dbKatesCastle, "books", "title", $arraySavedBooks[$nI]->title,
																										"author", $arraySavedBooks[$nI]->author,
																										"summary", $arraySavedBooks[$nI]->summary,
																										"price", $arraySavedBooks[$nI]->price,
																										"weight", $arraySavedBooks[$nI]->weight,
																										"quantity", $arraySavedBooks[$nI]->quantity,
																										"category_id", $strCategoryID,
																										"subcategory_id", $strSubcategoryID,
																										"topic_id", $arraySavedBooks[$nI]->topic_id);
											}
											else
											{
												$strMsg = "EDIT BOOK: ";

												$results = DoUpdateQuery7($g_dbKatesCastle, "books", "title", $arraySavedBooks[$nI]->title,
																										"author", $arraySavedBooks[$nI]->author,
																										"summary", $arraySavedBooks[$nI]->summary,
																										"price", $arraySavedBooks[$nI]->price,
																										"weight", $arraySavedBooks[$nI]->weight,
																										"quantity", $arraySavedBooks[$nI]->quantity,
																										"category_id", $strCategoryID,
																										"subcategory_id", $strSubcategoryID,
																										"topic_id", $arraySavedBooks[$nI]->topic_id,
																										"id", $arraySavedBooks[$nI]->id);
											}
											$strMsg .= $arraySavedBooks[$nI]->title . ", " . $arraySavedBooks[$nI]->author . ", $" . 
														$arraySavedBooks[$nI]->price . ", " .$arraySavedBooks[$nI]->weight . "grams, x " .
														$arraySavedBooks[$nI]->quantity . "\n";
										}
									}
								}
								if ($arrayDeletedBooks)
								{
									print_r($arrayDeletedBooks);
								}
							}
							else if (isset($_POST["button_save_image"]))
							{
								$strTargetPath = "";
								$strFilename = "";
								
								if (isset($_FILES["file_image"]))
								{
									$strFileName = $_FILES["file_image"]["full_path"];
									$strFolderName = DoGetFolder($_POST["select_books"]);
									$strTargetPath = $strFolderName . $strFileName;
									DoDeleteExistingBookImageFile($_POST["select_books"]);
								}
								if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $strTargetPath))
								{
									$results = DoUpdateQuery1($g_dbKatesCastle, "books", "image_filename", $strTargetPath, "id", $_POST["select_books"]);
									if ($results)
									{
										PrintJavascriptLine("AlertSuccess(\"Book image file '" . $_FILES["file_image"]["name"] . "' was saved!\");", 3, true);
									}
									else
									{
										PrintJavascriptLine("AlertError(\"Book image column could not be updated!\");", 3, true);
									}
								}
								else
								{
									PrintJavascriptLine("AlertError(\"Could not save file '" . $_FILES["file_image"]["name"] . "\");", 3, true);
								}
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
						
							function DoGetBookTypeyOptions()
							{
								global $g_dbKatesCastle;
								
								$results = DoFindAllQuery($g_dbKatesCastle, "book_type");
								if ($results && ($results->num_rows > 0))
								{
									$strSelected = " selected";
									while ($row = $results->fetch_assoc())
									{
										if (strpos($row["name"], "Soft") > -1)
											echo "<option selected value=\"" . $row["id"] . "\"" . $strSelected . ">" . $row["name"] . "</option>\n";
										else
											echo "<option value=\"" . $row["id"] . "\"" . $strSelected . ">" . $row["name"] . "</option>\n";
										$strSelected = "";
									}
								}
							}
							
							function DoGetCategoryOptions()
							{
								global $g_dbKatesCastle;
								
								$results = DoFindAllQuery($g_dbKatesCastle, "categories");
								if ($results && ($results->num_rows > 0))
								{
									$strSelected = " selected";
									while ($row = $results->fetch_assoc())
									{
										echo "<option value=\"" . $row["id"] . "\"" . $strSelected . ">" . $row["description"] . "</option>\n";
										$strSelected = "";
									}
								}
							}
							
							function DoCreateCategoryEntries()
							{
								global $g_dbKatesCastle;
								
								$resultsCat = DoFindAllQuery($g_dbKatesCastle, "categories", "", "description");
								if ($resultsCat && ($resultsCat->num_rows > 0))
								{
									while ($rowCat = $resultsCat->fetch_assoc())
									{
										echo "g_arrayCategory.push({id:\"" . $rowCat["id"] . "\",name:\"" . $rowCat["name"] . "\",description:\"" .  $rowCat["description"] . "\"});\n";
									}
								}																												
							}
							function DoDoCreateSubcategoryArrayEntries()
							{
								global $g_dbKatesCastle;

								$resultsCat = DoFindAllQuery($g_dbKatesCastle, "categories");
								if ($resultsCat && ($resultsCat->num_rows > 0))
								{
									while ($rowCat = $resultsCat->fetch_assoc())
									{																													
										$resultsSubcat = DoFindQuery1($g_dbKatesCastle, "subcategories", "category_id", $rowCat["id"], "", "description");
										if ($resultsSubcat && ($resultsSubcat->num_rows > 0))
										{
											while ($rowSubcat = $resultsSubcat->fetch_assoc())
											{
												echo "g_arraySubcategory.push({id:\"" . $rowSubcat["id"] . "\",name:\"" . $rowSubcat["name"] . "\",description:\"" . $rowSubcat["description"] . "\"});\n";	
											}
										}
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
										$resultsSubcat = DoFindQuery1($g_dbKatesCastle, "subcategories", "category_id", $rowCat["id"], "", "description");
										if ($resultsSubcat && ($resultsSubcat->num_rows > 0))
										{
											echo "g_mapSubcategory[\"" . $rowCat["id"] . "\"] = [];\n";
											while ($rowSubcat = $resultsSubcat->fetch_assoc())
											{
												echo "g_mapSubcategory[\"" . $rowCat["id"] . "\"].push({id:\"" . $rowSubcat["id"] . "\",name:\"" . $rowSubcat["name"] . "\",description:\"" . $rowSubcat["description"] . "\"});\n";
											}
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
												$resultsTopics = DoFindQuery2($g_dbKatesCastle, "topics", "category_id", $rowCat["id"], "subcategory_id", $rowSubcat["id"], "", "description");
												{
													echo "g_arrayTopic[\"" . $rowCat["id"] . "," . $rowSubcat["id"] . "\"] = [];\n";
													while ($rowTopics = $resultsTopics->fetch_assoc())
													{
														echo "g_arrayTopic[\"" . $rowCat["id"] . "," . $rowSubcat["id"] . "\"].push({id:\"" . $rowTopics["id"] . 
															"\",name:\"" . $rowTopics["name"] . "\",description:\"" . 
															$rowTopics["description"] . "\",category_id:\"" . 
															$rowTopics["category_id"] . "\",subcategory_id:\"" . 
															$rowTopics["subcategory_id"] . "\"});\n";
													}
												}
											}
										}
										else
										{
											$resultsTopics = DoFindQuery2($g_dbKatesCastle, "topics", "category_id", $rowCat["id"], "subcategory_id", "0", "", "description");
											if ($resultsTopics && ($resultsTopics->num_rows > 0))
											{
												echo "g_arrayTopic[\"" . $rowCat["id"] . ",0\"] = [];\n";
												while ($rowTopics = $resultsTopics->fetch_assoc())
												{
													echo "g_arrayTopic[\"" . $rowCat["id"] . ",0\"].push({id:\"" . 
														$rowTopics["id"] . "\",name:\"" . $rowTopics["name"] . 
														"\",description:\"" . $rowTopics["description"] . 
														"\",category_id:\"" . $rowTopics["category_id"] . 
														"\",subcategory_id:\"" . $rowTopics["subcategory_id"] . "\"});\n";
												}
											}
										}
									}
								}
							}
							
							function DoGetBookType($strTypeID)
							{
								global $g_dbKatesCastle;
								$strType = "Not found";
								
								$results = DoFindQuery1($g_dbKatesCastle, "book_type", "id", $strTypeID);
								if ($results && ($results->num_rows > 0))
								{
									if ($row = $results->fetch_assoc())
									{
										$strType = $row["name"];
									}
								}
								return $strType;
							}
														
							function DoCreateBookEntries()
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
													while ($rowTopics = $resultsTopics->fetch_assoc())
													{
														$resultsBooks = DoFindQuery3($g_dbKatesCastle, "books", "category_id", $rowCat["id"], "subcategory_id", $rowSubcat["id"], "topic_id", $rowTopics["id"], "", "title");
														if ($resultsBooks && ($resultsBooks->num_rows > 0))
														{
															echo "g_arrayBooks[\"" . $rowCat["id"] . "," . $rowSubcat["id"] . "," . $rowTopics["id"] . "\"] = [];\n";														
															while ($rowBooks = $resultsBooks->fetch_assoc())
															{
echo "g_arrayBooks[\"" . $rowCat["id"] . "," . $rowSubcat["id"] . "," . $rowTopics["id"] . "\"].push(" . 
					"{id:\"" . $rowBooks["id"] . "\",title:\"" . $rowBooks["title"] . "\",author:\"" . $rowBooks["author"] . "\",price:\"" . 
							sprintf("%.2f", $rowBooks["price"]) . "\",quantity:\"" . sprintf("%d", $rowBooks["quantity"]) . "\",weight:\"" . 
							sprintf("%d", $rowBooks["weight"]) . "\",summary:\"" . $rowBooks["summary"] . "\", category_id:\"" . $rowBooks["category_id"] . 
							"\",subcategory_id:\"" . $rowBooks["subcategory_id"] . "\",topic_id:\"" .  $rowBooks["topic_id"] . 
							"\",type_id:\"" . DoGetBookType($rowBooks["type_id"]) . "\",image_filename:\"" . $rowBooks["image_filename"] . "\"});\n";
															}
														}
													}
												}
											}
										}
										// No subcategories
										else
										{
											$resultsTopics = DoFindQuery2($g_dbKatesCastle, "topics", "category_id", $rowCat["id"], "subcategory_id", "0");
											if ($resultsTopics && ($resultsTopics->num_rows > 0))
											{
												while ($rowTopics = $resultsTopics->fetch_assoc())
												{
													$resultsBooks = DoFindQuery3($g_dbKatesCastle, "books", "category_id", $rowCat["id"], "subcategory_id", "0", "topic_id", $rowTopics["id"]);
													if ($resultsBooks && ($resultsBooks->num_rows > 0))
													{
														echo "g_arrayBooks[\"" . $rowCat["id"] . ",0," . $rowTopics["id"] . "\"] = [];\n";															
														while ($rowBooks = $resultsBooks->fetch_assoc())
														{
echo "g_arrayBooks[" . $rowCat["id"] . ",0," . $rowTopics["id"] . "].push(" . 
					"{id:\"" . $rowBooks["id"] . "\",title:\"" . $rowBooks["title"] . "\",author:\"" . $rowBooks["author"] . "\",price:\"" . 
							sprintf("%.2f", $rowBooks["price"]) . "\",quantity:\"" . sprintf("%d", $rowBooks["quantity"]) . "\",weight:\"" . 
							sprintf("%d", $rowBooks["weight"]) . "\",summary:\"" . $rowBooks["summary"] . "\",type_id:\"" . 
							DoGetBookType($rowBooks["type_id"]) . "\",image_file:\"" . $rowBooks["image_filename"] . "\"});\n";
														}
													}
												}
											}
											// No topics
											else
											{
												$resultsBooks = DoFindQuery3($g_dbKatesCastle, "books", "category_id", $rowCat["id"], "subcategory_id", "0", "topic_id", "0");
												if ($resultsBooks && ($resultsBooks->num_rows > 0))
												{
													echo "g_arrayBooks[\"" . $rowCat["id"] . ",0,0\"] = [];\n";															
													while ($rowBooks = $resultsBooks->fetch_assoc())
													{
					echo "g_arrayBooks.push({id:\"" . $rowCat["id"] . "," . $rowSubcat["id"] . "," . 
											$rowTopics["id"] . "\"].push({id:\"" . $rowBooks["id"] . "\",title:\"" . $rowBooks["title"] . 
											"\",author:\"" . $rowBooks["author"] . "\",price:\"" . 
											sprintf("%.2f", $rowBooks["price"]) . "\",quantity:\"" . sprintf("%d", $rowBooks["quantity"]) .
											"\",weight:\"" . sprintf("%d", $rowBooks["weight"]) . "\",summary:\"" . 
											$rowBooks["summary"] . "\",type_id:\"" . DoGetBookType($rowBooks["type_id"]) . "\",image_file:\"" . $rowBooks["image_filename"] . "\"});\n";
													}
												}
											}
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
								
							<form method="post" id="form_topics" class="form" style="width:448px;">
								<table cellpadding="10" cellspacing="0" border="0" class="table">
									<tr><td colspan="2"><b>TOPICS</b></td></tr>
									<tr>
										<td style="text-align:right">Select a category:</td>
										<td>
											<select id="select_categories" onchange="OnChangeCategory('select_categories', 'select_subcategories', 'select_topics', '')" class="select">
												<?php DoGetCategoryOptions(); ?>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">Select a subcategory:</td>
										<td>
											<select id="select_subcategories" onchange="OnChangeSubcategory('select_categories', 'select_subcategories', 'select_topics', '')" class="select">
												<option value="0" selected>No Subcategory</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<select id="select_topics" class="select" size="10" style="width:200px;height:200px;overflow-x:scroll;" onchange="OnChangeTopicForTopics('select_categories', 'select_subcategories', 'select_topics', 'text_topic_desc')">
											</select>
										</td>
										<td>
											<input type="button" value="DELETE TOPIC" class="button" onclick="DoDeleteTopicItem('select_topics', 'select_categories', 'select_subcategories', 'select_topics')"/><br/>
										</td>
									</tr>
 									<tr>
										<td style="text-align:right"><label id="label_topic">Topic description:</label></td>
										<td><input id="text_topic_desc" type="text" class="text" style="width:150px;" onkeydown="return ((event.which >= 48) && (event.which <= 57)) || ((event.which >= 65) && (event.which <= 90)) || ((event.which >= 97) && (event.which <= 122)) || (event.which == 8) || (event.which == 127)"/></td>
									</tr>
									<tr>
										<td><input type="button" value="EDIT TOPIC ▲" class="button" onclick="DoEditTopicItem('select_topics', 'text_topic_desc', 'select_categories', 'select_subcategories')"/></td>
										<td><input type="button" value="NEW TOPIC ▲" class="button" onclick="DoAddTopicItem('select_topics', 'text_topic_desc', 'select_categories', 'select_subcategories')"/></td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="button" name="button_save_topics" value="SAVE TO DATABASE" class="button" onclick="OnClickSaveButton('form_topics')"/>
										</td>
									</tr>
								</table>
								<input name="button_save_topics" type="hidden" value="SAVE TOPICS"/>
								<input name="hidden_saved_topics" id="hidden_saved_topics" type="hidden" />
								<input name="hidden_deleted_topics" id="hidden_deleted_topics" type="hidden" />
							</form>
							<br/>
							<form method="post" id="form_books" class="form" style="width:538px;">
								<table cellpadding="10" cellspacing="0" border="0" class="table">
									<tr><td colspan="2"><b>BOOKS</b></td></tr>
									<tr>
										<td style="text-align:right">Select a category:</td>
										<td>
											<select id="select_categoriesb" onchange="OnChangeCategory('select_categoriesb', 'select_subcategoriesb', 'select_topicsb', 'select_booksb')" class="select">
												<?php DoGetCategoryOptions(); ?>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">Select a subcategory:</td>
										<td>
											<select id="select_subcategoriesb" onchange="OnChangeSubcategory('select_categoriesb', 'select_subcategoriesb', 'select_topicsb', 'select_booksb', 'select_booksb')" class="select">
												<option value="0" selected>No Subcategory</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">Select a topic:</td>
										<td>
											<select id="select_topicsb" onchange="OnChangeTopicf('select_categoriesb', 'select_subcategoriesb', 'select_topicsb', 'select_booksb', 'image_bookb')" class="select">
												<option value="0" selected=>Other</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<input type="button" value="DELETE BOOK" class="button" onclick="DoDeleteBookItem('select_categoriesb', 'select_subcategoriesb', 'select_topicsb', 'select_booksb')"/><br/>
										</td>
										<td>
											<select id="select_booksb" class="select" size="10" style="width:338px;overflow-x:scroll;">
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">
										<label id="label_topic0">Type:</label></td>
										<td>
											<select id="select_type" class="select">
												<?php DoGetBookTypeyOptions(); ?>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">
										<label id="label_topic1">Title:</label></td>
										<td>
											<input id="text_title" type="text" class="text" style="width:330px;"/>
										</td>
									</tr>
 									<tr>
										<td style="text-align:right">
										<label id="label_topic2">Author:</label></td>
										<td><input id="text_author" type="text" class="text" style="width:330px;" /></td>
									</tr>
 									<tr>
										<td style="text-align:right">
										<label id="label_topic3">Current Image:</label></td>
										<td>
											<img id="image_bookb" src="" alt="IMAGE PREVIEW" width="200"/>
											<p style="font-size:xx-small;">Change book images individually in the next form (below)...</p>
										</td>
									</tr>
 									<tr>
										<td style="text-align:right">
										<label id="label_topic4">Summary:</label></td>
										<td>
											<textarea id="text_summary" maxlength="1024" cols="44" rows="8" style="resize: none;"></textarea>
										</td>
									</tr>
 									<tr>
										<td style="text-align:right">
										<label id="label_topic5">Price: $</label></td>
										<td><input id="text_price" type="text" class="text" style="width:60px;" onkeydown="return ((event.which >= 48) && (event.which <= 57)) || ((event.which >= 65) && (event.which <= 90)) || ((event.which >= 97) && (event.which <= 122)) || (event.which == 8) || (event.which == 127)"/></td>
									</tr>
 									<tr>
										<td style="text-align:right">
										<label id="label_topic6">Weight:</label></td>
										<td><input id="text_weight" type="text" class="text" style="width:60px;" onkeydown="return ((event.which >= 48) && (event.which <= 57)) || ((event.which >= 65) && (event.which <= 90)) || ((event.which >= 97) && (event.which <= 122)) || (event.which == 8) || (event.which == 127)"/>&nbsp;grams</td>
									</tr>
 									<tr>
										<td style="text-align:right">
										<label id="label_topic7">Quantity:</label></td>
										<td><input id="text_quantity" type="text" class="text" style="width:60px;" onkeydown="return ((event.which >= 48) && (event.which <= 57)) || ((event.which >= 65) && (event.which <= 90)) || ((event.which >= 97) && (event.which <= 122)) || (event.which == 8) || (event.which == 127)"/></td>
									</tr>
									<tr>
										<td><input type="button" value="EDIT BOOK ▲" class="button" onclick="DoEditBookItem('select_booksb', 'select_categoriesb', 'select_subcategoriesb', 'select_topicsb')"/></td>
										<td><input type="button" value="MOVE BOOKS ▼" class="button" onclick="DoMoveBookItem('select_booksb', 'select_categoriesm', 'select_subcategoriesm', 'select_topicsm', 'select_categoriesb', 'select_subcategoriesb', 'select_topicsb')"/></td>
									</tr>
									<tr>
										<td><input type="button" value="NEW BOOK ▲" class="button" onclick="DoAddBookItem('select_booksb', 'select_categoriesb', 'select_subcategoriesb', 'select_topicsb')"/></td>
										<td>
											<table cellpadding="2" cellspacing="0" border="0">
												<tr>
													<td style="text-align:right;">New category:</td>
													<td>
														<select id="select_categoriesm" onchange="OnChangeCategory('select_categoriesm', 'select_subcategoriesm', 'select_topicsm')" class="select">
															<?php DoGetCategoryOptions(); ?>
														</select>
													</td>
												</tr>
												<tr>
													<td style="text-align:right;">New subcategory:</td>
													<td>
														<select id="select_subcategoriesm" onchange="OnChangeSubcategory('select_categoriesb', 'select_subcategoriesm', 'select_topicsm', 'select_booksb')" class="select">
															<option value="0" selected>No Subcategory</option>
														</select>
													</td>
												</tr>
												<tr>
													<td style="text-align:right;">New topic:</td>
													<td>
														<select id="select_topicsm" onchange="OnChangeTopic('select_categoriesm', 'select_subcategoriesm', 'select_topicsm', 'select_booksb')" class="select">
															<option value="0" selected=>Other</option>
														</select>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="button" name="button_save_books" value="SAVE TO DATABASE" class="button" onclick="OnClickSaveButton('form_books')"/>
										</td>
									</tr>
								</table>
								<input name="button_save_books" type="hidden" value="SAVE BOOKS" />
								<input name="hidden_saved_books" id="hidden_saved_books" type="hidden" />
								<input name="hidden_deleted_books" id="hidden_deleted_books" type="hidden" />
							</form>
							<br/>
							<form method="post" id="form_book_image" class="form" enctype="multipart/form-data" style="width:538px;">
								<table cellpadding="10" cellspacing="0" border="0" class="table">
									<tr><td colspan="2"><b>BOOK IMAGES</b></td></tr>
									<tr>
										<td style="text-align:right">Select a category:</td>
										<td>
											<select id="select_categoriesf" onchange="OnChangeCategory('select_categoriesf', 'select_subcategoriesf', 'select_topicsf', 'select_booksf')" class="select">
												<?php DoGetCategoryOptions(); ?>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">Select a subcategory:</td>
										<td>
											<select id="select_subcategoriesf" onchange="OnChangeSubcategory('select_categoriesf', 'select_subcategoriesf', 'select_topicsf', 'select_booksf')" class="select">
												<option value="0" selected>No Subcategory</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">Select a topic:</td>
										<td>
											<select id="select_topicsf" onchange="OnChangeTopicf('select_categoriesf', 'select_subcategoriesf', 'select_topicsf', 'select_booksf', 'image_book')" class="select">
												<option value="0" selected=>Other</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>
											<select id="select_booksf" name="select_books" class="select" size="10" style="width:338px;overflow-x:scroll;" onchange="OnChangeBook('select_categoriesf', 'select_subcategoriesf', 'select_topicsf', 'select_booksf', 'image_book')">
											</select>
										</td>
									</tr>
									<tr>
										<td style="text-align:right">
										<label id="label_topic8">Book Image:</label></td>
										<td>
											<input name="file_image" type="file" accept="image/jpg, image/jpeg" />
											<br/>
											<br/>
											<img id="image_book" src="" alt="IMAGE PREVIEW" width="200"/>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="submit" name="button_save_image" value="SAVE TO DATABASE" class="button" />
										</td>
									</tr>
								</table>
								
							</form>
							
							<script type="text/javascript">
							
								g_strOptionWidth = "1000px";
								
								let g_arrayCategory = [];
								<?php DoCreateCategoryEntries(); ?>
								
								let g_arraySubcategory = [];
								<?php DoDoCreateSubcategoryArrayEntries(); ?>
								
								let g_mapSubcategory = {};
								<?php DoCreateSubcategoryEntries(); ?>
								
								let g_arrayTopic = {};
								<?php DoCreateTopicEntries(); ?>
																
								let g_arrayDeletedTopics = [];
									
								let g_arrayBooks = {};
								<?php DoCreateBookEntries(); ?>
								
								let g_arrayDeletedBooks = [];
								
								let g_nCurrentTopicID = 0;
									
								function IsDuplicateBook(strTitle, strAuthor, selectBooks)
								{
									let bDuplicate = false;
									
									for (let nI = 0; nI < selectBooks.options.length; nI++)
									{
										if ((selectBooks.options[nI].text.indexOf(strTitle) > -1) && 
											(selectBooks.options[nI].text.indexOf(strAuthor) > -1))
										{
											bDuplicate = true;
											break;
										}
									}
									return bDuplicate;
								}
								
								function IsDuplicateTopic(strDescription, selectTopics)
								{
									let bDuplicate = false;
									
									for (let nI = 0; nI < selectTopics.options.length; nI++)
									{
										if (selectTopics.options[nI].text == strDescription)										{
											bDuplicate = true;
											break;
										}
									}
									return bDuplicate;
								}
								
								function DoFormatName(strDescription)
								{
									let strNewDescription = "";
									strDescription = strDescription.toLowerCase();
									for (let nI = 0; nI < strDescription.length; nI++)
									{
										if (strDescription[nI] == " ")
											strNewDescription += "_";
										else
											strNewDescription += strDescription[nI];
									}										
									return strNewDescription;
								}
								
								function DoGetTopicIndex(nCurrentTopicID, arrayTopics)
								{
									let nI = -1;
									
									for (nI = 0; nI < arrayTopics.length; nI++)
									{
										if (nCurrentTopicID == arrayTopics[nI].id)
											break;
									}
									return nI;
								}
								
								function OnChangeCategory(strCategorySelectID, strSubcategorySelectID, strTopicSelectID, strBookSelectID)
								{
									let selectCategory = GetInput(strCategorySelectID),
										selectSubcategory = GetInput(strSubcategorySelectID),
										selectTopic = GetInput(strTopicSelectID),
										arraySubcategoryItems = [],
										option = null;
	
									if (selectCategory && selectSubcategory && (selectCategory.selectedIndex > -1))
									{
										arraySubcategoryItems = g_mapSubcategory[selectCategory.options[selectCategory.selectedIndex].value];
																				
										if (strBookSelectID !== undefined)
										{
											while (selectSubcategory.options.length > 0)
												selectSubcategory.remove(0);
											while (selectTopic.options.length > 1)
												selectTopic.remove(1);
										}
										else
										{
											while (selectSubcategory.options.length > 1)
												selectSubcategory.remove(1);
											while (selectTopic.options.length > 0)
												selectTopic.remove(0);
										}
										if (arraySubcategoryItems !== undefined)
										{											
											for (let nI = 0; nI < arraySubcategoryItems.length; nI++)
											{
												option = document.createElement("option");
												option.value = arraySubcategoryItems[nI].id;
												option.text = arraySubcategoryItems[nI].description;
												option.style.width = g_strOptionWidth;
												selectSubcategory.add(option);
											}
											selectSubcategory.selectedIndex = 0;
											
											if (strBookSelectID !== undefined)
											{
												OnChangeSubcategory(strCategorySelectID, strSubcategorySelectID, strTopicSelectID, strBookSelectID);
											}
										}
										arrayTopicItems = g_arrayTopic[selectCategory.options[selectCategory.selectedIndex].value + ",0"];
										if (arrayTopicItems !== undefined)
										{
											for (let nI = 0; nI < arrayTopicItems.length; nI++)
											{
												option = document.createElement("option");
												option.value = arrayTopicItems[nI].id;
												option.text = arrayTopicItems[nI].description;
												option.style.width = g_strOptionWidth;
												selectTopic.add(option);
											}
											selectTopic.selectedIndex = 0;
										}
									}
								}
								
								function OnChangeSubcategory(strCategorySelectID, strSubcategorySelectID, strTopicSelectID, strBookSelectID)
								{
									let selectCategory = GetInput(strCategorySelectID),
										selectSubcategory = GetInput(strSubcategorySelectID),
										selectTopic = GetInput(strTopicSelectID),
										arrayTopicItems = [],
										option = null,
										strKey = "";

									if (selectCategory && selectSubcategory && selectTopic && (selectCategory.selectedIndex > -1) && (selectSubcategory.selectedIndex > -1))
									{
										if (strBookSelectID !== undefined)
										{
											while (selectTopic.options.length > 1)
												selectTopic.remove(1);
										}
										else
										{
											while (selectTopic.options.length > 0)
												selectTopic.remove(0);
										}
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + selectSubcategory.options[selectSubcategory.selectedIndex].value;
										arrayTopicItems = g_arrayTopic[strKey];	
										if (arrayTopicItems !== undefined)
										{
											for (let nI = 0; nI < arrayTopicItems.length; nI++)
											{
												option = document.createElement("option");
												option.text = arrayTopicItems[nI].description;
												option.value = arrayTopicItems[nI].id;
												option.style.width = g_strOptionWidth;
												selectTopic.add(option);
											}
											selectTopic.selectedIndex = 0;
											if ((strBookSelectID !== undefined) && (strBookSelectID != ""))
											{
												OnChangeTopic(strCategorySelectID, strSubcategorySelectID, strTopicSelectID, strBookSelectID)
											}
										}
										
										strKey = selectCategory.options[selectCategory.selectedIndex].value;
									}
								}
								
								function OnChangeTopicForTopics(strCategoryID, strSubcategoryID, strTopicID, strTextTopicDescID)
								{
									let selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										selectTopic = GetInput(strTopicID),
										textTopicDesc = GetInput(strTextTopicDescID),
										arrayTopics = [], nI = 0;
									
									if (selectCategory && selectSubcategory && selectTopic && textTopicDesc)
									{
										g_nCurrentTopicID = selectTopic.options[selectTopic.selectedIndex].value;
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + 
													selectSubcategory.options[selectSubcategory.selectedIndex].value;
										nI = DoGetTopicIndex(g_arrayTopic[strKey], selectTopic.options[selectTopic.selectedIndex].value);
										textTopicDesc.value = g_arrayTopic[strKey][nI].description;
									}
								}
								
								OnChangeCategory("select_categories", "select_subcategories", "select_topics");
								OnChangeSubcategory("select_categories", "select_subcategories", "select_topics");
								OnChangeTopicForTopics("select_categories", "select_subcategories", "select_topics", "text_topic_desc")

								
								OnChangeCategory("select_categoriesb", "select_subcategoriesb", "select_topicsb");
								OnChangeSubcategory("select_categoriesb", "select_subcategoriesb", 'select_topicsb', 'select_booksb');
	
								function DoDeleteTopicItem(strListID, strCategoryID, strSubcategoryID, strTopicID)
								{
									let list = GetInput(strListID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategoryID = GetInput(strSubcategoryID),
										selectTopics = GetInput(strTopicID),
										strKey = "", strValue = "";

									if (list.selectedIndex > -1)
									{
										strValue = list.options[list.selectedIndex].value;
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + selectSubcategoryID.options[selectSubcategoryID.selectedIndex].value;
										if (strValue != "*")
										{
											g_arrayDeletedTopics.push(g_arrayTopic[strKey][DoGetTopicIndex(g_nCurrentTopicID, g_arrayTopic[strKey])]);
										}
										if (!g_arrayBooks[strKey])
										{
											delete g_arrayTopic[strKey];
											list.remove(list.selectedIndex);
											list.focus();
										}
										else
										{
											AlertWarning("This topic contains book items that need to be moved or removed in order to delete this topic!");
										}
									}
									else
									{
										AlertWarning("Please select an Item to delete!");
									}
								}
								
								function DoEditTopicItem(strListID, strTextDescID, strCategoryID, strSubcategoryID)
								{
									let list = GetInput(strListID),
										textDesc = GetInput(strTextDescID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										strKey = "",
										arrayTopics = [],
										strIDInArray = "", 
										strDelim = ", ",
										nI = 0;
									
									if (list.selectedIndex > -1)
									{
										if (!IsDuplicateTopic(textDesc.value, list))
										{
											strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + 
													selectSubcategory.options[selectSubcategory.selectedIndex].value;
											list.options[list.selectedIndex].text = textDesc.value;
											arrayTopics = g_arrayTopic[strKey];
											nI = DoGetTopicIndex(g_nCurrentTopicID, arrayTopics);
											arrayTopics[nI].description = textDesc.value;
											arrayTopics[nI].name = DoFormatName(textDesc.value);
											g_arrayTopic[strKey] = arrayTopics;
										}
									}
									else
									{
										AlertWarning("Please select an Item to edit!");
									}
								}
																
								function DoCopyTopicItem(strListID, strTextDescID)
								{
									let list = GetInput(strListID),
										textDesc = GetInput(strTextDescID);
									
									if (list.selectedIndex > -1)
									{
										textDesc.value = list.options[list.selectedIndex].text;
									}
									else
									{
										AlertWarning("Please select an Item to edit!");
									}
								}
								
								function DoAddTopicItem(strListID, strTextDescID, strCategoryID, strSubcategoryID)
								{
									let list = GetInput(strListID),
										textDesc = GetInput(strTextDescID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										option = null;
										
									if (!IsDuplicateTopic(textDesc.value, list))
									{
										option = document.createElement("option");
										option.value = "*";
										option.text = textDesc.value;
										option.style.width = g_strOptionWidth;
										list.add(option);
									
										strKey = selectCategory.options[selectCategory.selectedIndex].value + ", " + 
													selectSubcategory.options[selectSubcategory.selectedIndex].value;
										g_arrayTopic[strKey].push(strItem);
									}
									else
									{
										AlertWarning("The topic '" + textDesc.value + "' is already in the list of topics!");
									}
								}
								
								function DoGetTopicIndex(arrayTopics, strTopicID)
								{
									let nIndex = -1;
									
									for (let nI = 0; nI < arrayTopics.length; nI++)
									{
										if (arrayTopics[nI].id == strTopicID)
										{
											nIndex = nI;
											break;
										}
									}
									return nIndex;
								}
								
								function OnChangeTopic(strCategoryID, strSubcategoryID, strTopicID, strBookID)
								{
									let selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										selectTopic = GetInput(strTopicID),
										selectBooks = GetInput(strBookID),
										strKey = "";
										
									if (selectCategory && selectSubcategory && selectTopic && 
										(selectCategory.selectedIndex > -1) && (selectSubcategory.selectedIndex > -1) &&
										(selectTopic.selectedIndex > -1))
									{
										g_nCurrentTopicID = selectTopic.options[selectTopic.selectedIndex].value;
										DoFillBookList(strCategoryID, strSubcategoryID, strTopicID, strBookID)
									}
								}
								
								function DoMoveBookItem(strSelectBooks, strNewCategoryID, strNewSubcategoryID, strNewTopicID, strOrigCategoryID, strOrigSubcategoryID, strOrigTopicID)
								{
									let selectBooks = GetInput(strListID),
										selectNewCategory = GetInput(strNewCategoryID),
										selectNewSubcategory = GetInput(strNewSubcategoryID),
										selectNewTopic = GetInput(strSelectNewTopicsID),
										selectOrigCategory = GetInput(strOrigCategoryID),
										selectOrigSubcategory = GetInput(strOrigSubcategoryID),
										selectOrigTopic = GetInput(strSelectOrigTopicsID),
										strKey = "",
										arrayBooks = [];
										
									if (selectBooks && selectNewCategory && selectNewSubcategory && selectNewTopic &&
										selectOrigCategory && selectOrigSubcategory && selectOrigTopic)
									{
										strKey = selectOrigCategory.options[selectOrigCategory.selectedIndex].value + "," + 
													selectOrigSubcategory.options[selectOrigSubcategory.selectedIndex].value + ","
													selectOrigTopic.options[selectOrigTopic.selectedIndex].value;
										arrayBooks = g_arrayBooks[strKey];
										for (let nI = 0; nI < arrayBooks.length; nI++)
										{
											arrayBooks[nI].category_id = selectNewCategory.options[selectNewCategory.selectedIndex].value;
											arrayBooks[nI].subcategory_id = selectNewSubcategory.options[selectNewSubcategory.selectedIndex].value;
											arrayBooks[nI].topic_id = selectNewTopic.options[selectNewTopic.selectedIndex].value;
										}
										g_arrayBooks[strKey] = arrayBooks;
										OnChangeCategory(strOrigCategoryID, strOrigSubcategoryID, strOrigTopicID);
										OnChangeSubcategory(strOrigCategoryID, strOrigSubcategoryID, strOrigTopicID, strSelectBooks);
									}
								}
								
								function DoEditBookItem(strSelectBooksID, strSelectCategoryID, strSelectSubcategoryID, strSelectTopicsID)
								{
									let selectBooks = GetInput(strSelectBooksID),
										selectCategory = GetInput(strSelectCategoryID),
										selectSubcategory = GetInput(strSelectSubcategoryID),
										selectTopic = GetInput(strSelectTopicsID),
										textTitle = GetInput("text_title"),
										textAuthor = GetInput("text_author"),
										textSummary = GetInput("text_summary"),
										textPrice = GetInput("text_price"),
										textWeight = GetInput("text_weight"),
										textQuantity = GetInput("text_quantity"),
										selectType = GetInput("select_type"),
										mapBookItem = {}, 
										option = null;
										
									if (selectBooks && selectCategory && selectSubcategory && selectType &&
										selectTopic && (selectTopic.selectedIndex > -1) && textTitle &&  
										textAuthor && textSummary && textPrice && textWeight && textQuantity)
									{
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + 
												selectSubcategory.options[selectSubcategory.selectedIndex].value + "," + 
												selectTopic.options[selectTopic.selectedIndex].value;
												
										let nI = DoGetBookIndex(selectBooks.options[selectBooks.selectedIndex].value, g_arrayBooks[strKey]);
										mapBookItem = g_arrayBooks[strKey][nI];
										
										mapBookItem["category_id"] = selectCategory.options[selectCategory.selectedIndex].value;
										mapBookItem["subcategory_id"] = selectSubcategory.options[selectSubcategory.selectedIndex].value;
										mapBookItem["topic_id"] = selectTopic.options[selectTopic.selectedIndex].value;
										mapBookItem["title"] = textTitle.value;
										mapBookItem["author"] = textAuthor.value;
										mapBookItem["summary"] = textSummary.value;
										mapBookItem["price"] = textPrice.value;
										mapBookItem["weight"] = textWeight.value;
										mapBookItem["quantity"] = textQuantity.value;
										mapBookItem["type_id"] = selectType.options[selectType.selectedIndex].value;
										g_arrayBooks[strKey][nI] = mapBookItem;

										selectBooks.options[selectBooks.selectedIndex].text = textTitle.value + ", " + textAuthor.value + ", " + selectType.option[selectType.selectedIndex].text + ", $" + textPrice.value + ", " + textQuantity.value;
									}
								}
								
								function DoAddBookItem(strListID, strCategoryID, strSubcategoryID, strTopicID)
								{
									let selectBooks = GetInput(strListID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										selectTopic = GetInput(strTopicID),
										textTitle = GetInput("text_title"),
										textAuthor = GetInput("text_author"),
										textSummary = GetInput("text_summary"),
										textPrice = GetInput("text_price"),
										textWeight = GetInput("text_weight"),
										textQuantity = GetInput("text_quantity"),
										selectType = GetInput("select_type"),										mapBookItem = {}, 
										option = null,
										strKey = "";
									
									if (selectBooks && selectCategory && selectSubcategory && fileImage && 
										selectTopic && (selectTopic.selectedIndex > -1) && textTitle &&
										textAuthor && textSummary && textPrice && textWeight && textQuantity)
									{
										if (!IsDuplicateBook(textTitle.value, textAuthor.value, list))
										{
											mapBookItem["category_id"] = selectCategory.options[selectCategory.selectedIndex].value;
											mapBookItem["subcategory_id"] = selectSubcategory.options[selectSubcategory.selectedIndex].value;
											mapBookItem["topic_id"] = selectTopic.options[selectTopic.selectedIndex].value;
											mapBookItem["id"] = "*";
											mapBookItem["title"] = textTitle.value;
											mapBookItem["author"] = textAuthor.value;
											mapBookItem["summary"] = textSummary.value;
											mapBookItem["price"] = textPrice.value;
											mapBookItem["weight"] = textWeight.value;
											mapBookItem["quantity"] = textQuantity.value;
											mapBookItem["type_id"] = selectType.options[selectType.selectedIndex].value;
											strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + 
														selectSubcategory.options[selectSubcategory.selectedIndex].value + "," +
														selectTopic.options[selectTopic.selectedIndex].value;
											if (g_arrayBooks[strKey] == undefined)
												g_arrayBooks[strKey] = [];
											g_arrayBooks[strKey].push(mapBookItem);
											
											DoFillBookList(strBookListID, strCategoryID, strSubcategoryID, strTopicID);
										}
										else
										{
											AlertWarning("The book '" + textTitle.value + ", " + textAuthor.value + "' is already in the list of topics!");
										}
									}
								}
								
								function DoGetBookIndex(strBookID, arrayBooks)
								{
									let nIndex = -1;
									
									for (let nI = 0; nI < arrayBooks.length; nI++)
									{
										if (arrayBooks[nI].id == strBookID)
										{
											nIndex = nI;
											break;
										}
									}
									return nIndex;
								}
								
								function DoSetBookTypeSelection(selectType, strBookTypeID)
								{
									for (let nI = 0; nI < selectType.options.length; nI++)
									{
										if (selectType.options[nI].value == strBookTypeID)
										{
											selectType.selectedIndex = nI;
											break;
										}
									}
								}
								
								function DoCopyBookItem(strSelectCategoriesID, strSelectSubcategoriesID, strSelectTopicsID, strSelectBooksID, strBookImageID)
								{
									let selectBooks = GetInput(strSelectBooksID),
										selectCategory = GetInput(strSelectCategoriesID),
										selectSubcategory = GetInput(strSelectSubcategoriesID),
										selectTopic = GetInput(strSelectTopicsID),
										textTitle = GetInput("text_title"),
										textAuthor = GetInput("text_author"),
										textSummary = GetInput("text_summary"),
										textPrice = GetInput("text_price"),
										textWeight = GetInput("text_weight"),
										textQuantity = GetInput("text_quantity"),
										selectType = GetInput('select_type'),
										imageBook = GetInput(strBookImageID),
										mapBookItem = {},
										strKey = "";
									
									if (selectCategory && selectCategory && selectTopic && selectBooks && selectType && imageBook && 
										(selectCategory.selectedIndex > -1) && (selectSubcategory.selectedIndex > -1) && 
										(selectTopic.selectedIndex > -1) && (selectBooks.selectedIndex > -1))
									{
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + 
												selectSubcategory.options[selectSubcategory.selectedIndex].value + "," + 
												selectTopic.options[selectTopic.selectedIndex].value;
												
										let nI = DoGetBookIndex(selectBooks.options[selectBooks.selectedIndex].value, g_arrayBooks[strKey]);
										mapBookItem = g_arrayBooks[strKey][nI];
										textTitle.value = mapBookItem["title"];
										textAuthor.value = mapBookItem["author"];
										textSummary.value = mapBookItem["summary"];
										textPrice.value = mapBookItem["price"];
										textWeight.value = mapBookItem["weight"];
										textQuantity.value = mapBookItem["quantity"];
										if (mapBookItem["image_filename"] != "")
											imageBook.src = g_strURL + mapBookItem["image_filename"];
										DoSetBookTypeSelection(selectType, mapBookItem["type_id"]);
									}
									else
									{
										AlertWarning("Please select an Item to edit!");
									}
								}

								function DoDeleteBookItem(strListID, strCategoryID, strSubcategoryID, strTopicID)
								{
									let selectBooks = GetInput(strListID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										selectTopic = GetInput(strTopicID),
										strKey = "", strValue = "";

									if (selectBooks.selectedIndex > -1)
									{
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + selectSubcategory.options[selectSubcategory.selectedIndex].value + "," + selectTopic.options[selectTopic.selectedIndex].value;
										strValue = selectBooks.options[selectBooks.selectedIndex].text;
										if (strValue.indexOf("*") == -1)
										{
											g_arrayDeletedBooks.push(strValue);
										}
										selectBooks.remove(selectBooks.selectedIndex);
										delete g_arrayBooks[strKey];
										selectBooks.focus();
									}
									else
									{
										AlertWarning("Please select an Item to delete!");
									}
								}
								
								function DoFillBookList(strCategoryID, strSubcategoryID, strTopicID, strBookListID)
								{
									let selectBookList = GetInput(strBookListID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										selectTopic = GetInput(strTopicID),
										strKey = "",
										arrayBooks = [],
										option = null;
										
									if (selectBookList && selectCategory && selectSubcategory && selectTopic)
									{
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," +
												 selectSubcategory.options[selectSubcategory.selectedIndex].value + "," +
												 selectTopic.options[selectTopic.selectedIndex].value;
										arrayBooks = g_arrayBooks[strKey];
										if (arrayBooks !== undefined)
										{
											for (let nI = 0; nI < arrayBooks.length; nI++)
											{
												option = document.createElement("option");
												option.value = arrayBooks[nI].id;
												option.text = arrayBooks[nI].title + ", " + arrayBooks[nI].author + ", " + 
													arrayBooks[nI].type_id + ", $" + 
													Number(arrayBooks[nI].price).toFixed(2).toString() + ", x" + parseInt(arrayBooks[nI].quantity).toString();
												option.style.width = g_strOptionWidth;
												selectBookList.add(option);
											}
											selectBookList.selectedIndex = 0;
										}
									}
								}
													
								function OnClickSaveButton(strFunction, strCategoryID, strSubcategoryID, strTopicID)
								{										
									if (strFunction == "form_topics")
									{											
										let hiddenSavedTopics = GetInput("hidden_saved_topics"),
											hiddenDeletedTopics = GetInput("hidden_deleted_topics");
											
										hiddenSavedTopics.value = JSON.stringify(g_arrayTopic);
										hiddenDeletedTopics.value  = JSON.stringify(g_arrayDeletedTopics);
										document.getElementById("form_topics").submit();
									}
									else if (strFunction == "form_books")
									{
										let hiddenSavedBooks = GetInput("hidden_saved_books"),
											hiddenDeletedBooks = GetInput("hidden_deleted_books");
											
										hiddenSavedBooks.value = JSON.stringify(g_arrayBooks);
										hiddenDeletedBooks.value  = JSON.stringify(g_arrayDeletedBooks);
										document.getElementById("form_books").submit();
									}
								}
								
								function OnChangeTopicf(strSelectCategoryID, strSelectSubcategoryID, strSelectTopicID, strSelectBookID, strImageID)
								{
									OnChangeTopic(strSelectCategoryID, strSelectSubcategoryID, strSelectTopicID, strSelectBookID);
									OnChangeBook(strSelectCategoryID, strSelectSubcategoryID, strSelectTopicID, strSelectBookID, strImageID);
								}
								
								function OnChangeBook(strCategoryID, strSubcategoryID, strTopicID, strBookID, strImageID)
								{
									let selectBooks = GetInput(strBookID),
										selectCategory = GetInput(strCategoryID),
										selectSubcategory = GetInput(strSubcategoryID),
										selectTopic = GetInput(strTopicID),
										strKey = "", nI = -1,
										mapBookItem = null;
										
									if (selectCategory && selectSubcategory && selectTopic && selectBooks)
									{
										strKey = selectCategory.options[selectCategory.selectedIndex].value + "," + selectSubcategory.options[selectSubcategory.selectedIndex].value + "," + selectTopic.options[selectTopic.selectedIndex].value;
 										let nI = DoGetBookIndex(selectBooks.options[selectBooks.selectedIndex].value, g_arrayBooks[strKey]);
										mapBookItem = g_arrayBooks[strKey][nI];
										DoCopyBookItem(strBookID, strCategoryID, strSubcategoryID, strTopicID, strImageID)
									}
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
