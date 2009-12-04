<!--
var tipTimer;

function locateObject(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=locateObject(n,d.layers[i].document); return x;
}

function hideTooltip(object) {
if (document.all)
{
	locateObject(object).style.visibility="hidden"
	locateObject(object).style.left = 1;
	locateObject(object).style.top = 1;
return false
}
else if (document.layers)
{
	locateObject(object).visibility="hide"
	locateObject(object).left = 1;
	locateObject(object).top = 1;
	return false
}
else
	return true
}
function showTooltip(object,e, tipContent, backcolor, bordercolor, textcolor, displaytime)
{
	window.clearTimeout(tipTimer)
	if (document.all)
		{
			locateObject(object).style.top=document.body.scrollTop+event.clientY+20

			

			locateObject(object).innerHTML='<table style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; border: '+bordercolor+'; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: '+backcolor+'" width="10" border="0" cellspacing="1" cellpadding="1"><tr><td nowrap><font style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; color: '+textcolor+'">'+unescape(tipContent)+'</font></td></tr></table> '



			if ((e.x + locateObject(object).clientWidth) > (document.body.clientWidth + document.body.scrollLeft))

				{	

					locateObject(object).style.left = (document.body.clientWidth + document.body.scrollLeft) - locateObject(object).clientWidth-10;

				}

			else

			{

			locateObject(object).style.left=document.body.scrollLeft+event.clientX

			}

		locateObject(object).style.visibility="visible"

		tipTimer=window.setTimeout("hideTooltip('"+object+"')", displaytime);

		return true;

		}

	else if (document.layers)

		{

		locateObject(object).document.write('<table width="10" border="0" cellspacing="1" cellpadding="1"><tr bgcolor="'+bordercolor+'"><td><table width="10" border="0" cellspacing="0" cellpadding="2"><tr bgcolor="'+backcolor+'"><td nowrap><font style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; color: '+textcolor+'">'+unescape(tipContent)+'</font></td></tr></table></td></tr></table>')

		locateObject(object).document.close()

		locateObject(object).top=e.y+20



		if ((e.x + locateObject(object).clip.width) > (window.pageXOffset + window.innerWidth))

			{

				locateObject(object).left = window.innerWidth - locateObject(object).clip.width-10;

			}

		else

			{

			locateObject(object).left=e.x;

			}

		locateObject(object).visibility="show"

		tipTimer=window.setTimeout("hideTooltip('"+object+"')", displaytime);

		return true;

	}

	else

	{

		return true;

	}

}

//-->