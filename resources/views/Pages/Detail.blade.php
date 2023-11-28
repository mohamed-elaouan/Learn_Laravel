<x-MasterPage title="Home-Page">
    <style>
        .cardParent {
            width: 100%;
            display: flex;
            height: fit-content;
            flex-direction: row;

            align-items: center;
            justify-content: space-around;

        }
        .bodyContent {
            gap: 51px;
            display: flex;
            flex-direction: column;
        }

        .image {
            border-radius: 8px;
        }
    </style>
    <div>

        <h1>Details Article :</h1>
        {{-- display: flex;flex-direction: row;flex-wrap: wrap;justify-content: space-around;gap:15px --}}
        <div class="">
            <div class="cardParent">
                <img class="image" width="400px" height="435px" src={{ asset('storage/' . $Art->Photo_Url) }}
                    alt="Title">
                <div class="bodyContent">
                    <h5 class="card-title">{{ $Art->Nom }}</h5>
                    <p class="" style="text-align: start">+{{ $Art->description }}</p>
                    <div class="row">
                        <p class="text-danger fw-bold">{{ $Art->Prix }}dh</p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-MasterPage>
