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
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                            class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                            class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                            class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-10" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                            class="btn btn-primary">Go somewhere</a>
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