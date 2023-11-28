<x-MasterPage title="Home-Page">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('AddUtilusateur') }}">
                                        @csrf
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
                                        {{-- Name --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" value="{{ old('Name') }}"
                                                    @error('Name')
                                                style="border: 2px rgb(153, 0, 0) solid"
                                                @enderror
                                                    name="Name" id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                {{-- @error('Name')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                            </div>

                                        </div>

                                        {{-- email --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c"
                                                    value="{{ old('email') }}" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                {{-- @error('email')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                            </div>
                                        </div>


                                        {{-- bio --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <textarea name="bio" id="" cols="40" rows="4">{{ old('bio') }}</textarea>
                                                {{-- @error('bio')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                            </div>

                                        </div>
                                        {{-- password --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="psw" id="form3Example4c"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                {{-- @error('psw')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                            </div>
                                        </div>
                                        {{-- password Confimation --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="psw_confirmation" id="form3Example4c"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password Confirme</label>
                                                {{-- @error('psw')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                            </div>
                                        </div>

                                        {{-- <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div> --}}

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-MasterPage>
