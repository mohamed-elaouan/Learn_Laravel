<x-MasterPage title="Home-Page">
    <div class="container">
        <h1>Profile Page</h1>

        <div
            style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: space-around;gap:15px; margin-top: 10px">
            @foreach ($ListArticle as $item)
                <div class="card" style="width: 18rem;">
                    {{-- ../../../storage/app/public/    {{ asset('storage/' . $item->Photo_Url) }} --}}
                    {{-- "https://picsum.photos/500/300" ---> afficher les images aleatoirement --}}
                    <td>
                        <img class="card-img-top" src={{ asset('storage/' . $item->Photo_Url) }} alt="Title">
                    </td>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->Nom }}</h5>
                        <p class="card-text" style="text-align: start"> + {{ $item->description }}</p>
                        <div class="row">
                            <p class="text-danger fw-bold">{{ $item->Prix }}dh</p>
                            <a href="{{ route('Article.show', $item->id) }}" class="btn btn-primary"
                                style="width: fit-content">Detail</a>
                            @auth
                                @if (auth()->user()->id === $item->Profile_id)
                                    <a href="{{ route('Article.edit', $item->id) }}" class="btn btn-warning"
                                        style="width: fit-content">Edit</a>
                                    <form method="POST" action="{{ route('Article.destroy', $item->id) }}">
                                        @method('DELETE')
                                        @csrf{{--  atack les angection SQL --}}
                                        <button type="submit" class="btn btn-danger"
                                            style="width: fit-content">Delete</button>
                                    </form>
                                @endif
                            @endauth


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div>{{ $ListArticle->links() }}</div> --}}


    </div>
</x-MasterPage>
