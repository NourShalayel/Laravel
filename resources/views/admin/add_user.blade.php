@extends('frontsite.layout.menu_user')

@section('content')
    @include('admin.layout.message')

    <form class="form-horizontal" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <main class="mn-inner mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <h4 class="font-weight-bold text-center">Add User</h4>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="card white darken-1">
                                <div class="card-content">
                                    <div class="row">


                                                <p>Enter UserName</p>
                                                <input id="username" type="text" name="name" class="validate"
                                                       autocomplete="off" required>
                                                <br>
                                                <p>Enter Phone Number</p>


                                                <input id="number" type="number" name="phone" class="validate"
                                                       autocomplete="off" required>
                                                <br>

                                                <p>Enter Email</p>
                                                <input id="email" type="email" name="email" class="validate"
                                                       autocomplete="off" required>

                                                <br>

                                                <p>Enter Password</p>
                                                <input id="password" type="password" name="password" class="validate"
                                                       autocomplete="off" required>

                                            <br>


                                                <input type="submit" name="submit" value="submit"
                                                       class="waves-effect waves-light btn teal">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
    </div>
    </div>
@endsection
