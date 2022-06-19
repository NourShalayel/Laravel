@extends('frontsite.layout.menu')

@section('content')

    <section class="content">
        @csrf
        @yield('shared.bar.bar')
        @include('admin.layout.message')

        <form method="post" action="{{route('car.update',$car)}}">
            @csrf
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Post</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Post Title</label>
                                <input type="text" name="title" id="inputName" class="form-control" value="{{$car->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Post Body</label>
                                <textarea name="body" id="inputDescription" class="form-control" rows="4" >

                    {{$post->body}}
                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select name="cat_id" id="inputStatus" class="form-control custom-select">
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Edit Post" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection

@section('title')
    Add Admin page
@endsection

