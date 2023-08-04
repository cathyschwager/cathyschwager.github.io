//********************************************************************************************************************************
//********************************************************************************************************************************
// GLOBAL VARIBALES
//********************************************************************************************************************************
//********************************************************************************************************************************
var g_arrayCategoryBookmarks = [];
var g_arrayCategoryBookLists = [];
var g_bFictionPopupMenu = false, g_bNonFictionPopupMenu = false, g_bSpecialistPopupMenu = false;
var g_strURL = "https://cathyschwager.github.io/KatescastleBookEmporium";
var g_strEmail = "katescastle" + "@" + "ozemail" + "." + "com" + "." + "au";
var g_strGregsEmail = "gregplants" + "@" + "bigpond" + "." + "com";
var g_structOrderDetails = {
								strShoppingCartItems: "",
								fShoppingCartTotal: 0,
								fShoppingCartTotalMass: 0
							};

function GenerateGregsEmailAddress()
{
	var strEmailAddress = "gregplants" + "@" + "bigpond" + "." + "com";
	document.write("<a class=\"Email\" href=\"mailto: " + g_strGregsEmail+ "\">" + g_strGregsEmail+ "</a>");
}

function GenerateCathysEmailAddress()
{
	document.write("<a class=\"Email\" href=\"mailto: " + g_strEmail + "\">" + g_strEmail + "</a>");
}

function GenerateMenu(arrayCategoryBookmarks)
{
	let nNumLinks = 0;
	let nMaxLinks = 6;

	if (arrayCategoryBookmarks.length > 0)
	{
		for (var nI = 0; nI < arrayCategoryBookmarks.length; nI++)
		{
			if (arrayCategoryBookmarks [nI].length > 0)
			{
				document.write("<a href=\"#" + arrayCategoryBookmarks[nI] + "\">" + arrayCategoryBookmarks[nI] + "</a>");
			}
			nNumLinks = nI + 1;
			if ((nNumLinks % nMaxLinks) == 0)
			{
				document.write("<br/>");
			}
		}
	}
}

function GeneratePageHeading()
{
	document.write("<br/><h2 class=\"PageHeading\">&nbsp;<u>" + document.title + "</u></h2><br/>");
}

function GetShoppingCartArray()
{
	let arrayShoppingCart = [];
	
	if (sessionStorage["ShoppingCart"].length !== 0)
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);
	else
		arrayShoppingCart = [];

	return arrayShoppingCart;
}

function FindBookItem(strTitle, strAuthor, arrayShoppingCart)
{
	let nResult = -1;
	
	for (let nI = 0; nI < arrayShoppingCart.length; nI++)
	{
		if ((strTitle == arrayShoppingCart[nI][0]) &&
			(strAuthor == arrayShoppingCart[nI][1]))
		{
			nResult = nI;
			break;
		}
	}
	return nResult;
}

function FindBookItem_(strTitle, strAuthor, arrayShoppingCart)
{
	let nI = -1;
	
	nI = FindBookItem(strTitle, strAuthor, arrayShoppingCart);
//alert("nI = " + nI.toString() + ", strTitle = " + strTitle + ", strAuthor = " + strAuthor);
	return nI > -1;
}

