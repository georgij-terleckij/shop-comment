@extends('layout')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="w-100"
                 style="min-height: 300px; background: #cccccc; background-image: url('{{ $product->img }}');background-size: cover;"
            ></div>
        </div>
        <div class="col-6">
            <h4>Product - {{ $product->name }}</h4>
            <p>User add: {{ $product->user_name }}</p>
            <p>created_at: {{ $product->created_at }}</p>
            <p>appraisal: {{ $appraisal }}</p>
        </div>
        <div class="col-12">
            <h3>Add you comment</h3>
            <form action="/product/{{ $product->id }}/comment" method="post">
                @if(isset( $_SESSION['errors']['user_name']))
                    @foreach($_SESSION['errors']['user_name'] as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">You name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name"
                           value=""/>
                </div>
                @if(isset( $_SESSION['errors']['appraisal']))
                    @foreach($_SESSION['errors']['appraisal'] as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="mb-3">
                    @for($i = 1; $i <= 10; $i++)
                        <label class="form-check-label" for="flexRadioDefault2">
                            {{ $i }} -
                        </label>
                        <input class="form-check-input" type="radio" name="appraisal" id="appraisal{{ $i }}"
                               value="{{ $i }}"
                               @if($i == 10) checked @endif
                        />
                    @endfor
                </div>
                @if(isset( $_SESSION['errors']['text']))
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
            @forelse($product->comments as $comment)
                <div>
                    <p>Name: {{ $comment->name }} Appraisal: {{ $comment->appraisal }}
                        Date: {{ $comment->created_at }}</p>
                    <span>{{ $comment->text }}</span>
                </div>
            @empty
                <p>No comment</p>
            @endforelse
        </div>
    </div>
@endsection