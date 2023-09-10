
@include('home.navbar')
@extends('home.footer')
<!DOCTYPE html>
<html>
<head>
    <style>
        /* تخصيص الكارد بواسطة CSS */
        .card {
            border: 1px solid #cda45e;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 300px;
            margin: 20px;
            background-color:rgba(245, 245, 220, 0);
        }
        .card:hover{
         background-color:rgba(28, 28, 28, 0.8);
         transition: 0.5s;
        }
        .card h2 {
            color:#cda45e;
            text-align: center
        }


        /* تخصيص الصورة بواسطة CSS */
        .card img {
            max-width: 100%;
            height: 250px;
            margin-top: 10px;
            border-radius:3%
        }
        .res{
            display: flex;
            margin-left:2%;
        }
        body{
         margin-top:10%;

        }
    </style>
</head>
<body>
<section>


            </div>
        </a>
    </li>
<ul class="res">
    @foreach($resturants as $restaurant)
    <li style="list-style: none">
        <a href="{{url('resdetail',$restaurant->id)}}">
       <div class="card">
            <img src="{{ $restaurant->image}}"
             alt="{{ $restaurant->name }}">
            <h2>{{ $restaurant->name }}</h2>

        </div></a>
    </li>
    @endforeach
</ul>

</body>
</html>
</section>
