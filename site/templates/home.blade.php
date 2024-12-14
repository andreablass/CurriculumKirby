@extends('layouts.default')
@section('content')

    <div class="grid justify-center grid-cols-1 md:grid-cols-2 ">
        <div class="w16 md:w32 lg:w48 p-10 rounded shadow">
                <section class="top-12 sticky">
                <h3 class="text-2xl font-bold text-gray-700 my-4">About me</h3>
                <div class="max-w-sm">
                    @kt($page->about())
                </div>
            </section>
        </div>
        <div class="w16 md:w32 lg:w48  p-10 rounded shadow ">
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