function GeneratePageContents(arrayCategoryBookmarks, arrayCategoryBookLists)
{
	let arrayShoppingCart = GetShoppingCartArray();

	if (arrayCategoryBookmarks.length > 0)
	{		
		for (let nI = 0; nI < arrayCategoryBookmarks.length; nI++)
		{
			let arrayBookList = arrayCategoryBookLists[nI];
			if (arrayBookList)
			{
				for (let nJ = 0; nJ < arrayBookList.length; nJ++)
				{
					/*
						// List of books for Bookmark1
						[
							["Title 1", "Author", 4.00, "Book description 1", "image.jpg"],
							["Title 2", "Author", 1.00, "Book description 2", "image.jpg"],
							["Title 3", "Author", 3.00, "Book description 3", "image.jpg"]
						],
					*/
					document.write("<h4 id=\"" + arrayBookList[nJ][0] + "\">" + arrayBookList[nJ][0] + "</h4>");
					document.write("<p><b>Author(s):</b> " + arrayBookList[nJ][1] + "<br/><br/>");
					document.write("<p><b>Price:</b> $" + arrayBookList[nJ][2] + "<br/><br/>");
					document.write("<b><u>Description</u></b><br>");
					document.write(arrayBookList[nJ][3] + "</p>");
					
					document.write("<p><a href=\"" + g_strURL + arrayBookList[nJ][4] + "\"><img width=\"200\" src=\"" + g_strURL + 
									arrayBookList[nJ][4] + "\" alt=\"" + g_strURL + arrayBookList[nJ][4] + "\" /></a></p>");

					if (FindBookItem_(arrayBookList[nJ][0], arrayBookList[nJ][1], arrayShoppingCart))
					{
						document.write("<button type=\"button\" style=\"display: none;\" id=\"AddCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1]); 
						document.write("\" class=\"cart_button\" onclick=\"OnClickAddCartButton('" + arrayBookList[nJ][0]);
						document.write("', '" + arrayBookList[nJ][1] + "', '" + arrayBookList[nJ][2] + "', '" + arrayBookList[nJ][3]);
						document.write("', '" + arrayBookList[nJ][4] + "', '" + arrayBookList[nJ][5]);
						document.write("')\"><img src=\"../images/add_shopping_cart.jpg\" alt=\"Add to cart\" /></button>&nbsp;");
						document.write("<button type=\"button\" id=\"RemoveCart" + arrayBookList[nJ][0]);
						document.write(arrayBookList[nJ][1] + "\" class=\"cart_button\" onclick=\"OnRemoveCartButton('");
						document.write(arrayBookList[nJ][0] + "', '" + arrayBookList[nJ][1]);
						document.write("')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remobe from cart\" /></button>&nbsp;");
					}
					else
					{
						document.write("<button type=\"button\" id=\"AddCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1]);
						document.write("\" class=\"cart_button\" onclick=\"OnClickAddCartButton('" + arrayBookList[nJ][0]); 
						document.write("', '" + arrayBookList[nJ][1] + "', '" + arrayBookList[nJ][2] + "', '" + arrayBookList[nJ][3]);
						document.write("', '" + arrayBookList[nJ][4] + "', '" + arrayBookList[nJ][5])
						document.write("')\"><img src=\"../images/add_shopping_cart.jpg\" alt=\"Add to cart\" /></button>&nbsp;");
						document.write("<button type=\"button\" style=\"display: none;\" id=\"RemoveCart" + arrayBookList[nJ][0]);
						document.write(arrayBookList[nJ][1] + "\" class=\"cart_button\" onclick=\"OnRemoveCartButton('");
						document.write(arrayBookList[nJ][0] + "', '" + arrayBookList[nJ][1]); 
						document.write("')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remobe from cart\" /></button>&nbsp;");
					}
					document.write("<br/><br/><hr>");
				}
			}
		}
	}
}

function ShowEmptyShoppingCartLink(bShow)
{
	let spanShoppingCart = document.getElementById("empty_shopping_cart_link");
	let divLinks = document.getElementById("Links");
	
	if (spanShoppingCart && divLinks)
	{
		if (bShow)
		{
			spanShoppingCart.style.display = "inline";
			divLinks.style.top = "-12px";
		}
		else
		{
			spanShoppingCart.style.display = "none";
			divLinks.style.top = "0px";
		}
	}
}

function OnClickAddCartButton(strTitle, strAuthor, strPrice, strDesc, strImage, strMass)
{
	document.getElementById("AddCart" + strTitle + strAuthor).style.display = "none";
	document.getElementById("RemoveCart" + strTitle + strAuthor).style.display = "inline-block";
	
	let arrayShoppingCart = [];
	let nI = 0;

	/*
	alert(strTitle);
	alert(strAuthor);
	alert(strPrice);
	alert(strDesc);
	alert(strImage);
	alert(sessionStorage["ShoppingCart"]);
	*/
	
	if (sessionStorage["ShoppingCart"].length !== 0)
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);

	nI = FindBookItem(strTitle, strAuthor, arrayShoppingCart);
	if (nI === -1)
	{
		// ["Title 1", 4.00, "Fred Smith", "Book description 1", "image.jpg"]
		arrayShoppingCart.push([strTitle, strAuthor, strPrice, strDesc, strImage, strMass]);
	}
	else
	{
		arrayShoppingCart[nI] = [strTitle, strAuthor, strPrice, strDesc, strImage, strMass];
	}
	sessionStorage["ShoppingCart"] = JSON.stringify(arrayShoppingCart);
	ShowEmptyShoppingCartLink(true);
}

function GetlSelectedIndex(Select, strTextToSelect)
{
	var nSelectionIndex = 0;
	
	if (Select)
	{
		for (let nI = 0; nI < Select.options.length; nI++)
		{
			if (Select.options[nI].value == strTextToSelect)
			{
				nSelectionIndex = nI;
				break;
			}
		}
	}
	return nSelectionIndex;
}

function GenerateShoppingCartContents()
{
	var arrayShoppingCart = [], strSubmitOrder = "";

	if (sessionStorage["ShoppingCart"] !== "")
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);
				
	if (arrayShoppingCart.length == 0)
	{
		for (let nI = 0; nI < 1; nI++)
			document.write("<p >&nbsp;</p>");
	}
	else
	{
		g_structOrderDetails.strShoppingCartItems = "";
		g_structOrderDetails.fShoppingCartTotal = g_structOrderDetails.fShoppingCartTotalMass = 0;
		
		for (let nI = 0; nI < arrayShoppingCart.length; nI++)
		{
			document.write("<p class=\"Paragraph\"><b>Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>" + arrayShoppingCart[nI][0] + "<br/>");
			document.write("<b>Author: </b>" + arrayShoppingCart[nI][1] + "<br/>");
			document.write("<b>Price: &nbsp;&nbsp;&nbsp;</b>$" + arrayShoppingCart[nI][2] + "<br/>"); 
			document.write("<b><u>Description</u></b><br/>" + arrayShoppingCart[nI][3] + "<br/>");
			document.write("<img width=\"100\" alt=\"images/" + arrayShoppingCart[nI][4] + "\""); 
			document.write("src=\"" + g_strURL + arrayShoppingCart[nI][4] + "\" /><br/><br/>");
										
			document.write("<button type=\"button\" class=\"cart_button\" onclick=\"OnRemoveCartButton('"); 
			document.write(arrayShoppingCart[nI][0] + "', '" + arrayShoppingCart[nI][1]); 
			document.write("')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remove from cart\" /></button>&nbsp;");
			document.write("<br/><hr><br/><br/>");
			
			g_structOrderDetails.strShoppingCartItems += arrayShoppingCart[nI][0] + ", " + arrayShoppingCart[nI][1] + ", " + arrayShoppingCart[nI][2] + "\n";
			g_structOrderDetails.fShoppingCartTotal += Number(arrayShoppingCart[nI][2]);
			g_structOrderDetails.fShoppingCartTotalMass += Number(arrayShoppingCart[nI][5]);
		}
		document.write(document.getElementById("OrderForm").innerHTML);
		document.write("<a class=\"SubmitOrderButton\" id=\"SubmitOrderButton\" href=\"\">SUBMIT ORDER</a><br/><br/>");
		OnStateChange();
	
		if (sessionStorage["TextGivenNames"])
			document.getElementById("TextGivenNames").value = sessionStorage["TextGivenNames"];
		if (sessionStorage["TextSurname"])
			document.getElementById("TextSurname").value = sessionStorage["TextSurname"];
		if (sessionStorage["TextEmail"])
			document.getElementById("TextEmail").value = sessionStorage["TextEmail"];
		if (sessionStorage["TextPhoneNumber"])
			document.getElementById("TextPhoneNumber").value = sessionStorage["TextPhoneNumber"];
		if (sessionStorage["TextAddress"])
			document.getElementById("TextAddress").value = sessionStorage["TextAddress"];
		if (sessionStorage["TextSuburb"])
			document.getElementById("TextSuburb").value = sessionStorage["TextSuburb"];
		if (sessionStorage["SelState"])
			document.getElementById("SelState").selectedIndex = GetlSelectedIndex(document.getElementById("SelState"), sessionStorage["SelState"]);
		if (sessionStorage["SelPostcode"])
			document.getElementById("SelPostcode").selectedIndex = GetlSelectedIndex(document.getElementById("SelPostcode"), sessionStorage["SelPostcode"]);	
	}
}

