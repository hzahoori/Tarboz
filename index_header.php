<html>
<head>
  <meta charset="UTF-8">
  <!-- for the virtual keyboard -->
  <script type="text/javascript" src="Scripts/keyboard.js" charset="UTF-8"></script>
  <link rel="stylesheet" type="text/css" href="Content/keyboard.css">

  <link rel="stylesheet" type="text/css" href="Content/style.css"  />
  <link rel="shortcut icon" href="Images/watermelon8.png"/>
  <title>WWG</title>
</title>
<body>
  <div id="maindiv">

    <div id="header">

      <div class="header_row">
        <div id="logo"><img src="Images/logo.png" height="50"></div>
        <nav id="navigation">
          <a href="/Tarboz/index.php">Home</a> |
            <a href="/Tarboz/Views/Entry/Index.php">Entry Index</a>  |  
            <a href="/Tarboz/Views/Entry/Create.php">Entry Create</a>  | 
            <a href="/Tarboz/Views/Login/Index.php">Login Index</a>  | 
            <a href="/Tarboz/Views/User/Index.php">User Index</a>  | 
        </nav>
        <div id="links"><a href="./Views/Login/login.php">Login</a></div>
      </div>

      <div class="header_row">
        <div id="search">
          <form>
            <input type="text" name="search" class="keyboardInput">
            <br>
            <select name="src_lang">
              <option>Source Language</option>
              <option>English</option>
              <option>Russian</option>
              <option>Mandarin</option>
              <option>Farsi</option>
            </select>
            <select name="tgt_lang">
              <option>Target Language</option>
              <option>English</option>
              <option>Russian</option>
              <option>Mandarin</option>
              <option>Farsi</option>
            </select>
            From: <input type="date" name="startdate" placeholder="Start Date">
            To: <input type="date" name="enddate" placeholder="End Date">
            <br>
          </form>
        </div><!--search-->
      </div><!--header_row-->
    </div><!--header-->

    