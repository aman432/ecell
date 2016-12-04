<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<?xml-stylesheet type="text/xsl" href="myfile.xsl" ?>  
<xsl:template match="/">
<html>
<head>
<title>XML XSL Example</title>
<style type="text/css">
body
{
margin:10px;
background-color:#fff;
font-family:verdana,helvetica,sans-serif;
}

.tutorial-name
{
display:block;
font-weight:bold;
oveflow:auto;
}

.tutorial-title
{
display:block;
color:#000;
font-size:24px;
font-style:bold;
}
</style>
</head>
<body>

  <xsl:apply-templates/>
</body>
</html>
</xsl:template>

<xsl:template match="tutorial">
	
  <span class="tutorial-name"><xsl:value-of select="cd/name"/></span>
  
</xsl:template>

</xsl:stylesheet>