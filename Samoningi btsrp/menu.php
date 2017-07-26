

<div class="topnav" id="menu">
  <a href="home.php">sąmoningi</a>
  <a href="dalintis.php">dalintis</a>
  <a href="search.php">renginiai</a>
  <a href="info.php">apie</a>
  <a href="javascript:void(0);" style="font-size:40px;" class="icon" onclick="myFunction()">&#9660;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("menu");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>