function DoOnChangeSuburb()
{
	var textSuburb = document.getElementById("TextSuburb");
	
	if (textSuburb)
	{
	}
}

function DoEraseDetails()
{
	document.getElementById("TextGivenNames").value = "";
	document.getElementById("TextSurname").value = "";
	document.getElementById("TextEmail").value = "";
	document.getElementById("TextPhoneNumber").value = "";
	document.getElementById("TextAddress").value = "";
	document.getElementById("TextSuburb").value = "";
	document.getElementById("SelState").selectedIndex = 0;
	document.getElementById("SelPostcode").selectedIndex = 0;
	OnStateChange();	
}

function isValidEmail(strEmail)
{
	var bIsValid = false;
	
	if (strEmail.length == 0)
		alert("Email address cannot be blank!");
	else
	{
		let nPosAt = strEmail.indexOf("@"),
			nPosDot = strEmail.indexOf(".", nPosAt + 1);
			
		if ((nPosAt > -1) && (nPosDot > -1) && (nPosDot > nPosAt))
			bIsValid = true;
		else
			alert("'" + strEmail + "' is not a valid email address!");
	}
	return bIsValid;
}

function isValidPhoneNumber(strPhoneNumber)
{
	var bIsValid = false;

	if (strPhoneNumber.length == 0)
		alert("Phone number cannot be blank!");
	else
	{
		bIsValid = true;
		for (let nI = 0; nI < strPhoneNumber.length; nI++)
		{
			bIsValid = (strPhoneNumber[nI] >= '0') && (strPhoneNumber[nI] <= '9');
			if (!bIsValid)
				break;
		}
		if (!bIsValid)
			alert("'" + strPhoneNumber + "' is not a valid phone number!");
	}
	return bIsValid;
}

