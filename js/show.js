// JavaScript Document
function setTab03Syn ( i )
	{
       
		selectTab03Syn(i);
	}
	
	function selectTab03Syn ( i )
	{
		switch(i){

			case 1:
			document.getElementById("lanrenzhijia1").style.display="block";
			document.getElementById("lanrenzhijia2").style.display="none";
            document.getElementById("tab_a1").style.display="block";
            document.getElementById("tab_a2").style.display="none";
			document.getElementById("font1").style.color="#ffffff";
			document.getElementById("font1").style.background="#0488DA";

         
			document.getElementById("font2").style.background="#fff";
		    document.getElementById("font2").style.color="#0488DA";
	
			break;
			case 2:
			document.getElementById("lanrenzhijia1").style.display="none";
			document.getElementById("lanrenzhijia2").style.display="block";
			document.getElementById("tab_a1").style.display="none";
            document.getElementById("tab_a2").style.display="block";
	      
            document.getElementById("font1").style.background="#fff"; 
             document.getElementById("font1").style.color="#0488DA";
           
			document.getElementById("font2").style.color="#ffffff";
			document.getElementById("font2").style.background="#0488DA";
      
			break;

		}
    }
