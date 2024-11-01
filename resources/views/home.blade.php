@extends('master.layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success mt-4">
                {{session('success') }}
            </div>
            @endif
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <div class="alert alert-danger mt-4">
                {{ $err }}
            </div>
            @endforeach
            @endif

            <h1 class="">This home page!!!</h1>
            @if(Auth::check())
            <div style="display:flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>

            @else
            <div class="alert alert-info">
                <p>Please log in to view the home page.</p>
            </div>
            @endif
        </div>
    </div>
    @endsection