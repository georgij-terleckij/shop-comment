@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add new Product</h1>
            <form about="/product/create" method="post" enctype="multipart/form-data">
                @if(isset( $_SESSION['errors']['name']))
                    @foreach($_SESSION['errors']['name'] as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Product name</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="">
                </div>
                @if(isset($_SESSION['errors']['user_name']))
                    @foreach($_SESSION['errors']['user_name'] as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="mb-3">
                    <label for="user_name" class="form-label">User name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name"
                           value="">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Price</label>
                    <input type="number" class="form-control" id="name" name="price"
                           value="">
                </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Img</label>
                        <input type="file" class="form-control" id="name" name="img"
                               value="">
                    </div>
                @if(isset($_SESSION['errors']['text']))
                    @foreach($_SESSION['errors']['text'] as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Text</label><br>
                    <textarea class="form-control" name="text"></textarea>
                </div>
                @php
                    unset($_SESSION['errors'])
                @endphp
                <div class="d-grid gap-1">
                    <button type="submit" class="btn btn-primary">Add new post</button>
                </div>
            </form>
        </div>
    </div>
@endsection