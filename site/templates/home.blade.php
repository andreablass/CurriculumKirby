@extends('layouts.default')
@section('content')
<header class="text-center text-3xl font-bold py-4">
<h2 class="text-center text-4xl font-bold mt-4">Andrea Blass Zamudio</h2>    
  </header>
    <div class="w-screen h-screen grid place-content-center grid-cols-1 md:grid-cols-2">
        <div class="w16 md:w32 lg:w48 p-10 rounded shadow">
                <section>
                <h3 class="text-2xl font-bold text-gray-700 my-4">About me</h3>
                <p class="max-w-sm">Soy una desarrolladora de software. Me encanta estar al tanto de las nuevas tecnologías y aprender de ellas, soy una persona apasionada, responsable y
                        proactiva.</p>
            </section>
        </div>
        <div class="w16 md:w32 lg:w48  p-10 rounded shadow">
                <section class="">
                <h3 class="text-2xl font-bold text-gray-700 my-4">Work Experience</h3>
                 <p >@kt($page->text()) </p>
                 <br>
                 <br>
            </section>
            <section class="column text" >
                <h3 class="font-bold ">Address: </h3>
                <p>@kt($page->address())</p>
            </section>
            <section class="column text">
                <h3 class="font-bold ">Email</h3>
                <p>@kt($page->email())</p>
                <h3 class="font-bold ">Phone</h3>
                <p>@kt($page->phone())</p>
            </section>
            <section class="column text">
            <h3 class="font-bold ">On the web</h3>
            <ul>
                <?php foreach ($page->social()->toStructure() as $social): ?>
                <li><?= Html::a($social->url(), $social->platform()) ?></li>
                <?php endforeach ?>
            </ul>
            </section>
        </div>
</div>
@endsection
