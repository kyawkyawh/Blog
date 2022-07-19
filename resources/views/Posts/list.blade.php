@extends('layouts.master')
@section("content")
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <h4 class="card-title mb-0">Video Card</h4>
        </div>
        <div class="embed-responsive embed-responsive-item embed-responsive-16by9 w-100">
            <iframe src="https://www.youtube.com/embed/2b9txcAt4e0" style="width:100%"
                height="300" allowfullscreen></iframe>
        </div>
        <div class="card-body">
            <p class="card-text">
                Candy cupcake sugar plum oat cake wafer marzipan jujubes.
                Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                pastry gummies
                tiramisu
                chocolate bar muffin.
            </p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>

@endsection
