<div id="mySidenav" class="sidenav2">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>PHP</center></font></h1>
      @if(count($phptabs)>0)
      @foreach ($phptabs as $ptab)
    <a href="/phpbasictrylang/{{$ptab->id}}">{{$ptab->title}}</a>
      @endforeach
    @endif
  </div>
  <span style="font-size:30px;cursor:pointer; padding: 20px;" onclick="openNav()">&#9776; open</span>
  
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>