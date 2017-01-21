
var frame=document.getElementById("shshnk");


var hidden = true;
var addon_button=document.getElementById("settings");
var addon_popup=document.getElementById("addon_popup");



addon_popup.style.visibility="hidden";



addon_button.onclick= function ()
{
	if(hidden)
	{
		addon_popup.style.visibility="visible";
				
	}	
	else
	{
		addon_popup.style.visibility="hidden";
	}
	hidden=!hidden;
}



function update()
{
	$("#btn").click();
}


//setInterval(update,5000);
