<?php
		
	session_start();
	



	//******************************************************************************
	//** 
	//** ENCRYPTION FUNCTIONS
	//** 
	//******************************************************************************
	//******************************************************************************

	require_once $_SERVER['DOCUMENT_ROOT'] . "\CryptoJSAES.php";

	$g_strKey = "dPRBqi32EH7LgfxuhWXm";
	
	setcookie("find-a-tradie", "encryption_key=" . $g_strKey . ",SameSite=Strict", 0, "/");
	
	function DoAESEncrypt($strPlainText)
	{
		global $g_strKey;

		//$strResult = base64_encode($strPlainText);
		$strResult = CryptoJsAes::encrypt($strPlainText, $g_strKey);

		return $strResult;
	}
	
	function DoAESDecrypt($strEncryptedText)
	{
		global $g_strKey;

		//$strResult = base64_decode($strEncryptedText);
		$strResult = CryptoJsAes::decrypt($strEncryptedText, $g_strKey);

		return $strResult;
	}
	


	
	//******************************************************************************
	//******************************************************************************
	//** 
	//** GENERAL FUNCTIONS
	//** 
	//******************************************************************************
	//******************************************************************************

	function DoGetDateNow()
	{
		$dateNow = new DateTime();
		return $dateNow->format("Y-m-d");
	}
	
	function RelaceCRLF($strText)
	{
		while (strpos($strText, "\r\n"))
			$strText = str_replace("\r\n", "<br/>", $strText);
		
		while (strpos($strText, "\n\r"))
			$strText = str_replace("\n\r", "<br/>", $strText);
		
		while (strpos($strText, "\n"))
			$strText = str_replace("\n", "<br/>", $strText);
		
		while (strpos($strText, "\r"))
			$strText = str_replace("\r", "<br/>", $strText);
		
		return $strText;
	}
	
	function PrintIndents($nNum)
	{
		for ($nI = 0; $nI < $nNum; $nI++)
			echo "\t";
	}
	
	function DoLeftPad($strText, $nLength, $strPad)
	{
		$nNum = $nLength - strlen($strText);
		
		for ($nI = 0; $nI < $nNum; $nI++)
			$strText = $strPad . $strText;
			
		return $strText;
	}
	
	function DoRightPad($strText, $nLength, $strPad)
	{
		$nNum = $nLength - strlen($strText);
		
		for ($nI = 0; $nI < $nNum; $nI++)
			$strText = $strText . $strPad;
			
		return $strText;
	}
	
	function DebugPrintMsg($strMsg, $nHeadingLevel, $strBGColor = "white")
	{
		$strOpening = "<div style=\"background-color:\"" . $strBGColor . "\">";
		$strClosing = "</div>";

		switch ($nHeadingLevel)
		{
			case 1: $strOpening = $strOpening . "<h1>"; $strClosing = "</h1>" . $strClosing ;break;
			case 2: $strOpening = $strOpening . "<h2>"; $strClosing = "</h2>" . $strClosing ;break;
			case 3: $strOpening = $strOpening . "<h3>"; $strClosing = "</h3>" . $strClosing ;break;
			case 4: $strOpening = $strOpening . "<h4>"; $strClosing = "</h4>" . $strClosing ;break;
			case 5: $strOpening = $strOpening . "<h5>"; $strClosing = "</h5>" . $strClosing ;break;
			case 6: $strOpening = $strOpening . "<h6>"; $strClosing = "</h6>" . $strClosing ;break;
			default: $strOpening = $strOpening . "<p>"; $strClosing = "</p>" . $strClosing ;break;
		}
		echo $strOpening . $strMsg . $strClosing . "<br>";
	}
	
	function DebugPrint($strVarName, $strVarValue, $nHeadingLevel, $strBGColor = "white")
	{
		$strOpening = "<div style=\"background-color:" . $strBGColor . "\">";
		$strClosing = "</div>";
		
		switch ($nHeadingLevel)
		{
			case 1: $strOpening = $strOpening . "<h1>"; $strClosing = "</h1>" . $strClosing ;break;
			case 2: $strOpening = $strOpening . "<h2>"; $strClosing = "</h2>" . $strClosing ;break;
			case 3: $strOpening = $strOpening . "<h3>"; $strClosing = "</h3>" . $strClosing ;break;
			case 4: $strOpening = $strOpening . "<h4>"; $strClosing = "</h4>" . $strClosing ;break;
			case 5: $strOpening = $strOpening . "<h5>"; $strClosing = "</h5>" . $strClosing ;break;
			case 6: $strOpening = $strOpening . "<h6>"; $strClosing = "</h6>" . $strClosing ;break;
			default: $strOpening = $strOpening . "<p>"; $strClosing = "</p>" . $strClosing ;break;
		}
		echo $strOpening . $strVarName . " = " . $strVarValue . $strClosing . "<br>";
	}
	
	function PrintJavascriptLine($strCode, $nNumIndents, $bScriptTags)
	{
		if ($bScriptTags)
		{
			PrintIndents($nNumIndents);
			echo "<script type=\"text/javascript\">\n";
			PrintIndents($nNumIndents + 1);
			echo $strCode . "\n";
			PrintIndents($nNumIndents);
			echo "</script>\n";
		}
		else
		{
			PrintIndents($nNumIndents);
			echo $strCode . "\n";
		}
	}

	function PrintJSAlertSuccess($strMsg, $nNumIndents)
	{
		PrintJavascriptLine("AlertSuccess(\"" . $strMsg . "\");", $nNumIndents, true);
	}
	
	function PrintJSAlertWarning($strMsg, $nNumIndents)
	{
		PrintJavascriptLine("AlertWarning(\"" . $strMsg . "\");", $nNumIndents, true);
	}
	
	function PrintJSAlertError($strMsg, $nNumIndents)
	{
		PrintJavascriptLine("AlertError(\"" . $strMsg . "\");", $nNumIndents, true);
	}
	
	function PrintJavascriptLines($arrayStrCode, $nNumIndents, $bScriptTags)
	{
		if ($bScriptTags)
		{
			echo "<script type=\"text/javascript\">\n";
			for ($nI = 0; $nI < count($arrayStrCode); $nI++)
			{
				PrintIndents($nNumIndents + 1);
				echo $arrayStrCode[$nI] . "\n";
			}
			echo "</script>\n";
		}
		else
		{
			for ($nI = 0; $nI < count($arrayStrCode); $nI++)
			{
				PrintIndents($nNumIndents);
				echo $arrayStrCode[$nI] . "\n";
			}
		}
	}	
	
	
	
	
	//******************************************************************************
	//******************************************************************************
	//** 
	//** QUERY STRING FUNCTIONS
	//** 
	//******************************************************************************
	//******************************************************************************

	function EscapeSingleQuote($strText)
	{
		return str_replace("'", "''", $strText);
	}
	
	function AppendSQLInsertValues(...$param) 
	{
		$strQuery = "";

		foreach ($param as $strDataItem)
		{
			$strQuery = $strQuery . "'" . EscapeSingleQuote($strDataItem) . "', ";
		}
		$strQuery = substr_replace($strQuery, "", -2);
		
		return $strQuery;
	}

	function AppendSQLUpdateValues(...$param) 
	{
		$strQuery = "";
		$nI = 0;

		foreach ($param as $strItem)
		{
			if (($nI % 2) == 0)
			{
				$strQuery = $strQuery . $strItem . "='";
			}
			else
			{
				$strQuery = $strQuery . EscapeSingleQuote($strItem) . "', ";
			}
			$nI++;
		}
		$strQuery = substr_replace($strQuery, "", -2);
		
		return $strQuery;
	}
	
	
	
	

	//******************************************************************************
	//******************************************************************************
	//** 
	//** GENERAL QUERY FUNCTIONS
	//** 
	//******************************************************************************
	//******************************************************************************
	
	function ConnectToDatabase()
	{
		$dbKatesCastle = null;
		global $g_strEmailAdmin;
		
		try
		{		
			$dbKatesCastle = new mysqli("127.0.0.1", "gregaryb", "Pulsar112358#", "katescastle");
		}
		catch(Exception $e)
		{
			PrintJavascriptLine("AlertError(\"'" . $e->getMessage() . "'\");", 2, true);
			//echo "ERROR: '". $e->getMessage() . "'<br/><br/>Trying to connect to database 'find_a_tradie'.<br/><br/>" . $g_strEmailAdmin;
		}
		return $dbKatesCastle;
	}
	$g_dbKatesCastle = ConnectToDatabase();
	$g_strQuery = "";
	
	function DoQuery($dbConnection, $strQuery)
	{
		global $g_strEmailAdmin;
		$result = "";

		try
		{	
			$result = $dbConnection->query($strQuery);		
		}
		catch(Exception $e) 
		{
			PrintJavascriptLine("AlertError(\"'" . $e->getMessage() . "' with query '" . $strQuery . "'\");", 2, true);
  			//echo "ERROR: '". $e->getMessage() . "'<br><br>With query '" . $strQuery . "'.<br><br>" . $g_strEmailAdmin;
		}		
		return $result;
	}

	function DoFindAllQuery($dbConnection, $strTableName, $strCondition = "", $strOrderBy = "")
	{
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName;
		
		if ($strCondition != "")
			$g_strQuery = $g_strQuery . " WHERE " . $strCondition;
			
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoFindQuery0($dbConnection, $strTableName, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName;

		if (strlen($strCondition) > 0)
			$g_strQuery = $g_strQuery . " WHERE " . $strCondition;
		if (strlen($strOrderBy) > 0)
		{
			$g_strQuery = $g_strQuery . " ORDER BY " . $strOrderBy;
			if ($bAscending)
			{
				$g_strQuery = $g_strQuery . " ASC";
			}
			else
			{
				$g_strQuery = $g_strQuery . " DESC";
			}
		}
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoFindQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName . "='" . EscapeSingleQuote($strColumnValue) . "'";

		if (strlen($strCondition) > 0)
			$g_strQuery = $g_strQuery . " AND " . $strCondition;
		if (strlen($strOrderBy) > 0)
		{
			$g_strQuery = $g_strQuery . " ORDER BY " . $strOrderBy;
			if ($bAscending)
			{
				$g_strQuery = $g_strQuery . " ASC";
			}
			else
			{
				$g_strQuery = $g_strQuery . " DESC";
			}
		}
		return DoQuery($dbConnection, $g_strQuery);
	}	
	
	function DoFindQuery2($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{	
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . EscapeSingleQuote($strColumnValue1) . "' AND " . $strColumnName2 . "='" . EscapeSingleQuote($strColumnValue2) . "'";
	
		if (strlen($strCondition) > 0)
			$g_strQuery = $g_strQuery . " AND " . $strCondition;
		if (strlen($strOrderBy) > 0)
		{
			$g_strQuery = $g_strQuery . " ORDER BY " . $strOrderBy;
			if ($bAscending)
			{
				$g_strQuery = $g_strQuery . " ASC";
			}
			else
			{
				$g_strQuery = $g_strQuery . " DESC";
			}
		}
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoFindQuery3($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{	
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . EscapeSingleQuote($strColumnValue1) . "' AND " . $strColumnName2 . "='" . EscapeSingleQuote($strColumnValue2) . "' AND " . $strColumnName3 . "='" . EscapeSingleQuote($strColumnValue3) . "'";		
	
		if (strlen($strCondition) > 0)
			$g_strQuery = $g_strQuery . " AND " . $strCondition;
		if (strlen($strOrderBy) > 0)
		{
			$g_strQuery = $g_strQuery . " ORDER BY " . $strOrderBy;
			if ($bAscending)
			{
				$g_strQuery = $g_strQuery . " ASC";
			}
			else
			{
				$g_strQuery = $g_strQuery . " DESC";
			}
		}
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertFindQuery1($dbConnection, $strQuery, $strTableName, $strColumnName, $strColumnValue)
	{
		$result = DoFindQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue);
		if ($result->num_rows == 0)
			$result = $dbConnection->query($strQuery);	
		
		return $result;
	}

	function DoInsertFindQuery2($dbConnection, $strQuery, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2)
	{
		$result = DoFindQuery($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2);
		if ($result->num_rows == 0)
			$result = $dbConnection->query($strQuery);
		
		return $result;
	}

	function DoInsertFindQuery3($dbConnection, $strQuery, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3)
	{		
		$result = DoFindQuery($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3);
		if ($result->num_rows == 0)
			$result = $dbConnection->query($strQuery);
		
		return $result;
	}
	
	function DoUpdateQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName . "='" . EscapeSingleQuote($strColumnValue) . "' WHERE " . 
			$strFindColumnName . "='" . $strFindColumnValue . "'";
	
		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoUpdateQuery2($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . EscapeSingleQuote($strColumnValue1) . "'," . 
			$strColumnName2 . "='" .  $strColumnValue2 . "' WHERE " . 
			$strFindColumnName . "='" . EscapeSingleQuote($strFindColumnValue) . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoUpdateQuery4($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . EscapeSingleQuote($strColumnValue1) . "'," . 
			$strColumnName2 . "='" .  EscapeSingleQuote($strColumnValue2) . "'," . $strColumnName3 . "='" .  EscapeSingleQuote($strColumnValue3) . 
			$strColumnName4 . "='" .  $strColumnValue4 . 
			"' WHERE " . $strFindColumnName . "='" . $strFindColumnValue . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoUpdateQuery5($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . EscapeSingleQuote($strColumnValue1) . "', " . 
			$strColumnName2 . "='" .  EscapeSingleQuote($strColumnValue2) . "', " . $strColumnName3 . "='" .  EscapeSingleQuote($strColumnValue3) . "', " .
			$strColumnName4 . "='" .  EscapeSingleQuote($strColumnValue4) . "', " . $strColumnName5 . "='" .  EscapeSingleQuote($strColumnValue5) . 
			"' WHERE " . $strFindColumnName . "='" . $strFindColumnValue . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoDeleteQuery($dbConnection, $strTableName, $strColumnName, $strColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "DELETE FROM " . $strTableName . " WHERE " . $strColumnName . "='" . EscapeSingleQuote($strColumnValue) . "'";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName . ") VALUES('" . EscapeSingleQuote($strColumnValue) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoInsertQuery2($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . ") VALUES('" . EscapeSingleQuote($strColumnValue1) . "','" . EscapeSingleQuote($strColumnValue2) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoInsertQuery3($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . ") VALUES('" . EscapeSingleQuote($strColumnValue1) . "','" . EscapeSingleQuote($strColumnValue2) . "','" . EscapeSingleQuote($strColumnValue3) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery4($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . ") VALUES('" . EscapeSingleQuote($strColumnValue1) . "','" . EscapeSingleQuote($strColumnValue2) . "','" . EscapeSingleQuote($strColumnValue3) . "','" . EscapeSingleQuote($strColumnValue4) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery5($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . "," . $strColumnName5 . ") VALUES('" . EscapeSingleQuote($strColumnValue1) . "','" . EscapeSingleQuote($strColumnValue2) . "','" . EscapeSingleQuote($strColumnValue3) . "','" . EscapeSingleQuote($strColumnValue4) . "','" . EscapeSingleQuote($strColumnValue5) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery6($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strColumnName6, $strColumnValue6)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . "," . $strColumnName5 . "," . $strColumnName6 . ") VALUES('" . EscapeSingleQuote($strColumnValue1) . "','" . EscapeSingleQuote($strColumnValue2) . "','" . EscapeSingleQuote($strColumnValue3) . "','" . EscapeSingleQuote($strColumnValue4) . "','" . EscapeSingleQuote($strColumnValue5) . "','" . EscapeSingleQuote($strColumnValue6) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoDeleteQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "DELETE FROM " . $strTableName . " WHERE " . $strColumnName . "='" . EscapeSingleQuote($strColumnValue) . "'";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	//******************************************************************************
	//******************************************************************************
	//** 
	//** CATEGORIES, SUB-CATEGORIES & TOPICS
	//** 
	//******************************************************************************
	//******************************************************************************
	
	function DoGetCategoryID($strName)
	{
		global $g_dbKatesCastle;
		$strID = "";
		
		$results = DoFindQuery1($g_dbKatesCastle, "categories", "name", $strName);
		if ($results && ($results->num_rows > 0))
		{
			if ($row = $results->fetch_assoc())
			{
				$strID = $row["id"];
			}
		}
		return $strID;
	}
	
	function DoGetSubcategoryID($strName, $strCategoryID)
	{
		global $g_dbKatesCastle;
		$strID = "";
		
		$results = DoFindQuery2($g_dbKatesCastle, "subcategories", "name", $strName, "category_id", $strCategoryID);
		if ($results && ($results->num_rows > 0))
		{
			if ($row = $results->fetch_assoc())
			{
				$strID = $row["id"];
			}
		}
		return $strID;
	}

	function DoGetTopics($strCategoryID, $strSubcategoryID)
	{
		global $g_dbKatesCastle;
		
		$results = DoFindQuery2($g_dbKatesCastle, "topics", "category_id" , $strCategoryID, "subcategory_id", $strSubcategoryID, "", "name");
		if ($results && ($results->num_rows))
		{
			while ($row = $results->fetch_assoc())
			{
				echo "\"" . $row["description"] . "\", ";
			}
			echo "\"Other\"";
		}
		else
		{
			echo "\"None found\", \"" . $strCategoryID. "\", \"" . $strSubcategoryID . "\"";
		}
	}

	function DoGetBooks($strCategoryID, $strSubcategoryID)
	{
		/*
		[
		["Title 1", "Joe Bloggs", "4.00", "Book description 1", "/Children/images/image.jpg", "220"],
		["Title 2", "John Doe", "1.00", "Book description 2", "/Children/images/image.jpg", "330"],
		["Title 3", "Fred Smith", "3.00", "Book description 3", "/Children/images/image.jpg", "140"]
		],
		*/
		global $g_dbKatesCastle;
		
		$resultsTopics = DoFindQuery2($g_dbKatesCastle, "topics", "category_id" , $strCategoryID, "subcategory_id", $strSubcategoryID);
		if ($resultsTopics && ($resultsTopics->num_rows > 0))
		{
			$nCountTopic = 0;
			while ($rowTopic = $resultsTopics->fetch_assoc())
			{
				$nCountTopic++;
				echo "[";
				$resultsBooks = DoFindQuery3($g_dbKatesCastle, "books", "category_id" , $strCategoryID, "subcategory_id", $strCategoryID, "topic_id", $rowTopic["id"], "", "title");

				if ($resultsBooks && ($resultsBooks->num_rows > 0))
				{
					$nCountBooks = 0;
					while ($rowBooks = $resultsBooks->fetch_assoc())
					{
						$nCountBooks++;
						echo "[";
						echo "\"" . $rowBooks["id"] . "\", \"" . $rowBooks["title"] . "\", \"" . 
								sprintf("%.02f", $rowBooks["price"]) . "\", \"" . $rowBooks["sumary"] .
								"\", \"" . $rowBooks["image_filename"] . "\", \"" . $rowBooks["weight"] . "\"]";
						echo "]";
						if ($nCountBooks< $resultsBooks->num_rows)
							echo ",";
						echo "\n";
					}
				}
				echo "]";
				if ($nCountTopic < $resultsTopics->num_rows)
					echo ",";
				echo "\n";
			}
		}
	}
	
	$g_mapCategory = (object)[];
	$g_mapCategory->children = DoGetCategoryID("children");
	$g_mapCategory->emporium = DoGetCategoryID("emporium");
	$g_mapCategory->fiction = DoGetCategoryID("fiction");
	$g_mapCategory->non_fiction = DoGetCategoryID("non_fiction");
	$g_mapCategory->specialist = DoGetCategoryID("specialist");
	$g_mapCategory->young_adults = DoGetCategoryID("young_adults");

	$g_mapSubcategory = (object)[];
	$g_mapSubcategory->action = DoGetSubcategoryID("action", $g_mapCategory->fiction);
	$g_mapSubcategory->crime = DoGetSubcategoryID("crime", $g_mapCategory->fiction);
	$g_mapSubcategory->fantasy = DoGetSubcategoryID("fantasy", $g_mapCategory->fiction);
	$g_mapSubcategory->general = DoGetSubcategoryID("general", $g_mapCategory->fiction);
	$g_mapSubcategory->horror = DoGetSubcategoryID("horror", $g_mapCategory->fiction);
	$g_mapSubcategory->mystery = DoGetSubcategoryID("mystery", $g_mapCategory->fiction);
	$g_mapSubcategory->romance = DoGetSubcategoryID("romance", $g_mapCategory->fiction);
	$g_mapSubcategory->saga = DoGetSubcategoryID("saga", $g_mapCategory->fiction);
	$g_mapSubcategory->science = DoGetSubcategoryID("science", $g_mapCategory->fiction);
	$g_mapSubcategory->thrillers = DoGetSubcategoryID("thrillers", $g_mapCategory->fiction);
	$g_mapSubcategory->westerns = DoGetSubcategoryID("westerns", $g_mapCategory->fiction);
	$g_mapSubcategory->arts = DoGetSubcategoryID("arts", $g_mapCategory->non_fiction);
	$g_mapSubcategory->autobiography = DoGetSubcategoryID("autobiography", $g_mapCategory->non_fiction);
	$g_mapSubcategory->cooking = DoGetSubcategoryID("cooking", $g_mapCategory->non_fiction);
	$g_mapSubcategory->crafts = DoGetSubcategoryID("crafts", $g_mapCategory->non_fiction);
	$g_mapSubcategory->education = DoGetSubcategoryID("education", $g_mapCategory->non_fiction);
	$g_mapSubcategory->gardening = DoGetSubcategoryID("gardening", $g_mapCategory->non_fiction);
	$g_mapSubcategory->health = DoGetSubcategoryID("health", $g_mapCategory->non_fiction);
	$g_mapSubcategory->hobbies = DoGetSubcategoryID("hobbies", $g_mapCategory->non_fiction);
	$g_mapSubcategory->humour = DoGetSubcategoryID("humour", $g_mapCategory->non_fiction);
	$g_mapSubcategory->outdoors = DoGetSubcategoryID("outdoors", $g_mapCategory->non_fiction);
	$g_mapSubcategory->reference = DoGetSubcategoryID("reference", $g_mapCategory->non_fiction);
	$g_mapSubcategory->religion = DoGetSubcategoryID("religion", $g_mapCategory->non_fiction);
	$g_mapSubcategory->sports = DoGetSubcategoryID("sports", $g_mapCategory->non_fiction);
	$g_mapSubcategory->technology = DoGetSubcategoryID("technology", $g_mapCategory->non_fiction);
	$g_mapSubcategory->travel = DoGetSubcategoryID("travel", $g_mapCategory->non_fiction);
	$g_mapSubcategory->world = DoGetSubcategoryID("world", $g_mapCategory->non_fiction);
	
	$g_mapSubcategory->antiques = DoGetSubcategoryID("antiques", $g_mapCategory->specialist);
	$g_mapSubcategory->box_sets = DoGetSubcategoryID("box_sets", $g_mapCategory->specialist);
	$g_mapSubcategory->classics = DoGetSubcategoryID("classics", $g_mapCategory->specialist);
	$g_mapSubcategory->first_editions = DoGetSubcategoryID("first_editions", $g_mapCategory->specialist);
	$g_mapSubcategory->mills_and_boon = DoGetSubcategoryID("mills_and_boon", $g_mapCategory->specialist);
	$g_mapSubcategory->miscellaneous = DoGetSubcategoryID("miscellaneous", $g_mapCategory->specialist);
	$g_mapSubcategory->national_geographic = DoGetSubcategoryID("national_geographic", $g_mapCategory->specialist);
	$g_mapSubcategory->penguin = DoGetSubcategoryID("penguin", $g_mapCategory->specialist);
	$g_mapSubcategory->authors = DoGetSubcategoryID("authors", $g_mapCategory->specialist);
	$g_mapSubcategory->readers_digest = DoGetSubcategoryID("readers_digest", $g_mapCategory->specialist);
	$g_mapSubcategory->retro = DoGetSubcategoryID("retro", $g_mapCategory->specialist);
	$g_mapSubcategory->series = DoGetSubcategoryID("series", $g_mapCategory->specialist);
	$g_mapSubcategory->shakespeare = DoGetSubcategoryID("shakespeare", $g_mapCategory->specialist);
	$g_mapSubcategory->vintage = DoGetSubcategoryID("vintage", $g_mapCategory->specialist);
	
	//print_r($g_mapSubcategory);
?>