function isValidGivenNames(strName)
{
	var bIsValid = false;

	if (strName.length == 0)
		alert("Given names cannot be blank!");
	else
		bIsValid = true;
		
	return bIsValid;
}

function isValidSurname(strName)
{
	var bIsValid = false;
	
	if (strName.length == 0)
		alert("Surname cannot be blank!");
	else
		bIsValid = true;
		
	return bIsValid;
}

function DoGetAustraliaPostZone(nPostcode)
{
	var strZone = "";
	
	if (((nPostcode >= 200) && (nPostcode <= 299)) ||
		((nPostcode >= 2487) && (nPostcode <= 2499)) ||
		((nPostcode >= 2531) && (nPostcode <= 2554)) ||
		((nPostcode >= 2787) && (nPostcode <= 2879)) ||
		((nPostcode >= 2881) && (nPostcode <= 2889)) ||
		((nPostcode >= 2891) && (nPostcode <= 2898)) ||
		((nPostcode >= 2900) && (nPostcode <= 2999)))
		strZone = "N2";
	else if (((nPostcode >= 1000) && (nPostcode <= 2263)) ||
			 ((nPostcode >= 2500) && (nPostcode <= 2530)) ||
			 ((nPostcode >= 2555) && (nPostcode <= 2574)) ||
			 (nPostcode == 2890))
		strZone = "N1";
	else if ((nPostcode == 2648) || (nPostcode == 2715) || 
			 ((nPostcode >= 2717) && (nPostcode <= 2719)) ||
			 ((nPostcode >= 2731) && (nPostcode <= 2739)) ||
			 ((nPostcode >= 3221) && (nPostcode <= 3334)) ||
			 ((nPostcode >= 3342) && (nPostcode <= 3424)) ||
			 ((nPostcode >= 3444) && (nPostcode <= 3688)) ||
			 ((nPostcode >= 3691) && (nPostcode <= 3749)) ||
			 ((nPostcode >= 3812) && (nPostcode <= 3909)) ||
			 ((nPostcode >= 3921) && (nPostcode <= 3925)) ||
			 ((nPostcode >= 3945) && (nPostcode <= 3971)) ||
			 (nPostcode == 3979) ||
			 ((nPostcode >= 3984) && (nPostcode <= 3999)))
		strZone = "V2";
	else if (((nPostcode >= 3000) && (nPostcode <= 3220)) ||
			 ((nPostcode >= 3926) && (nPostcode <= 3944)) ||
			 ((nPostcode >= 3972) && (nPostcode <= 3978)) ||
			 ((nPostcode >= 3980) && (nPostcode <= 3983)) ||
			 ((nPostcode >= 8000) && (nPostcode <= 8999)))
		strZone = "V1";
	else if (((nPostcode >= 4000) && (nPostcode <= 4224)) ||
			 ((nPostcode >= 4226) && (nPostcode <= 4299)) ||
			 ((nPostcode >= 4500) && (nPostcode <= 4549)) ||
			 ((nPostcode >= 9000) && (nPostcode <= 9299)) ||
			 ((nPostcode >= 9400) && (nPostcode <= 9596)) ||
			 ((nPostcode >= 9700) && (nPostcode <= 9799)))
		strZone = "Q1";
	else if (((nPostcode >= 4300) && (nPostcode <= 4449)) ||
			 ((nPostcode >= 4550) && (nPostcode <= 4699)) ||
			 ((nPostcode >= 9597) && (nPostcode <= 9599)) ||
			 ((nPostcode >= 9880) && (nPostcode <= 9919)))
		strZone = "Q2";
	else if (((nPostcode >= 4450) && (nPostcode <= 4499)) ||
			 ((nPostcode >= 4700) && (nPostcode <= 4805)) ||
			 ((nPostcode >= 9920) && (nPostcode <= 9959)))
		strZone = "Q3";
	else if ((nPostcode >= 4806) && (nPostcode <= 4899))
		strZone = "Q4";
	else if (((nPostcode >= 5000) && (nPostcode <= 5199)) ||
			 ((nPostcode >= 5800) && (nPostcode <= 5999)))
		strZone = "S1";
	else if ((nPostcode >= 5200) && (nPostcode <= 5749))
		strZone = "S2";
	else if (((nPostcode >= 800) && (nPostcode <= 999)))
		strZone = "NT1";
	else if (((nPostcode >= 6000) && (nPostcode <= 6214)) ||
			 ((nPostcode >= 6800) && (nPostcode <= 6999)))
		strZone = "W1";
	else if ((nPostcode >= 6215) && (nPostcode <= 6699))
		strZone = "W2";
	else if ((nPostcode >= 6700) && (nPostcode <= 6797))
		strZone = "W3";
	else if ((nPostcode >= 6798) && (nPostcode <= 6799))
		strZone = "W4";
	else if (((nPostcode >= 7000) && (nPostcode <= 7150)) ||
			 ((nPostcode >= 7155) && (nPostcode <= 7999)))
		strZone = "T1";
	else if ((nPostcode >= 7151) && (nPostcode <= 7154))
		strZone = "AAT";
	else if ((nPostcode >= 2485) && (nPostcode <= 2486))
		strZone = "Q1";
	else if (((nPostcode >= 2640) && (nPostcode <= 2641)) || 
			 ((nPostcode >= 3689) && (nPostcode <= 3690)))
		strZone = "V2";
	else if (nPostcode == 4225)
		strZone = "Q2";
		
	return strZone;
}

