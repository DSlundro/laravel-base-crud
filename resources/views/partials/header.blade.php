<header>
<div class="container">
    <div class="row">

        <div class="col-3 d-flex align-items-center py-3">
            <img src="{{('/img/dc-logo.png')}}" alt="">
        </div>
        <div class="col d-flex justify-content-center align-items-center" >

            <nav class="navbar navbar-light py-0 px-3 gap-5 fs-5 fw-bold">
                <a class ="{{Route::currentRouteName()==='home'?'active':''}}" href="{{ route('home')}}">Home</a>
                <a class ="{{Route::currentRouteName()==='comics.index'?'active':''}}" href="{{ route('comics.index')}}">Comics</a>
                <a class ="{{Route::currentRouteName()==='comics.create'?'active':''}}" href="{{ route('comics.create')}}">Create</a>
            </nav>

        </div>
    </div>
</div>
</header>