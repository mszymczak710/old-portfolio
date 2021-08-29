


$(document).ready(function(){
	$('.menu__btn').click(function() {
		$('.menu__list').toggleClass("menu__list--show");
	});
});

Date.prototype.date = function(format)
{
	for (var i = 0, c = '', date = '', formats = new Object(); i < format.length; i++)
	{
		c = format.charAt(i);
		if (c == '\\' && i + 1 < format.length) date += format.charAt(++i);
		else if (typeof formats[c] != 'undefined') date += formats[c];
		else
		{
			switch (c)
			{
				case 'D':
					var day = this.getDate();
					formats[c] = (day < 10 ? '0' : '') + day;
					break;
				case 'M':
					var month = this.getMonth() + 1;
					formats[c] = (month < 10 ? '0' : '') + month;
					break;
				case 'Y':
					formats[c] = this.getFullYear();
					break;
				default:
					formats[c] = c;
					break;
			}
			date += formats[c];
		}
	}

	return date;
}

onload = function(){
	var date = document.lastModified;
	document.getElementById("last_updated").textContent = new Date(document.lastModified).date('D.M.Y');
}