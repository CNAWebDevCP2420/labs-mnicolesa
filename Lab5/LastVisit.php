<!DOCTYPE html PUBLIC "-///DTD XHTML 1.0 Transitional//EN" "///TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="1999/xhtml">
<head runat="server">


    <title>Last Visit</title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
  
    if (isser($_COOKIE['lastVisit']))
        $LastVisit = "<p>Your last visit was on "
      
            . $_COOKIE['lastVisit'];
    else
        $LastVisit = "<p>This is your first visit!</p>\n";
    </div>
  
    setcookie("lastVisit", date("F j, Y, g:i a"),
        time()+60*60*24*365);
      
  
    <?php echo $LastVisit; ?>
  
  
    </form>
</body>
</html>


    <title>Untitled Page</title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
  
    </div>
    </form>
</body>
</html>