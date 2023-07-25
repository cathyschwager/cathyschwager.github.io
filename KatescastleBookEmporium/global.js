//********************************************************************************************************************************
//********************************************************************************************************************************
// GLOBAL VARIBALES
//********************************************************************************************************************************
//********************************************************************************************************************************
var g_arrayCategoryBookmarks = [];
var g_arrayCategoryBookLists = [];
var g_bFictionPopupMenu = false, g_bNonFictionPopupMenu = false, g_bSpecialistPopupMenu = false;
				


function GenerateGregsEmailAddress()
{
	var strEmailAddress = "gregplants" + "@" + "bigpond" + "." + "com";
	document.write("<a class=\"Email\" href=\"mailto: " + strEmailAddress + "\">" + strEmailAddress + "</a>");
}

function GenerateCathysEmailAddress()
{
	var strEmailAddress = "katescastle" + "@" + "ozemail" + "." + "com" + "." + "au";
	document.write("<a class=\"Email\" href=\"mailto: " + strEmailAddress + "\">" + strEmailAddress + "</a>");
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

function FindBookItem_(strTitle, strAuthor)
{
	let arrayShoppingCart = [];
	let nI = -1;
	
	if (sessionStorage["ShoppingCart"].length !== 0)
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);

	nI = FindBookItem(strTitle, strAuthor, arrayShoppingCart);
//alert("nI = " + nI.toString() + ", strTitle = " + strTitle + ", strAuthor = " + strAuthor);
	return nI > -1;
}

function GeneratePageContents(arrayCategoryBookmarks, arrayCategoryBookLists)
{
	for (let nI = 0; nI < arrayCategoryBookmarks.length; nI++)
	{
		document.write("<h3 id=\"" + arrayCategoryBookmarks[nI] + "\">" + arrayCategoryBookmarks[nI] + "</h3>");
		
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
				document.write("<p><b>Price:</b> $" + arrayBookList[nJ][1] + "<br/><br/>");
				document.write("<p><b>Author(s):</b> " + arrayBookList[nJ][2] + "<br/><br/>");
				document.write("<b><u>Description</u></b><br>");
				document.write(arrayBookList[nJ][3] + "</p>");
				
				if (FindBookItem_(arrayBookList[nJ][0], arrayBookList[nJ][1]))
				{
					document.write("<button type=\"button\" style=\"display: none;\" id=\"AddCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1] + 
									"\" class=\"cart_button\" onclick=\"OnClickAddCartButton('" + arrayBookList[nJ][0] + 
									"', '" + arrayBookList[nJ][1] + "', '" + arrayBookList[nJ][2] + "', '" + arrayBookList[nJ][3] + 
									"', '" + arrayBookList[nJ][4] + 
									"')\"><img src=\"../images/add_shopping_cart.jpg\" alt=\"Add to cart\" /></button>&nbsp;");
					document.write("<button type=\"button\" id=\"RemoveCart" + arrayBookList[nJ][0] + 
									arrayBookList[nJ][1] + "\" class=\"cart_button\" onclick=\"OnRemoveCartButton('" + 
									arrayBookList[nJ][0] + "', '" + arrayBookList[nJ][1] + 
									"')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remobe from cart\" /></button>&nbsp;");
				}
				else
				{
					document.write("<button type=\"button\" id=\"AddCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1] + 
									"\" class=\"cart_button\" onclick=\"OnClickAddCartButton('" + arrayBookList[nJ][0] + 
									"', '" + arrayBookList[nJ][1] + "', '" + arrayBookList[nJ][2] + "', '" + arrayBookList[nJ][3] + 
									"', '" + arrayBookList[nJ][4] + 
									"')\"><img src=\"../images/add_shopping_cart.jpg\" alt=\"Add to cart\" /></button>&nbsp;");
					document.write("<button type=\"button\" style=\"display: none;\" id=\"RemoveCart" + arrayBookList[nJ][0] + 
									arrayBookList[nJ][1] + "\" class=\"cart_button\" onclick=\"OnRemoveCartButton('" + 
									arrayBookList[nJ][0] + "', '" + arrayBookList[nJ][1] + 
									"')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remobe from cart\" /></button>&nbsp;");
				
				}
				document.write("<button type=\"button\" id=\"ShowCart" + arrayBookList[nJ][0] + arrayBookList[nJ][1] +
								"\" class=\"cart_button\" onclick=\"OnClickShowCartButton()\")><img src=\"../images/shopping_cart.jpg\" alt=\"Go to cart\" /></button><br/><br/>");
				document.write("<a href=\"images/" + arrayBookList[nJ][4] + "\" alt=\"\"><img width=\"200\" src=\"images/" + 
								arrayBookList[nJ][4] + "\" alt=\"images/" + arrayBookList[nJ][4] + "\" /></a>");
				document.write("<br/><br/><hr>");
			}
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
}

