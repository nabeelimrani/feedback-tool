@extends('components.layouts.main')

@section('main-section')
    @push('title')
        <title>View Feedback - Feedback Tool</title>
    @endpush

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Feedback Show</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('feedback.show') }}">Feedback</a></li>
                            </ol>
                            <a href="{{ route('feedback') }}" class="btn btn-info">Add Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (isset($feedback))
                            @foreach ($feedback as $feedbackdata)
                                <div class="card mb-3">
                                    <div class="card-header bg-primary text-white">
                                        Feedback by: <strong>{{ $feedbackdata->user_name }}</strong>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Title:</strong> {{ $feedbackdata->title }}</h5>
                                        <p class="card-text"><strong>Description:</strong> {{ $feedbackdata->description }}
                                        </p>
                                        <p class="card-text"><strong>Category:</strong> {{ $feedbackdata->category }}</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <strong>Comments:</strong>
                                    </div>

                                    <ul class="list-group">
                                        @foreach ($feedbackdata->comments as $comment)
                                            <li class="list-group-item m-2">
                                                <strong>{{ $comment->user->name }}:</strong>
                                                @if ($comment->mentioned_user_id)
                                                    <span
                                                        class="badge badge-info">{{ $comment->mentionedUser->name }}</span>
                                                @endif
                                                {{ $comment->body }}
                                            </li>
                                        @endforeach
                                    </ul>

                                    <form method="post" action="{{ route('feedback.comment.store', $feedbackdata->id) }}"
                                        class="mt-3">
                                        @csrf
                                        <div class="form-group m-2">
                                            <textarea id="commentBody" name="body" class="form-control" rows="3" placeholder="Add a comment" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary float-right mb-2 mr-2"><i
                                                class="fas fa-comment"></i> Add Comment</button>
                                    </form>
                                </div>
                                <hr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#alert").animate({
                    opacity: 0,
                    height: 0,
                    padding: 0
                }, 1000, function() {
                    $(this).hide();
                });
            }, 1000);
        });
    </script>

@endsection
