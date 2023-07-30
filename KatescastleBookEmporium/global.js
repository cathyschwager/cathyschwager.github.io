﻿//********************************************************************************************************************************
//********************************************************************************************************************************
// GLOBAL VARIBALES
//********************************************************************************************************************************
//********************************************************************************************************************************
var g_arrayCategoryBookmarks = [];
var g_arrayCategoryBookLists = [];
var g_bFictionPopupMenu = false, g_bNonFictionPopupMenu = false, g_bSpecialistPopupMenu = false;
var g_strURL = "https://cathyschwager.github.io/KatescastleBookEmporium";
var g_strEmail = "katescastle" + "@" + "ozemail" + "." + "com" + "." + "au";
var g_strItemsShoppingCartItems4Email = "";
var g_fShoppingCartTotal4Email = 0;

function GenerateGregsEmailAddress()
{
	var strEmailAddress = "gregplants" + "@" + "bigpond" + "." + "com";
	document.write("<a class=\"Email\" href=\"mailto: " + strEmailAddress + "\">" + strEmailAddress + "</a>");
}

function GenerateCathysEmailAddress()
{
	document.write("<a class=\"Email\" href=\"mailto: " + g_strEmail + "\">" + strEmailAddress + "</a>");
}

function GenerateMenu(arrayCategoryBookmarks)
{
	let nNumLinks = 0;
	let nMaxLinks = 6;

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
	let divItems = document.getElementById("items");

	if (divItems)
	{
		divItems.innerHTML = "";
		
		for (let nI = 0; nI < arrayCategoryBookmarks.length; nI++)
		{
			divItems.innerHTML += "<h3 id=\"" + arrayCategoryBookmarks[nI] + "\">" + arrayCategoryBookmarks[nI] + "</h3>";
			
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
					divItems.innerHTML += "<h4 id=\"" + arrayBookList[nJ][0] + "\">" + arrayBookList[nJ][0] + "</h4>";
					divItems.innerHTML += "<p><b>Author(s):</b> " + arrayBookList[nJ][1] + "<br/><br/>";
					divItems.innerHTML += "<p><b>Price:</b> $" + arrayBookList[nJ][2] + "<br/><br/>";
					divItems.innerHTML += "<b><u>Description</u></b><br>";
					divItems.innerHTML += arrayBookList[nJ][3] + "</p>";
					
					divItems.innerHTML += "<p><a href=\"" + g_strURL + arrayBookList[nJ][4] + "\"><img width=\"200\" src=\"" + g_strURL + 
											arrayBookList[nJ][4] + "\" alt=\"" + g_strURL + arrayBookList[nJ][4] + "\" /></a></p>";

					if (FindBookItem_(arrayBookList[nJ][0], arrayBookList[nJ][1], arrayShoppingCart))
					{
						divItems.innerHTML += "<button type=\"button\" style=\"display: none;\" id=\"AddCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1] + 
										"\" class=\"cart_button\" onclick=\"OnClickAddCartButton('" + arrayBookList[nJ][0] + 
										"', '" + arrayBookList[nJ][1] + "', '" + arrayBookList[nJ][2] + "', '" + arrayBookList[nJ][3] + 
										"', '" + arrayBookList[nJ][4] + 
										"')\"><img src=\"../images/add_shopping_cart.jpg\" alt=\"Add to cart\" /></button>&nbsp;";
						divItems.innerHTML += "<button type=\"button\" id=\"RemoveCart" + arrayBookList[nJ][0] + 
										arrayBookList[nJ][1] + "\" class=\"cart_button\" onclick=\"OnRemoveCartButton('" + 
										arrayBookList[nJ][0] + "', '" + arrayBookList[nJ][1] + 
										"')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remobe from cart\" /></button>&nbsp;";
					}
					else
					{
						divItems.innerHTML += "<button type=\"button\" id=\"AddCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1] + 
										"\" class=\"cart_button\" onclick=\"OnClickAddCartButton('" + arrayBookList[nJ][0] + 
										"', '" + arrayBookList[nJ][1] + "', '" + arrayBookList[nJ][2] + "', '" + arrayBookList[nJ][3] + 
										"', '" + arrayBookList[nJ][4] + 
										"')\"><img src=\"../images/add_shopping_cart.jpg\" alt=\"Add to cart\" /></button>&nbsp;";
						divItems.innerHTML += "<button type=\"button\" style=\"display: none;\" id=\"RemoveCart" + arrayBookList[nJ][0] + 
										arrayBookList[nJ][1] + "\" class=\"cart_button\" onclick=\"OnRemoveCartButton('" + 
										arrayBookList[nJ][0] + "', '" + arrayBookList[nJ][1] + 
										"')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remobe from cart\" /></button>&nbsp;";
					}
					divItems.innerHTML += "<br/><br/><hr>";
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

function OnClickAddCartButton(strTitle, strAuthor, strPrice, strDesc, strImage)
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
		arrayShoppingCart.push([strTitle, strAuthor, strPrice, strDesc, strImage]);
	}
	else
	{
		arrayShoppingCart[nI] = [strTitle, strAuthor, strPrice, strDesc, strImage];
	}
	sessionStorage["ShoppingCart"] = JSON.stringify(arrayShoppingCart);
	ShowEmptyShoppingCartLink(true);
}

function GenerateShoppingContents(divShoppingCart)
{
	var arrayShoppingCart = [], strSubmitOrder = "";

	divShoppingCart.innerHTML = "<br/><h2 class=\"PageHeading\">&nbsp;<u>Shopping Cart</u></h2><br/>";
	
	if (sessionStorage["ShoppingCart"] !== "")
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);
				
	if (arrayShoppingCart.length == 0)
	{
		//divShoppingCart.innerHTML += "<p><button type=\"button\" class=\"cart_button\" onclick=\"OnClickContinueShoppingButton()\"><img src=\"../images/continue_shopping.jpg\" alt=\"Continue shopping\" /></button></p>"
		for (let nI = 0; nI < 1; nI++)
			divShoppingCart.innerHTML += "<p >&nbsp;</p>";
	}
	else
	{	
		for (let nI = 0; nI < arrayShoppingCart.length; nI++)
		{
			divShoppingCart.innerHTML += "<p class=\"Paragraph\"><b>Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>" + arrayShoppingCart[nI][0] + "<br/>" +
										"<b>Author: </b>" + arrayShoppingCart[nI][1] + "<br/>" +
										"<b>Price: &nbsp;&nbsp;&nbsp;</b>$" + arrayShoppingCart[nI][2] + "<br/>" + 
										"<b><u>Description</u></b><br/>" + arrayShoppingCart[nI][3] + "<br/>" +
										"<img width=\"100\" alt=\"images/" + arrayShoppingCart[nI][4] + "\"" + 
										"src=\"" + g_strURL + arrayShoppingCart[nI][4] + "\" /><br/>" +
										
										"<button type=\"button\" class=\"cart_button\" onclick=\"OnRemoveCartButton('" + 
										arrayShoppingCart[nI][0] + "', '" + arrayShoppingCart[nI][1] + 
										"')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remove from cart\" /></button>&nbsp;" +
										/*					
										"<button type=\"button\" class=\"cart_button\" onclick=\"OnClickEmptyShoppingButton()\">" + 
										"<img src=\"../images/empty_shopping_cart.jpg\" alt=\"Empty shopping cart\" /></button>&nbsp;" +
										*/
										/*
										"<button type=\"button\" class=\"cart_button\" onclick=\"OnClickContinueShoppingButton()\">" + 
										"<img src=\"../images/continue_shopping.jpg\" alt=\"Continue shopping\" /></button></p>" +
										*/
										"<br/><hr><br/><br/>";
										g_strItemsShoppingCartItems4Email+= arrayShoppingCart[nI][0] + ", " + 
												arrayShoppingCart[nI][1] + ", " + arrayShoppingCart[nI][2] + "\n";
										g_fShoppingCartTotal4Email += Number(arrayShoppingCart[nI][2]);
		}
	}
	divShoppingCart.innerHTML += document.getElementById("OrderForm").innerHTML;
	strSubmitOrder = "<a class=\"SubmitOrderButton\" id=\"SubmitOrderButton\" href=\"\">SUBMIT ORDER</a><br/><br/>";
	divShoppingCart.innerHTML += strSubmitOrder;
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
			nPosDot = strEmail.indexOf(".");
			
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

function DoValidateOrderDetails()
{
	var textGivenNames = document.getElementById("TextGivenNames"), textSurname = document.getElementById("TextSurname"),
		textEmail = document.getElementById("TextEmail"), textPhoneNumber = document.getElementById("TextPhoneNumber"),
		textAddress = document.getElementById("TextAddress"), selState = document.getElementById("SelState"),
		textSuburb = document.getElementById("TextSuburb"), selPostcode = document.getElementById("SelPostcode"),
		linkSubmitOrder = document.getElementById("SubmitOrderButton");

	if (linkSubmitOrder && textGivenNames && textSurname && textEmail && textPhoneNumber && selState && textSuburb && selPostcode && textAddress)
	{
		if (isValidGivenNames(textGivenNames.value) && isValidSurname(textSurname.value) && isValidEmail(textEmail.value) && isValidPhoneNumber(textPhoneNumber.value))
		{
			linkSubmitOrder.href = "mailto: " + g_strEmail + "?" +
							"subject=BOOK ORDER&body=Name: " + textGivenNames.value + " " + textSurname.value + "%0D%0A" +
							"Email: " + textEmail.value + "%0D%0A" +  "Mobile: " + textPhoneNumber.value + "%0D%0A%0D%0A" +
							
							"Unit / Street" + textAddress.value + "%0D%0A" +
							"Suburb/ Town: " + textSuburb.value + "%0D%0A" +
							"State: " + selState.options[selState.selectedIndex].value + "%0D%0A" +
							"Postcode: " + selPostcode.options[selPostcode.selectedIndex].value + "%0D%0A%0D%0A" +

							g_strItemsShoppingCartItems4Email + "%0D%0A%0D%0AORDER TOTAL: $" + g_fShoppingCartTotal4Email.toFixed(2) + 
							"%0D%0A";				
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
				
function OnClickShowCartButton(arrayCategoryBookmarks, arrayCategoryBookLists)
{
	let divShoppingCart = document.getElementById("shopping_cart");
	let divNotShoppingCart = document.getElementById("not_shopping_cart");
	let spanShowShoppingCart = document.getElementById("show_shopping_cart_link");
	let spanHideShoppingCart = document.getElementById("hide_shopping_cart_link");
		
	if (divShoppingCart && divNotShoppingCart && spanShowShoppingCart && spanHideShoppingCart)
	{
		GenerateShoppingContents(divShoppingCart);
		divShoppingCart.style.display = "block";
		divNotShoppingCart.style.display = "none";
		spanShowShoppingCart.style.display = "none";
		spanHideShoppingCart.style.display = "inline";
	}
}

function OnClickHideCartButton(arrayCategoryBookmarks, arrayCategoryBookLists)
{
	let divShoppingCart = document.getElementById("shopping_cart");
	let divNotShoppingCart = document.getElementById("not_shopping_cart");
	let spanShowShoppingCart = document.getElementById("show_shopping_cart_link");
	let spanHideShoppingCart = document.getElementById("hide_shopping_cart_link");
	
	if (divShoppingCart && divNotShoppingCart && spanShowShoppingCart && spanHideShoppingCart)
	{

		GeneratePageContents(arrayCategoryBookmarks, arrayCategoryBookLists);
		divShoppingCart.style.display = "none";
		divNotShoppingCart.style.display = "block";
		spanShowShoppingCart.style.display = "inline";
		spanHideShoppingCart.style.display = "none";
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
