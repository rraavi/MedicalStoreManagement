<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome</title>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	color: #666;
	font-style: italic;
	font-weight: bold;
}
body {
	background-color: #FFF;
}
</style>
</head>

<body>
<table width="100%" height="100%" border="0" align="center">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><div align="center">MEDICAL STORE MANAGEMENT</div></td>
        <td width="33%" align="right" valign="top"><table width="100%" border="0">
          <tr>
            <td><div align="right">WELCOME:</div></td>
          </tr>
          <tr>
            <td><div align="right">LOGOUT</div></td>
          </tr>
        </table>          </a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <br />
<?php include("top_navigation.php");?></td>
  </tr>
  <tr>
    <td height="100%"><table width="100%" border="0">
      <tr>
        <td height="100%"><div align="right">
          <form id="form1" name="form1" method="post" action="">
            <div align="center">
              <input type="text" name="search" id="search" placeholder="enter search term" />
          <input type="submit" name="SearchBtn" id="submit" value="Search" /><br/>
          <?php include("retrieve.php");?>
            </div>
          </form>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>