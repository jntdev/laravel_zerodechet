(function (d) { 
    var 
    js, 
    id = "genially-embed-js", 
    ref = d.getElementsByTagName("script")[0]; 
        
          if (d.getElementById(id)) { 
        return; 
        } 
        js = d.createElement("script"); 
        js.id = id; 
        js.async = true; 
        js.src = "https://view.genial.ly/static/embed/embed.js"; 
        ref.parentNode.insertBefore(js, ref); }
        (document));