
<div class="container">

    <div class="row">
        <div class="col-12 mt-3">
            <div class="pull-left">
                <h2>Comics</h2>
            </div>
        </div>
    </div>
    <div class="row text-start">
        <div class="pull-right py-2">
            <a href="" class="btn btn-success "> Add New Comic</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Img</th>
            <th>Title</th>
            <th>Description</th>
            <th>Rlease Date</th>
            <th>Series</th>
            <th>Type</th>
            <th>Price</th>
            <th>Options</th>
        </tr>

        @foreach($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->img}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}</td>
            <td>
                <form method="POST" action="{{ route('comic.destroy', $comic->id) }}">
                    {{ csrf_field }}
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>    

</div>
