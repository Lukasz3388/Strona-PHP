$(document).ready(function(){
        ajaxInit();
        getData('reload_page','glowna.php');

    });
    
    
    function ajaxInit(){
        
        var XHR = null;
        
        XHR = new XMLHttpRequest();
       // alert("ready");
 
        return XHR;
        
    }
    function getData(id,URL){
        XHR = ajaxInit();
        if(XHR!=null)
        {
            XHR.open("GET",URL,true);
           
            XHR.onreadystatechange = function()
            { 
                 if(XHR.readyState === 4)
                 {
                    id = document.getElementById(id); 
                   id.innerHTML=XHR.responseText;
                 }
            };
            
            XHR.send(null);  
        }
  
    }

    