function DoGetDistanceCharge(strZone)
{
	var fUnitCostPerKg = 0;
	
	if (strZone == "N1")
		fUnitCostPerKg = 2.25;
	else if (strZone == "N2")
		fUnitCostPerKg = 2.45;
	else if (strZone == "V1")
		fUnitCostPerKg = 1.85;
	else if (strZone == "V2")
		fUnitCostPerKg = 1.85;
	else if (strZone == "Q1")
		fUnitCostPerKg = 4.10;
	else if (strZone == "Q2")
		fUnitCostPerKg = 5.10;
	else if (strZone == "Q3")
		fUnitCostPerKg = 5.25;
	else if (strZone == "Q4")
		fUnitCostPerKg = 6.85;
	else if (strZone == "S1")
		fUnitCostPerKg = 2.25;
	else if (strZone == "S2")
		fUnitCostPerKg = 3.40;
	else if (strZone == "NT1")
		fUnitCostPerKg = 8.15;
	else if (strZone == "W1")
		fUnitCostPerKg = 6.70;
	else if (strZone == "W2")
		fUnitCostPerKg = 8.00;
	else if (strZone == "W3")
		fUnitCostPerKg = 8.85;
	else if (strZone == "T1")
		fUnitCostPerKg = 3.10;
	else if (strZone == "NF")
		fUnitCostPerKg = 6.70;
	else if (strZone == "W4")
		fUnitCostPerKg = 8.00;
	else if (strZone == "AAT")
		fUnitCostPerKg = 2.95;	
	
	return fUnitCostPerKg;
}