function GenerateShoppingContents(divShoppingCart)
{
	var arrayShoppingCart = [];

	divShoppingCart.innerHTML = "<br/><h2 class=\"PageHeading\">&nbsp;<u>Shopping Cart</u></h2><br/>";
	
	if (sessionStorage["ShoppingCart"] !== "")
		arrayShoppingCart = JSON.parse(sessionStorage["ShoppingCart"]);
				
	if (arrayShoppingCart.length == 0)
	{
		divShoppingCart.innerHTML += "<p><button type=\"button\" class=\"cart_button\" onclick=\"OnClickContinueShoppingButton()\"><img src=\"../images/continue_shopping.jpg\" alt=\"Continue shopping\" /></button></p>"
		for (let nI = 0; nI < 1; nI++)
			divShoppingCart.innerHTML += "<p >&nbsp;</p>";
	}
	else
	{	
		for (let nI = 0; nI < arrayShoppingCart.length; nI++)
		{
			divShoppingCart.innerHTML += "<p class=\"Paragraph\">" + arrayShoppingCart[nI][0] + 
										", " + arrayShoppingCart[nI][1] + 
										", $" + arrayShoppingCart[nI][2] + "<br/>" + 
										"<img width=\"200\" alt=\"images/" + arrayShoppingCart[nI][3] + "\"" + 
										"src=\"images/" + arrayShoppingCart[nI][3] + "\" /></p>" +
										
										"<p><button type=\"button\" class=\"cart_button\" onclick=\"OnRemoveCartButton('" + 
										arrayShoppingCart[nI][0] + "', '" + arrayShoppingCart[nI][1] + 
										"')\"><img src=\"../images/remove_shopping_cart.jpg\" alt=\"Remove from cart\" /></button>&nbsp;" +
															
										"<button type=\"button\" class=\"cart_button\" onclick=\"OnClickEmptyShoppingButton()\">" + 
										"<img src=\"../images/empty_shopping_cart.jpg\" alt=\"Empty shopping cart\" /></button>&nbsp;" +
										
										"<button type=\"button\" class=\"cart_button\" onclick=\"OnClickContinueShoppingButton()\">" + 
										"<img src=\"../images/continue_shopping.jpg\" alt=\"Continue shopping\" /></button></p>" +
										
										"<br/><hr><br/>";
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
	/*
	alert(strTitle);
	alert(strAuthor);
	alert(nI);
	alert(sessionStorage["ShoppingCart"]);
	*/
	if (nI > -1)
	{
		let arrayLeft = arrayShoppingCart.slice(0, nI - 1);
		let arrayRight = arrayShoppingCart.slice(nI + 1, arrayShoppingCart.length - 1);	
		
		arrayShoppingCart = arrayLeft;
		arrayShoppingCart.concat(arrayRight);
		sessionStorage["ShoppingCart"] = JSON.stringify(arrayShoppingCart);
		GenerateShoppingContents(document.getElementById("shopping_cart"));
	}
	//alert(sessionStorage["ShoppingCart"]);
}
				
function OnClickShowCartButton()
{
	var divShoppingCart = document.getElementById("shopping_cart");
	var divNotShoppingCart = document.getElementById("not_shopping_cart");
		
	if (divShoppingCart && divNotShoppingCart)
	{
		GenerateShoppingContents(divShoppingCart);
		divShoppingCart.style.display = "block";
		divNotShoppingCart.style.display = "none";
	}
}

function OnClickContinueShoppingButton()
{
	let divShoppingCart = document.getElementById("shopping_cart");
	let divNotShoppingCart = document.getElementById("not_shopping_cart");
	
	if (divShoppingCart && divNotShoppingCart)
	{
		GenerateShoppingContents(divShoppingCart);
		divShoppingCart.style.display = "none";
		divNotShoppingCart.style.display = "block";
	}
}

function OnClickEmptyShoppingButton()
{
	sessionStorage["ShoppingCart"] = "";
	GenerateShoppingContents(document.getElementById("shopping_cart"));
}

if (typeof sessionStorage["ShoppingCart"] === "undefined")
	sessionStorage["ShoppingCart"] = "";

function ScrollTopContent()
{
	document.getElementById("content").scrollTop = -100;
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