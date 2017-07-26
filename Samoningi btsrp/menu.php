<!--
<div class="container">
    <div class="row">
        <div class="col-md-12">
 <ul id="menu">
        <li><a href="home.php">sąmoningi</a></li>
        <li><a href="dalintis.php">dalintis</a></li>
        <li><a href="search.php">renginiai</a></li>
        <li><a href="info.php">apie</a></li>
    </ul>
            </div>
</div>

 </div>
-->


<div class="topnav" id="myTopnav">
  <a href="home.php">sąmoningi</a>
  <a href="dalintis.php">dalintis</a>
  <a href="search.php">renginiai</a>
  <a href="info.php">apie</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>