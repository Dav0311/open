@extends('app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1>Welcome to the UICT open library system</h1>
            <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat iusto, magni tempora omnis, nulla odit ab iure, earum tenetur expedita mollitia aspernatur quisquam reprehenderit ratione! Architecto, natus. Vel, assumenda magnam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui deserunt, rem hic ullam natus cumque itaque eveniet ex, dicta nisi quos! Magni nobis tempora quos ad facilis aliquid aspernatur quae.</p>
            </div>
        </div>
    </div>
</div>

<br>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('images/ai.webp') }}" alt="Logo" width="500"height="500" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
                
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('images/hub.jpg') }}" alt="Logo" width="500"height="500" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
               
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/books.jpg') }}" alt="Logo" width="500" height="500" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
                
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


    <br>
<div class="text">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat iusto, magni tempora omnis, nulla odit ab iure, earum tenetur expedita mollitia aspernatur quisquam reprehenderit ratione! Architecto, natus. Vel, assumenda magnam?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui deserunt, rem hic ullam natus cumque itaque eveniet ex, dicta nisi quos! Magni nobis tempora quos ad facilis aliquid aspernatur quae.</p>
</div>

        <div class="card-group">
        <div class="card">
            <img src="{{ asset('images/malcom.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.”</h5>
            <p class="card-text">While it’s safe to say that no one knows what will happen tomorrow, having an education under your belt will open the door to more opportunities. These job opportunities are also likely to pay more with more education, so what you do today in terms of education will surely prepare you for what’s yet to come.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Malcolm X</small>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/gandi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"> “Live as if you were to die tomorrow. Learn as if you were to live forever.”</h5>
            <p class="card-text">The great thing about learning is that you never have to stop! There’s no limit as to the amount of knowledge you can obtain. So, rip a page from Gandhi’s book and keep on learning while you’re living.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Mahatma Gandhi</small>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/albert.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">“Intellectual growth should commence at birth and cease only at death.“</h5>
            <p class="card-text">The late and great theoretical physicist Albert Einstein makes a strong statement here, which resembles the quote from Gandhi above. The opportunity to learn and the possibility to do so is something you can do at any point in your life. There’s no deadline to learning.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted"> Albert Einstein</small>
            </div>
        </div>
        </div>
        <br>
        <br>
    <div class="location row">
    
        <div class="col-md-6">
            <h2 class="text-center">Visit the main Campus</h2>
            <div class="text">
                <p class="text-center">located at: <strong>nakawa, port bell road</strong></p>
                <p class="text-center">P.O.BOX 7493</p>
            </div>
        </div>
   


        <div class="col-md-6">
            <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.75279220075!2d32.6120995740727!3d0.3283791640093171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbe8dd20f149%3A0xb4e1993eafef262e!2sUganda%20Institute%20of%20Information%20and%20Communications%20Technology!5e0!3m2!1sen!2sug!4v1712838860552!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@stop
