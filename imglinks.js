function processLinks()
{
   var linksList = document.images; // get the document's links
   var contents = "<ul>";

   // concatenate each link to contents
   for ( var i = 0; i < linksList.length; ++i )
   {
      var currentLink = document.images[i].src;
      contents += "<li><a href='" + currentLink + "'>" + 
         currentLink + "</li>";
   } // end for

   contents += "</ul>";
   document.getElementById( "imglinks" ).innerHTML = contents;
} // end function processLinks

window.addEventListener( "load", processLinks, false );