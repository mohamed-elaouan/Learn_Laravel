<x-MasterPage title="Edit Articles">
    <div style="display: flex;flex-direction: column;align-items: center;">
        <h1>Add New Article :</h1>
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
        <form style="display: flex;flex-direction: column;width: 60%;gap: 10px;" action="{{ route('Article.store') }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nom:</label>
                <input type="text" name="Nom" class="form-control" value="{{ old('Nom') }}"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prix:</label>
                <input type="number" name="Prix" value="{{ old('Prix') }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Photo:</label>
                <input type="file" name="Photo_Url" accept="image/*" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Decription :</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajoutée</button>
        </form>
    </div>
</x-MasterPage>
