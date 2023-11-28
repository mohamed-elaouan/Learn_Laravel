<x-MasterPage title="Edit Articles">
    <div style="display: flex;flex-direction: column;align-items: center;">
        <h1>Modification :</h1>
        @if ($errors->any())
            <div class="alert alert-danger container" role="alert">
                <h4>Errors :</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form style="display: flex;flex-direction: column;width: 60%;gap: 10px;" enctype="multipart/form-data"
            action="{{ route('Article.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Nom :</label>
                <input type="text" name="Nom" value="{{ $article->Nom }}" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <input type="text" name="id" hidden value="{{ $article->id }}">
            <div class="form-group">
                <label for="exampleInputEmail1">Prix:</label>
                <input type="number" name="Prix" value="{{ $article->Prix }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Photo (URL) :</label>
                <input type="file" name="Photo_Url" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Decription :</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ $article->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>



    </div>
</x-MasterPage>
