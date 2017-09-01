$(document).ready(function(){
   xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {

	      var obj= JSON.parse(this.responseText);
	       for(i=1;i<=24;i++)
		{
			
		  if(obj[i-1]==1)
		  { 
                    
			$("#"+i).css("background-color","red");
                       document.getElementById("#"+i).checked = true;
			 
		  }
             
         }
  }
  }
  xmlhttp.open("GET","check.php",true);
  xmlhttp.send();

});