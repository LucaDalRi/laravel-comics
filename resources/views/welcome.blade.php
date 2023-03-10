@extends('layout.app')

@section('content-header')

<style>
.containerHeader {
  display: flex;
  align-items: center;
  height: 150px;
  text-align: center;
}

.containerLogoHeader {
  width: 40%;
}

.containerLinksHeader {
  width: 60%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

ul {
    display: flex;
    justify-content: center;
    list-style: none;
}

li a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    margin: 0 20px;
}

.active {
    color: rgb(29, 79, 218);
}

</style>

<div class="containerHeader">
    <div class="containerLogoHeader">
      <img src="resources/img/dc-logo.png" alt="DC Logo Header">
    </div>
    <div class="containerLinksHeader">
      <ul>
        <li><a href="#">Character</a></li>
        <li><a class="active" href="#">Comics</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">TV</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Collectibles</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Fans</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Shop</a></li>
      </ul>
    </div>
</div>

@endsection

@section('content-main')

<style>
.container{
  display: flex;
  width: 100%;
}
.card{
  width: 30%;
  margin: 10px
}

.card img{
  width: 100%
}

.comic-text{
  text-align: center;
}
</style>

<div class="container">
    @foreach ($comics as $comic)
    <div class="card">
        <img src="{{ $comics[0]['thumb'] }}" alt="">
        <div class="comic-text">
          {{ $comic['title'] }}
        </div>
      </div>
    @endforeach
</div>

@endsection

@section('content-footer')

<style>
.containerFooter{
  color: white;
  background-color: black;
  text-align: center;
}
</style>

<div class="containerFooter">

  <div>
    <h2>
      Footer Bellissimo
    </h2>
  </div>

</div>

@endsection