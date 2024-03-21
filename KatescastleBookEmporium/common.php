<?php

	$g_strEmailCathy = "katescastle@ozemail.com.au";
	$g_strEmailAdmin = "gregplants@bigpond.com";
	
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
	
	//******************************************************************************
	//** 
	//** DEBUGGIN FUNCTIONS
	//** 
	//******************************************************************************
	//******************************************************************************

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
	
	//******************************************************************************
	//** 
	//** JAVASCRIPT FUNCTIONS
	//** 
	//******************************************************************************
	//******************************************************************************

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

	function DoEscape($strText)
	{
		$strText = str_replace("'", "''", $strText);
		$strText = str_replace("\r\n", "\\n", $strText);
		$strText = str_replace("\r", "\\n", $strText);
		$strText = str_replace("\n", "\\n", $strText);
		return $strText;
	}
	
	function AppendSQLInsertValues(...$param) 
	{
		$strQuery = "";

		foreach ($param as $strDataItem)
		{
			$strQuery = $strQuery . "'" . DoEscape($strDataItem) . "', ";
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
				$strQuery = $strQuery . DoEscape($strItem) . "', ";
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
			PrintJavascriptLine("AlertError(\"'" . DoEscape($e->getMessage()) . "'\");", 2, true);
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
			PrintJavascriptLine("AlertError(\"'" . DoEscape($e->getMessage()) . "' with query '" . $strQuery . "'\");", 2, true);
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
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName . "='" . DoEscape($strColumnValue) . "'";

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
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "' AND " . $strColumnName2 . "='" . DoEscape($strColumnValue2) . "'";
	
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
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "' AND " . $strColumnName2 . "='" . DoEscape($strColumnValue2) . "' AND " . $strColumnName3 . "='" . DoEscape($strColumnValue3) . "'";		
	
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
	
	function DoFindQuery4($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{	
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "' AND " . $strColumnName2 . "='" . DoEscape($strColumnValue2) . "' AND " . $strColumnName3 . "='" . DoEscape($strColumnValue3) . "' AND " . $strColumnName4 . "='" . DoEscape($strColumnValue4) . "'";		
	
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
	




	function DoFindQuery5($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{	
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "' AND " . $strColumnName2 . "='" . DoEscape($strColumnValue2) . "' AND " . $strColumnName3 . "='" . DoEscape($strColumnValue3) . "' AND " . $strColumnName4 . "='" . DoEscape($strColumnValue4) . "' AND " . $strColumnName5 . "='" . DoEscape($strColumnValue5) . "'";		
	
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
	
	function DoFindQuery6($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strColumnName6, $strColumnValue6, $strCondition = "", $strOrderBy = "", $bAscending = true)
	{	
		global $g_strQuery;
		$g_strQuery = "SELECT * FROM " . $strTableName . " WHERE " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "' AND " . $strColumnName2 . "='" . DoEscape($strColumnValue2) . "' AND " . $strColumnName3 . "='" . DoEscape($strColumnValue3) . "' AND " . $strColumnName4 . "='" . DoEscape($strColumnValue4) . "' AND " . $strColumnName5 . "='" . DoEscape($strColumnValue5) . "' AND " . $strColumnName6 . "='" . DoEscape($strColumnValue6) . "'";		
	
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
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName . "='" . DoEscape($strColumnValue) . "' WHERE " . 
			$strFindColumnName . "='" . $strFindColumnValue . "'";
	
		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoUpdateQuery2($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "'," . 
			$strColumnName2 . "='" .  $strColumnValue2 . "' WHERE " . 
			$strFindColumnName . "='" . DoEscape($strFindColumnValue) . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoUpdateQuery4($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "'," . 
			$strColumnName2 . "='" .  DoEscape($strColumnValue2) . "'," . $strColumnName3 . "='" .  DoEscape($strColumnValue3) . 
			$strColumnName4 . "='" .  $strColumnValue4 . 
			"' WHERE " . $strFindColumnName . "='" . $strFindColumnValue . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoUpdateQuery5($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "', " . 
			$strColumnName2 . "='" .  DoEscape($strColumnValue2) . "', " . $strColumnName3 . "='" .  DoEscape($strColumnValue3) . "', " .
			$strColumnName4 . "='" .  DoEscape($strColumnValue4) . "', " . $strColumnName5 . "='" .  DoEscape($strColumnValue5) . 
			"' WHERE " . $strFindColumnName . "='" . $strFindColumnValue . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoUpdateQuery6($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strColumnName6, $strColumnValue6, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "', " . 
			$strColumnName2 . "='" .  DoEscape($strColumnValue2) . "', " . $strColumnName3 . "='" .  DoEscape($strColumnValue3) . "', " .
			$strColumnName4 . "='" .  DoEscape($strColumnValue4) . "', " . $strColumnName5 . "='" .  DoEscape($strColumnValue5) . "', " .
			$strColumnName6 . "='" .  DoEscape($strColumnValue6) . 
			"' WHERE " . $strFindColumnName . "='" . $strFindColumnValue . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoUpdateQuery7($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strColumnName6, $strColumnValue6, $strColumnName7, $strColumnValue7, $strFindColumnName, $strFindColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "UPDATE " . $strTableName . " SET " . $strColumnName1 . "='" . DoEscape($strColumnValue1) . "', " . 
			$strColumnName2 . "='" .  DoEscape($strColumnValue2) . "', " . $strColumnName3 . "='" .  DoEscape($strColumnValue3) . "', " .
			$strColumnName4 . "='" .  DoEscape($strColumnValue4) . "', " . $strColumnName5 . "='" .  DoEscape($strColumnValue5) . "', " .
			$strColumnName6 . "='" .  DoEscape($strColumnValue6) . "', " . $strColumnName7 . "='" .  DoEscape($strColumnValue7) .
			"' WHERE " . $strFindColumnName . "='" . $strFindColumnValue . "'";

		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoDeleteQuery($dbConnection, $strTableName, $strColumnName, $strColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "DELETE FROM " . $strTableName . " WHERE " . $strColumnName . "='" . DoEscape($strColumnValue) . "'";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName . ") VALUES('" . DoEscape($strColumnValue) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoInsertQuery2($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . ") VALUES('" . DoEscape($strColumnValue1) . "','" . DoEscape($strColumnValue2) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}

	function DoInsertQuery3($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . ") VALUES('" . DoEscape($strColumnValue1) . "','" . DoEscape($strColumnValue2) . "','" . DoEscape($strColumnValue3) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery4($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . ") VALUES('" . DoEscape($strColumnValue1) . "','" . DoEscape($strColumnValue2) . "','" . DoEscape($strColumnValue3) . "','" . DoEscape($strColumnValue4) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery5($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . "," . $strColumnName5 . ") VALUES('" . DoEscape($strColumnValue1) . "','" . DoEscape($strColumnValue2) . "','" . DoEscape($strColumnValue3) . "','" . DoEscape($strColumnValue4) . "','" . DoEscape($strColumnValue5) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery6($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strColumnName6, $strColumnValue6)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . "," . $strColumnName5 . "," . $strColumnName6 . ") VALUES('" . DoEscape($strColumnValue1) . "','" . DoEscape($strColumnValue2) . "','" . DoEscape($strColumnValue3) . "','" . DoEscape($strColumnValue4) . "','" . DoEscape($strColumnValue5) . "','" . DoEscape($strColumnValue6) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoInsertQuery7($dbConnection, $strTableName, $strColumnName1, $strColumnValue1, $strColumnName2, $strColumnValue2, $strColumnName3, $strColumnValue3, $strColumnName4, $strColumnValue4, $strColumnName5, $strColumnValue5, $strColumnName6, $strColumnValue6, $strColumnName7, $strColumnValue7)
	{
		global $g_strQuery;
		$g_strQuery = "INSERT INTO " . $strTableName . "(" . $strColumnName1 . "," . $strColumnName2 . "," . $strColumnName3 . "," . $strColumnName4 . "," . $strColumnName5 . "," . $strColumnName6 . ", " . $strColumnName7 . ") VALUES('" . DoEscape($strColumnValue1) . "','" . DoEscape($strColumnValue2) . "','" . DoEscape($strColumnValue3) . "','" . DoEscape($strColumnValue4) . "','" . DoEscape($strColumnValue5) . "','" . DoEscape($strColumnValue6) . "', '" . DoEscape($strColumnValue7) . "')";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function DoDeleteQuery1($dbConnection, $strTableName, $strColumnName, $strColumnValue)
	{
		global $g_strQuery;
		$g_strQuery = "DELETE FROM " . $strTableName . " WHERE " . $strColumnName . "='" . DoEscape($strColumnValue) . "'";
		
		return DoQuery($dbConnection, $g_strQuery);
	}
	
	function CheckExists($strTable, $strColumn, $strValue)
	{
		global $g_dbKatesCastle;
	
		$results = DoFindQuery1($g_dbKatesCastle, $strTable, $strColumn, $strValue);
		
		return $results && ($results->num_rows > 0);
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
	
	function DoEscapeDoubleQuotes($strText)
	{
		$strNewText = "";
		for ($nI = 0; $nI < strlen($strText); $nI++)
		{
			if ($strText[$nI] == "\"")
				$strNewText .= "\\\"";
			else
				$strNewText .= $strText[$nI];
		}
		return $strNewText;
	}
	
	function DoGetPaypalButton($nPrice, $bLive)
	{
		global $g_dbKatesCastle;
		global $g_strQuery;
		$strLive = "0";
		$strPaypalButton = "";
		
		if ($bLive)
			$strLive = "1";
			
		$result = DoFindQuery2($g_dbKatesCastle, "paypal_buttons", "name", $nPrice, "live", $strLive);
		if ($result && ($result->num_rows > 0))
		{
			if ($row = $result->fetch_assoc())
			{
				$strPaypalButton = $row["code"];
				$strPaypalButton = DoEscapeDoubleQuotes($strPaypalButton);
			}
		}
		return $strPaypalButton;
	}
	
	function DoGetBookTypeDesc($strID)
	{
		global $g_dbKatesCastle;
		$strTypeDesc = "";
		$result = DoFindQuery1($g_dbKatesCastle, "book_type", "id", $strID);
		if ($result && ($result->num_rows > 0))
		{
			if ($row = $result->fetch_assoc())
			{
				$strTypeDesc = $row["name"];
			}
		}		
		return $strTypeDesc;
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
		global $g_strQuery;
		
		$resultsTopics = DoFindQuery2($g_dbKatesCastle, "topics", "category_id" , $strCategoryID, "subcategory_id", $strSubcategoryID, "", "name");
		if ($resultsTopics && ($resultsTopics->num_rows > 0))
		{
			echo "\n";
			$nCountTopic = 0;
			while ($rowTopic = $resultsTopics->fetch_assoc())
			{
				$nCountTopic++;
				$resultsBooks = DoFindQuery3($g_dbKatesCastle, "books", "category_id" , $strCategoryID, "subcategory_id", $strSubcategoryID, "topic_id", $rowTopic["id"], "", "title");

				if ($resultsBooks && ($resultsBooks->num_rows > 0))
				{
					echo "     [";
					$nCountBooks = 0;
					while ($rowBooks = $resultsBooks->fetch_assoc())
					{
						if (intval($rowBooks["quantity"]) > 0)
						{
							echo "\n          {id:\"" . $rowBooks["id"] . "\",title:\"" . $rowBooks["title"] . 
									"\",author:\"" . $rowBooks["author"] . "\",price:\"" . sprintf("%.02f", $rowBooks["price"]) . 
									"\",summary:\"" . $rowBooks["summary"] . "\",image_filename:\"" . $rowBooks["image_filename"] . 
									"\",weight:\"" . $rowBooks["weight"] . "\",index:\"" . $nCountBooks . "\",quantity:\"" . $rowBooks["quantity"] .
									"\",type:\"" .  DoGetBookTypeDesc($rowBooks["type_id"]) . "\"}";
							$nCountBooks++;
							if ($nCountBooks< $resultsBooks->num_rows)
								echo ",";
							echo "\n";
						}
					}
					echo "     ]";
					if ($nCountTopic < $resultsTopics->num_rows)
						echo ",";
					echo "\n";
				}
				else
				{
					echo "[],\n";
				}
			}
		}
	}
	
	function DoGetSubcategories()
	{
		global $g_dbKatesCastle;
		$mapSubcategories = [];
		
		$results = DoFindAllQuery($g_dbKatesCastle, "subcategories");
		if ($results && ($results->num_rows > 0))
		{
			while ($row = $results->fetch_assoc())
			{
				$mapSubcategories[$row["name"]] = $row["id"];
			}
		}
		return $mapSubcategories;
	}
	
	function DoGetCategories()
	{
		global $g_dbKatesCastle;
		$mapCategories = [];
		
		$results = DoFindAllQuery($g_dbKatesCastle, "categories");
		if ($results && ($results->num_rows > 0))
		{
			while ($row = $results->fetch_assoc())
			{
				$mapCategories[$row["name"]] = $row["id"];
			}
		}
		return $mapCategories;
	}
	
	function HasSubCategories($strCategoryID)
	{
		global $g_dbKatesCastle;
		
		$results = DoFindQuery1($g_dbKatesCastle, "subcategories", "id", $strCategoryID);
		
		return ($results && ($results->num_rows > 0));
	}
	
	function DoGenerateMenu()
	{
		global $g_dbKatesCastle;
		/*
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
		*/
		
		$resultsCategories = DoFindAllQuery($g_dbKatesCastle, "categories", "", "name");
		if ($resultsCategories && ($resultsCategories->num_rows > 0))
		{
			while ($rowCategories = $resultsCategories->fetch_assoc())
			{
				$resultsSubcategories = DoFindQuery1($g_dbKatesCastle, "subcategories", "category_id", $rowCategories["id"], "", "name");
				if ($resultsSubcategories && ($resultsSubcategories->num_rows > 0))
				{
					echo "<li class=\"menu_item\" onclick=\"DoTogglePopupMenu('" . $rowCategories["name"] . "_popup_menu')\"><a href=\"#Top\">" . $rowCategories["description"] . "</a></li>\n";
					echo "<div class=\"MenuPopup\" id=\"" . $rowCategories["name"] . "_popup_menu\">\n";
					echo "<ul>\n";
					
					while ($rowSubcategories = $resultsSubcategories->fetch_assoc())
					{
						// <li class="MenuPopupItem"><a href="specialist/series/series.php">Series</a></li>
						echo "<li class=\"MenuPopupItem\"><a href=\"" . $rowCategories["name"] . "/" . $rowSubcategories["name"] . "/" . $rowSubcategories["name"] . ".php\">" . $rowSubcategories["description"] . "</a></li>\n";
					}
					echo "</ul>\n";
					echo "</div>\n";
				}
				else
					echo "<li class=\"menu_item\" ><a href=\"" . $rowCategories["name"] . "/" . $rowCategories["name"] . ".php\">" . $rowCategories["description"] . "</a></li>\n";
			}
		}
	}
	
	$g_mapCategory = DoGetCategories();
	//print_r($g_mapCategory);
	$g_mapSubcategory = DoGetSubcategories();
	//print_r($g_mapSubcategory);

?>
