@extends('layouts.app')

@section('content')
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="{{ url('admin/projects') }}">Les projets</a>
  <a href="{{ url('admin/adherents') }} ">Les adhérents</a>
  <a href="{{ url('contacts') }}">Les contacts</a>
  <a href ="{{ url('logout') }}">Se déconnecter</a>

</div>


<span id="open" style="font-size:20px;cursor:pointer;position: absolute;left: 0px;transition: 0.3s;" onclick="openNav()">&#9776; ouvrir panneau de navigation</span>

        <div class="adminLayout" id="adminLayout">
            @yield('content1')
        </div>

<script>

function openNav() {

  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("open").style.left = "255px";
  document.getElementById("adminLayout").style.left = "255px";

}

function closeNav() {

  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("open").style.left = "0";
  document.getElementById("adminLayout").style.left = "0"


}
</script>

@endsection