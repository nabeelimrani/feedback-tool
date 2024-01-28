@extends('components.layouts.main')

@section('main-section')
    @push('title')
        <title>{{ GoogleTranslate::trans('Home - Feedback Tool', app()->getLocale()) }}</title>
    @endpush

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</h1>

                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('home') }}">{{ GoogleTranslate::trans('Home', app()->getLocale()) }}</a>
                                </li>


                                <li class="breadcrumb-item dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="languageDropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ strtoupper(app()->getLocale()) }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                        <select class="form-select changeLang">
                                            <option value="en"
                                                {{ session()->get('locale') == 'en' ? 'selected' : ' ?>' }}>English
                                            </option>
                                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                                                France
                                            </option>
                                            <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>
                                                Spanish
                                            </option>
                                            <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>
                                                Urdu
                                            </option>
                                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                                                Arabic
                                            </option>
                                        </select>
                                        <!-- Add more languages as needed -->
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>


                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="small-box bg-info">
                            <div class="inner">
                                @if (isset($totalfeedback))
                                    <h3>{{ GoogleTranslate::trans($totalfeedback, app()->getLocale()) }}</h3>
                                @endif
                                <p>{{ GoogleTranslate::trans('Total Feedbacks', app()->getLocale()) }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-chatbox"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="small-box bg-success">
                            <div class="inner">
                                @if (isset($totalcomment))
                                    <h3>{{ $totalcomment }}</h3>
                                @endif
                                <p>{{ GoogleTranslate::trans('Total Comments', app()->getLocale()) }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-chatbubbles"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                @if (isset($totaluser))
                                    <h3>{{ $totaluser }}</h3>
                                @endif
                                <p>{{ GoogleTranslate::trans('Total Users', app()->getLocale()) }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-stalker"></i>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i
                                        class="fas fa-thumbs-up"></i>&nbsp;{{ GoogleTranslate::trans('Recently Feedback', app()->getLocale()) }}
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    @if (count($feedbackdata) > 0)
                                        @foreach ($feedbackdata as $data)
                                            <li class="item">
                                                <div class="product-img">
                                                    <img src="{{ asset('frontend/dist/img/avatar.png') }}"
                                                        alt="Product Image" class="img-size-50">
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{ route('feedback.show') }}" class="product-title">
                                                        <span
                                                            class="badge badge-warning float-right">{{ $data->created_at->shortRelativeDiffForHumans() }}</span>
                                                        {{ $data->user_name }}
                                                    </a>
                                                    <span class="product-description" data-toggle="tooltip"
                                                        data-placement="top" title="{{ $data->description }}">
                                                        <strong>
                                                            {{ GoogleTranslate::trans(Str::limit($data->description, 50), app()->getLocale()) }}
                                                        </strong>
                                                    </span>
                                                </div>
                                            </li>
                                        @endforeach
                                        <div class="card-footer text-center">
                                            <a href="{{ route('feedback.show') }}"
                                                class="uppercase">{{ GoogleTranslate::trans('View All Feedback', app()->getLocale()) }}</a>
                                        </div>
                                    @else
                                        <b
                                            class="mt-3 p-2">{{ GoogleTranslate::trans('No latest feedback available.', app()->getLocale()) }}</b>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i
                                        class="fas fa-comment"></i>&nbsp;{{ GoogleTranslate::trans('Recently Comments', app()->getLocale()) }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    @if (count($commentdata) > 0)
                                        @foreach ($commentdata as $data)
                                            <li class="item">
                                                <div class="product-img">
                                                    <img src="{{ asset('frontend/dist/img/avatar.png') }}"
                                                        alt="Product Image" class="img-size-50">
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{ route('feedback.show') }}" class="product-title">
                                                        <span
                                                            class="badge badge-warning float-right">{{ $data->created_at->shortRelativeDiffForHumans() }}</span>
                                                        {{ $data->user->name }}


                                                    </a>

                                                    <span class="product-description" data-toggle="tooltip"
                                                        data-placement="top" title="{{ $data->body }}">

                                                        @if ($data->mentionedUser)
                                                            <span
                                                                class="badge badge-info">{{ $data->mentionedUser->name }}</span>
                                                        @endif{!! Str::limit($data->body, 50) !!}

                                                    </span>
                                                </div>
                                            </li>
                                        @endforeach
                                        <div class="card-footer text-center">
                                            <a href="{{ route('feedback.show') }}" class="uppercase">View All
                                                Comments</a>
                                        </div>
                                    @else
                                        <b class="mt-3 p-2">No latest comments available.</b>
                                    @endif

                                </ul>
                            </div>
                        </div>
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
@endsection