function DoCalculatePostage(strPostcode, fTotalMass)
{
	var strZone = DoGetAustraliaPostZone(Number(strPostcode)),
		fUnitCostPerKg = DoGetDistanceCharge(strZone),
		fPostage = 21.95 + ((Number(fTotalMass) / 1000) * fUnitCostPerKg);
	
	return fPostage;
}

function DoValidateOrderDetails()
{
	var textGivenNames = document.getElementById("TextGivenNames"), textSurname = document.getElementById("TextSurname"),
		textEmail = document.getElementById("TextEmail"), textPhoneNumber = document.getElementById("TextPhoneNumber"),
		textAddress = document.getElementById("TextAddress"), selState = document.getElementById("SelState"),
		textSuburb = document.getElementById("TextSuburb"), selPostcode = document.getElementById("SelPostcode"),
		linkSubmitOrder = document.getElementById("SubmitOrderButton"), fPostage = 0;

	if (linkSubmitOrder && textGivenNames && textSurname && textEmail && textPhoneNumber && selState && textSuburb && selPostcode && textAddress)
	{
		if (isValidGivenNames(textGivenNames.value) && isValidSurname(textSurname.value) && isValidEmail(textEmail.value) && isValidPhoneNumber(textPhoneNumber.value))
		{
			fPostage = DoCalculatePostage(selPostcode.options[selPostcode.selectedIndex].value, g_structOrderDetails.fShoppingCartTotalMass) + 0;
			
			linkSubmitOrder.href = "mailto: " + g_strEmail + "?" +
							"subject=BOOK ORDER&body=Name: " + textGivenNames.value + " " + textSurname.value + "%0D%0A" +
							"Email: " + textEmail.value + "%0D%0A" +  "Mobile: " + textPhoneNumber.value + "%0D%0A%0D%0A" +
							
							"Unit/Street: " + textAddress.value + "%0D%0A" +
							"City/Suburb/Town: " + textSuburb.value + "%0D%0A" +
							"State: " + selState.options[selState.selectedIndex].value + "%0D%0A" +
							"Postcode: " + selPostcode.options[selPostcode.selectedIndex].value + "%0D%0A%0D%0A" +

							g_structOrderDetails.strShoppingCartItems + "%0D%0A%0D%0AORDER SUBTOTAL: $" + g_structOrderDetails.fShoppingCartTotal.toFixed(2) + 
							"%0D%0APOSTAGE & HANDLING: $" + fPostage.toFixed(2) + "%0D%0ATOTAL: $" + (fPostage + g_structOrderDetails.fShoppingCartTotal).toFixed(2);
			
			sessionStorage["TextGivenNames"] = document.getElementById("TextGivenNames").value;
			sessionStorage["TextSurname"] = document.getElementById("TextSurname").value;
			sessionStorage["TextEmail"] = document.getElementById("TextEmail").value;
			sessionStorage["TextPhoneNumber"] = document.getElementById("TextPhoneNumber").value;
			sessionStorage["TextAddress"] = document.getElementById("TextAddress").value;
			sessionStorage["TextSuburb"] = document.getElementById("TextSuburb").value;
			sessionStorage["SelState"] = document.getElementById("SelState").options[document.getElementById("SelState").selectedIndex].value;
			sessionStorage["SelPostcode"] = document.getElementById("SelPostcode").options[document.getElementById("SelPostcode").selectedIndex].value;
		
			document.getElementById("TextSubtotal").value = "$" + g_structOrderDetails.fShoppingCartTotal.toFixed(2);
			document.getElementById("TextPostage").value = "$" + fPostage.toFixed(2);
			document.getElementById("TextTotal").value = "$" + (g_structOrderDetails.fShoppingCartTotal + fPostage).toFixed(2);
			linkSubmitOrder.style.display="inline";
		}
	}
}

function DoAddPostCodes(SelPostcodes, nStart, nEnd)
{
	var option = null, strPostcode = "";
	
	for (let nPostcode = nStart; nPostcode <= nEnd; nPostcode ++)
	{
		if (nPostcode < 1000)
			strPostcode = "0" + nPostcode.toString();
		else
			strPostcode = nPostcode.toString();
		
		option = document.createElement("option");
		option.text = strPostcode;
		option.value = strPostcode;
		SelPostcodes.add(option); 
	}
}

