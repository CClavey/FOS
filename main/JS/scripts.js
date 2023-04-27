var totalPrice = 0;
var cartContents = "";
var delInstruct = "";
function signup()
{
	reset();
	document.getElementById("signupDIV").style.display = "block";
	document.getElementById("loginDIV").style.display = "none";
}

function login()
{
	reset();
	document.getElementById("loginDIV").style.display = "block";
	document.getElementById("signupDIV").style.display = "none";
}
function passwordCheck()
{
	if (document.getElementById("password").value == document.getElementById("confirm").value)
	{
		var firstName = document.getElementById("firstname").value
		var lastName = document.getElementById("lastname").value
		var genderVar = document.getElementById("gender").value
		var DOBVar = document.getElementById("dob").value
		var emailIDVar = document.getElementById("emailID").value
	}
	else
	{
		alert("Invalid. Passwords do not match!")
	}
}

function addToCart(x)
{
	//DISABLE AND ENABLE THE CHECKOUT BUTTON IF EMPTY
    var name = document.getElementById("dishName" + x).value;
    var price = document.getElementById("sizePrice" + x).value;
    var toppings = document.getElementById("top2" + x).value;
    var toAdd = name + ": " + price + " (" + toppings + ")";
    var priceString = price
    var priceMatch = priceString.match(/\d+(\.\d+)?/);
    var addPrice = parseFloat(priceMatch[0]);
    var totalPrice = parseFloat(sessionStorage.getItem("totalPrice")) || 0;
    var cartContents = sessionStorage.getItem("cartContents") || "";
    totalPrice += addPrice;
	//tempContents = name + ": " + price + " (" + toppings + ")";
    cartContents += toAdd + "\n";
    sessionStorage.setItem("totalPrice", totalPrice);
    sessionStorage.setItem("cartContents", cartContents);
	alert("Item Successfully Added to Cart...");
	writeCart();
}

function writeCart()
{
	//If cartContents is "" then disable the cart button
	//Store cart contents in a temp, clear the contents, then add the temp back in.
	var totalPrice = sessionStorage.getItem("totalPrice");
    var cartContents = sessionStorage.getItem("cartContents");
	//var temp = cartContents;
	//cartContents = "";
	document.getElementById("mycart").innerHTML = "";
	var itemDiv = document.createElement("div");
	itemDiv.innerText = cartContents;
	//itemDiv.innerText = temp;
	document.getElementById("mycart").appendChild(itemDiv);
    document.getElementById("total").value = "Total Price: " + "$" + totalPrice;
}

function writeHidden()
{
	var totalPrice = sessionStorage.getItem("totalPrice");
    var cartContents = sessionStorage.getItem("cartContents");
	var delInstruct = sessionStorage.getItem("delInstruct");
    document.getElementById("totalHidden").value = totalPrice;
    document.getElementById("cartContents").value = cartContents;
	document.getElementById("instructsHidden").value = delInstruct;
}

function writeInstruct(x)
{
	sessionStorage.setItem("delInstruct", x);
}

function addToCartStatic(x)
{
	var name = x.split(':')[0].trim();
	var price = x.split(':')[1].trim();
    var priceMatch = price.match(/\d+(\.\d+)?/);
	var addPrice = parseFloat(priceMatch[0]);
    var totalPrice = parseFloat(sessionStorage.getItem("totalPrice")) || 0;
    var cartContents = sessionStorage.getItem("cartContents") || "";
    totalPrice += addPrice;
    cartContents += name + ": $" + price + "\n";
    sessionStorage.setItem("totalPrice", totalPrice);
    sessionStorage.setItem("cartContents", cartContents);
	alert("Item Successfully Added to Cart...");
	writeCart();
}

function clearCart()
{
	sessionStorage.setItem("totalPrice", 0);
    sessionStorage.setItem("cartContents", "");
	writeCart();
}

