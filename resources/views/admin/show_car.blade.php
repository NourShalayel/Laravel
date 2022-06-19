@extends('frontsite.layout.menu_admin')

@section('content')
    <title>Employee leave management system | Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template"/>
    <meta name="keywords" content="admin,dashboard"/>
    <meta name="author" content="Steelcoders"/>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Cars</h1>

            <br/>


            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Price_Per_Day</th>
                    <th>Price_Per_KM</th>
                    <th>Company_name</th>
                    <th>Actions</th>

                </tr>

                @foreach($car as $cars)

                    <td>  {{$cars->id}} </td>
                    <td>  {{$cars->name}} </td>
                    <td>  {{$cars->color}} </td>
                    <td>
                        <img alt="Image" class="table-avatar" style=" border-radius: 2%; display: inline;width: 4rem;"
                             src="{{asset('car_image/'.$cars->image)}}">

                    </td>

                    <td>  {{$cars->price_per_da}} </td>
                    <td>  {{$cars->price_per_km}} </td>
                    <td>  {{$cars->company_id}} </td>


                <td>
                    <a class="btn btn-info btn-sm" href="{{route('car.edit',$cars)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                </td>
                    <td>
                        <form method="post" action="{{route('car.destroy',$cars)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">

                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>


                        </form>

                    </td>

                    </tr>


</table>
                @endforeach
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p>--}}
{{--                            {{$cars->name ?? 'No Car!!'}}--}}

{{--                        </p>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            </table>--}}

        </div>
    </div>
@endsection
