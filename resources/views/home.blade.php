@extends('master.layout')

@section('title', 'Home')

@section('content')
<div class="container mb-4 mt-4">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success') }}
            </div>
            @endif
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <div class="alert alert-danger">
                {{ $err }}
            </div>
            @endforeach
            @endif

            <div>
                {{-- Page Content --}}
                <section>
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-6">
                                <h1>Home Page</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
                                    voluptates rerum eveniet sapiente repellat esse, doloremque quod
                                    recusandae deleniti nostrum assumenda vel beatae sed aut modi
                                    nesciunt porro quisquam voluptatem.
                                </p>
                            </div>
                            <img src="https://i.pinimg.com/736x/84/12/96/8412965448700d65443aa3a355d08d86.jpg"
                                alt="image-home">
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection