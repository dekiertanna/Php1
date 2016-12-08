<link rel="Stylesheet" href="styles\style.css" type="text/css">
<link rel="Stylesheet" 
<?php 
if (isset($_COOKIE['skin']))
{
echo "href=\"styles" . $_COOKIE['skin']. "\"";

}
else
{
echo "href=\"styles\defaultskin.css\""; 
}

?> 
type="text/css">





