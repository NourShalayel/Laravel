@extends('frontsite.layout.menu')
@section('content')
<main class="mn-inner mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <h4 class="font-weight-bold text-center">Update Admin</h4>

        <div class="col-md-12">
            <div class="row" >
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="card white darken-1">
                        <div class="card-content">
                            <div class="row">
                                <form class="col s12" name="signin" method="post">
                                    <div class="input-field col s12">
                                        <!--                                           <p>--><?php //echo $username ?><!--</p>-->
                                        <p>Enter UserName</p>
                                        <input id="username" type="text" name="username" class="validate"  value ="" autocomplete="off" required >

                                        <p>Enter Email</p>
                                        <input id="email" type="email" name="email" class="validate" value =" " autocomplete="off" required >

                                    </div> <div class="input-field col s12">
                                        <p>Enter Password</p>
                                        <input id="password" type="password" name="password" class="validate" value ="" autocomplete="off" required >

                                    </div>

                                    <div class="col s12 center m-t-sm">

                                        <input type="submit" name="submit" value="submit" class="waves-effect waves-light btn teal">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</main>

@endsection