function OnStateChange()
{
	var SelState = document.getElementById("SelState"),
		SelPostcode = document.getElementById("SelPostcode");
		
	if (SelState && SelPostcode)
	{
		let strState = SelState.options[SelState.selectedIndex].text;

		while (SelPostcode.length > 0)
		{
			SelPostcode.remove(0);
		}	
		if (strState == "ACT")
		{
			/*
				0200—0299 (LVRs and PO Boxes only)
				2600—2618
				2900—2920 
			*/
			DoAddPostCodes(SelPostcode, 200, 299);
			DoAddPostCodes(SelPostcode, 2600, 2618);
			DoAddPostCodes(SelPostcode, 2900, 2920);
		}
		else if (strState == "NSW")
		{
			/*
				1000—1999 (LVRs and PO Boxes only)
				2000—2599
				2619—2899
				2921—2999 			*/
			DoAddPostCodes(SelPostcode, 1000, 1999);
			DoAddPostCodes(SelPostcode, 2000, 2599);
			DoAddPostCodes(SelPostcode, 2619, 2899);
			DoAddPostCodes(SelPostcode, 2921, 299);
		}
		else if (strState == "NT")
		{
			/*
				0800—0899
				0900—0999 (LVRs and PO Boxes only)
			*/
			DoAddPostCodes(SelPostcode, 800, 899);
			DoAddPostCodes(SelPostcode, 900, 999);
		}
		else if (strState == "QLD")
		{
			/*
				4000—4999
				9000—9999 (LVRs and PO Boxes only)
			*/
			DoAddPostCodes(SelPostcode, 4000, 4999);
			DoAddPostCodes(SelPostcode, 9000, 9999);
		}
		else if (strState == "SA")
		{
			/*
				5000—5799
				5800—5999 (LVRs and PO Boxes only)
			*/
			DoAddPostCodes(SelPostcode, 5000, 5799);
			DoAddPostCodes(SelPostcode, 5800, 5999);
		}
		else if (strState == "TAS")
		{
			/*
				7000—7799
				7800—7999 (LVRs and PO Boxes only)
			*/
			DoAddPostCodes(SelPostcode, 7000, 7799);
			DoAddPostCodes(SelPostcode, 7800, 7999);
		}
		else if (strState == "VIC")
		{
			/*
				3000—3999
				8000—8999 (LVRs and PO Boxes only)
			*/
			DoAddPostCodes(SelPostcode, 3000, 3999);
			DoAddPostCodes(SelPostcode, 8000, 8999);
		}
		else if (strState == "WA")
		{
			/*
				6000—6797
				6800—6999 (LVRs and PO Boxes only)	
			*/
			DoAddPostCodes(SelPostcode, 6000, 6797);
			DoAddPostCodes(SelPostcode, 6800, 6999);
		}
	}
}

function OnRemoveCartButton(strTitle, strAuthor)
{
	document.getElementById("AddCart" + strTitle + strAuthor).style.display= "inline-block";
	document.getElementById("RemoveCart" + strTitle + strAuthor).style.display= "none";

	let arrayShoppingCart = [];
	let nI = 0;
	
	if (sessionStorage["ShoppingCart"].length !== 0)
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);
	
	nI = FindBookItem(strTitle, strAuthor, arrayShoppingCart);

	if (nI > -1)
	{
		let arrayLeft = arrayShoppingCart.slice(0, nI - 1);
		let arrayRight = arrayShoppingCart.slice(nI + 1, arrayShoppingCart.length - 1);	
		
		arrayShoppingCart = arrayLeft;
		arrayShoppingCart.concat(arrayRight);
		sessionStorage["ShoppingCart"] = JSON.stringify(arrayShoppingCart);
		GenerateShoppingContents(document.getElementById("shopping_cart"));
		ShowEmptyShoppingCartLink(arrayShoppingCart.length > 0);
	}
	//alert(sessionStorage["ShoppingCart"]);
}
				
