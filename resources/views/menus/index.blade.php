@include('layouts.header')
<main>
    <h1 class="text-white">Hi! Welcome in Cijerah's Restaurant</h1>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{ asset('assets/images/nasgor.jpeg') }}" alt="" width="500px">
            </div>
            <div class="col-4">
                <div class="row text text-white">
                    <p>Promo for this Month (January)!!
                        <br>Promo for Couple, discount 20%.
                        <br>Promo for you and your friends (At least 3 person), discount 25%.
                    </p>
                    <button class="bg-dark"> <a class="text-white" href="{{ route('products') }}">Order Now!</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <p class="text-white">Operational Hours: 10.00 AM - 23.00 PM<br>
                    Location: Jl. Cijerah Raya no 102, Bandung Kulon, Bandung, Jawa Barat.
                </p>
            </div>
        </div>
    </div>
</main>
@include('layouts.footer')