function reset()
{
	document.getElementById("firstname").value = "";
	document.getElementById("lastname").value = "";
	document.getElementById("gender").value = "";
	document.getElementById("dob").value = "";
	document.getElementById("emailID").value = "";
	document.getElementById("password").value = "";
	document.getElementById("confirm").value = "";
	document.getElementById("emailID2").value = "";
	document.getElementById("pwd").value = "";
}

function display()
	{
		var id = document.getElementById("userid").value
		var password = document.getElementById("pwd").value
		if (id == "ClaveyC")
		{
			if (password == "password123")
			{
				alert("Valid login credentials. Logging in.")
			}
			else
			{
				alert("Invalid login credentials")
			}
		}
		else
		{
			alert("Invalid login credentials")
		}
	}
function popupfunction(x)
{
	document.getElementById('popup'+x).style.display='block';
	document.getElementById('fade'+x).style.display='block';
}

function popupclose(x)
{
	document.getElementById('popup'+x).style.display='none';
	document.getElementById('fade'+x).style.display='none';
}

function disableSmall(x) 
{
	var smallImg = document.getElementById("small" + x);
	smallImg.classList.add("disabled");
	var mediumImg = document.getElementById("medium" + x);
	var largeImg = document.getElementById("large" + x);
	mediumImg.classList.remove("disabled");
	largeImg.classList.remove("disabled");
	document.getElementById("sizePrice" + x).value = "Small: $6";
}

function disableMedium(x) 
{
	var mediumImg = document.getElementById("medium" + x);
	mediumImg.classList.add("disabled");
	var smallImg = document.getElementById("small" + x);
	var largeImg = document.getElementById("large" + x);
	smallImg.classList.remove("disabled");
	largeImg.classList.remove("disabled");
	document.getElementById("sizePrice" + x).value = "Medium: $8";
}

function disableLarge(x) 
{
	var largeImg = document.getElementById("large" + x);
	largeImg.classList.add("disabled");
	var smallImg = document.getElementById("small" + x);
	var mediumImg = document.getElementById("medium" + x);
	smallImg.classList.remove("disabled");
	mediumImg.classList.remove("disabled");
	document.getElementById("sizePrice" + x).value = "Large: $10";
}

function disableShroom(x) 
{
	var shroomImg = document.getElementById("shroom" + x);
	shroomImg.classList.add("disabled");
	var cheeseImg = document.getElementById("cheese" + x);
	var xImg = document.getElementById("x" + x);
	cheeseImg.classList.remove("disabled");
	xImg.classList.remove("disabled");
	document.getElementById("top2" + x).value = "Mushrooms";
}

function disableCheese(x) 
{
	var cheeseImg = document.getElementById("cheese" + x);
	cheeseImg.classList.add("disabled");
	var shroomImg = document.getElementById("shroom" + x);
	var xImg = document.getElementById("x" + x);
	shroomImg.classList.remove("disabled");
	xImg.classList.remove("disabled");
	document.getElementById("top2" + x).value = "Extra Cheese";
}

function disableX(x) 
{
	var xImg = document.getElementById("x" + x);
	xImg.classList.add("disabled");
	var shroomImg = document.getElementById("shroom" + x);
	var cheeseImg = document.getElementById("cheese" + x);
	shroomImg.classList.remove("disabled");
	cheeseImg.classList.remove("disabled");
	document.getElementById("top2" + x).value = "No Topping";
}

function clearPopup(x)
{
	var mediumImg = document.getElementById("medium" + x);
	var smallImg = document.getElementById("small" + x);
	var largeImg = document.getElementById("large" + x);
	var xImg = document.getElementById("x" + x);
	var shroomImg = document.getElementById("shroom" + x);
	var cheeseImg = document.getElementById("cheese" + x);
	smallImg.classList.remove("disabled");
	mediumImg.classList.remove("disabled");
	largeImg.classList.remove("disabled");
	xImg.classList.remove("disabled");
	shroomImg.classList.remove("disabled");
	cheeseImg.classList.remove("disabled");
	document.getElementById("sizePrice" + x).value = "";
	document.getElementById("top2" + x).value = "";
}