function SetShowHideShoppingCartLink()
{
	var spanHideShoppingCart = document.getElementById("hide_shopping_cart_span"),
		spanShowShoppingCart = document.getElementById("show_shopping_cart_span");
		
	if (spanHideShoppingCart && spanShowShoppingCart)
	{
		if (document.title == "Shopping Cart")
		{
			spanHideShoppingCart.style.display = "inline";
			spanShowShoppingCart.style.display = "none";
		}
		else
		{
			spanHideShoppingCart.style.display = "none";
			spanShowShoppingCart.style.display = "inline";
		}
	}
	var linkHideShoppingCart = document.getElementById("hide_shopping_cart_link");
		
	if (linkHideShoppingCart && sessionStorage["href"])
		linkHideShoppingCart.href = sessionStorage["href"];
}

function OnClickShowCartButton()
{
	sessionStorage["href"] = document.location.href;
}

function OnClickHideCartButton()
{
	var spanHideShoppingCart = document.getElementById("hide_shopping_cart_span"),
		spanShowShoppingCart = document.getElementById("show_shopping_cart_span");
		
	if (spanHideShoppingCart && spanShowShoppingCart)
	{
		spanHideShoppingCart.style.display = "none";
		spanShowShoppingCart.style.display = "inline";
	}
}


function OnClickEmptyShoppingButton(arrayCategoryBookmarks, arrayCategoryBookLists)
{
	sessionStorage["ShoppingCart"] = "";
	GenerateShoppingContents(document.getElementById("shopping_cart"));
	GeneratePageContents(arrayCategoryBookmarks, arrayCategoryBookLists);
	
	let divShoppingCart = document.getElementById("shopping_cart");
	if (divShoppingCart)
	{
		//if (window.getComputedStyle(divShoppingCart).display === "none")
		ShowEmptyShoppingCartLink(false);
	}
}

if (typeof sessionStorage["ShoppingCart"] === "undefined")
	sessionStorage["ShoppingCart"] = "";

function ScrollTopContent()
{
	//document.getElementById("content").scrollTop = -100;
}

function GenerateTopButton()
{
	document.write("<div id=\"TOC\"><a href=\"#Top\">Go To Top</a></div>");
}

function ResizeSideBar()
{
	let divSideBar = document.getElementById("sidebar");
	let divContent = document.getElementById("content");
	
	if (divSideBar && divContent)
	{
		if (g_bFictionPopupMenu || g_bNonFictionPopupMenu || g_bSpecialistPopupMenu)
		{
			divSideBar.style.width = "21.2%";
			divContent.style.width = "77.3%";
		}
		else
		{
			divSideBar.style.width = "20%";
			divContent.style.width = "78.5%";

		}
	}
}

function DoToggleFictionPopupMenu()
{
	var strPopupName = "FictionPopupMenu";

	if (document.getElementsByName(strPopupName) !== null)
	{
		if (g_bFictionPopupMenu)
		{
			document.getElementsByName(strPopupName)[0].style.display = "none";
		}
		else
		{
			document.getElementsByName(strPopupName)[0].style.display = "block";
		}
		g_bFictionPopupMenu = !g_bFictionPopupMenu;
		ResizeSideBar();
	}
	else
	{
		alert("No such object with name '" + strPopupName + "'!");
	}
}
				
function DoToggleNonFictionPopupMenu()
{
	var strPopupName = "NonFictionPopupMenu";
	
	if (document.getElementsByName(strPopupName)!== null)
	{
		if (g_bNonFictionPopupMenu)
		{
			document.getElementsByName(strPopupName)[0].style.display = "none";
		}
		else
		{
			document.getElementsByName(strPopupName)[0].style.display = "block";
		}
		g_bNonFictionPopupMenu = !g_bNonFictionPopupMenu;
		ResizeSideBar();
	}
	else
	{
		alert("No such object with name '" + strPopupName + "'!");
	}
}

function DoToggleSpecialistPopupMenu()
{
	var strPopupName = "SpecialistPopupMenu";
	
	if (document.getElementsByName(strPopupName)!== null)
	{
		if (g_bSpecialistPopupMenu )
		{
			document.getElementsByName(strPopupName)[0].style.display = "none";
		}
		else
		{
			document.getElementsByName(strPopupName)[0].style.display = "block";
		}
		g_bSpecialistPopupMenu = !g_bSpecialistPopupMenu;
		ResizeSideBar();
	}
	else
	{
		alert("No such object with name '" + strPopupName + "'!");
	}
}
