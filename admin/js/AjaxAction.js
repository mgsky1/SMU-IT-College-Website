function selprovince(sel)
{
	
    var selpro = sel.options[sel.selectedIndex].value;
    var url = "select.php?act=getcity&pro="+selpro;
    var city = document.getElementById("city");
	
    xmlhttp_request.onreadystatechange = function()
    {
        if(xmlhttp_request.readyState == 4 && xmlhttp_request.status == 200)
        {
            var json;
            json = eval(xmlhttp_request.responseText);
            if(json.length == 0)
            {
                alert('无该大类');
                return;
            }
            if(navigator.appName == "Microsoft Internet Explorer")
            {
                city.options.length = 0;
                for(var i = 0; i < json.length ; i++)
                {
                    var opt = document.createElement("option");
                    opt.value = json[i]['code'];
                    opt.text = json[i]['title'];
                    city.options.add(opt,i);
                }
            }
            else
            {
                st = "";
				var value = '';
				var begin = -1
				begin = document.cookie.indexOf("SmallClassName");
				if(begin != -1)
				{
						begin += "SmallClassName".length+1;
				       var end = document.cookie.indexOf(";","SmallClassName");
				      value = decodeURI(document.cookie.substring(begin,end));
					  if(value == '')
					  {
						   st = st + "<option value = '' selected selected>"+"不指定小类"+"</option>";
					  }
					  document.cookie = "SmallClassName="
				}
			
                for(var i = 0 ; i < json.length ; i++)
                {
					if( value == json[i]['title'])
					{
						st = st + "<option value = "+json[i]['title']+" selected>"+json[i]['title']+"</option>";
					}
					else
					{
						st = st + "<option value = "+json[i]['title']+">"+json[i]['title']+"</option>";
					}
                    
                }
                city.innerHTML = st;
            }
        }    
    }
    xmlhttp_request.open("POST",url,true);
    xmlhttp_request.send(null);
}