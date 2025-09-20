@extends('front.layouts.master')
@section('css')

<style>
/* About Section */
.about-section {
    width: 80%;
    margin: 0 auto;
    background-color: #fff; /* Default white background for the section */
}

/* Title Wrapper */
.about-title-wrapper {
    background-color: #f5f7fa; /* Light blue-gray background for the title only */
    padding: 80px 0; /* Add padding to give the background some space around the title */
}

/* Title */
.about-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    text-transform: capitalize;
    margin: 0; /* Remove default margin to control spacing via the wrapper */
}

.mb-10 {
    margin-bottom: 100px;
}

/* Language Cards Section */
.language-cards-section {
    background-color: #fff; /* White background */
}

/* Language Card */
.language-card {
    background-color: #fff;
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    overflow: hidden; /* Ensure the flag image respects the border-radius */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 400px;
}

.language-card:hover {
    /* transform: translateY(-5px); */
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
}

/* Flag Image */
.language-flag {
    width: 100%;
    height: 250px; /* Fixed height for the flag */
    object-fit: cover; /* Ensure the image fits nicely */
}

/* Card Body */
.language-card-body {
    padding: 1.5rem;
}

/* Card Title */
.language-card-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 1rem;
}

/* Card Text */
.language-card-text {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.3;
    margin-bottom: 1rem;
}

/* Card Link */
.language-card-link {
    font-size: 1.2rem;
    color: #333;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
}

.language-card-link:hover {
    color: #333; /* Orange on hover to match your theme */
}

.language-card-link i {
    font-size: 0.8rem;
}

/* Responsive Adjustments */
@media (max-width: 768px) {

    .about-title {
        font-size: 1.8rem;
    }

    .language-card-title {
        font-size: 1.3rem;
    }

    .language-card-text {
        font-size: 0.85rem;
    }

    .language-card-link {
        font-size: 0.85rem;
    }

    .language-flag {
        height: 120px;
    }
}



@media (max-width: 576px) {
    .about-title {
        font-size: 1.5rem;
    }

    .language-card-title {
        font-size: 1.2rem;
    }

    .language-flag {
        height: 100px;
    }

    .about-subtitle {
        font-size: 1.3rem;
    }

    .about-text {
        font-size: 0.85rem;
    }

    .btn-courses,
    .btn-contact {
        font-size: 0.85rem;
        padding: 6px 12px;
    }

    .about-title-wrapper {
        padding: 10px 0;
    }

    .vision-list li {
        font-size: 0.85rem;
        padding-left: 20px;
    }

    .vision-list li::before {
        width: 12px;
        height: 2px;
    }

    .advantage-title {
        font-size: 1rem;
    }

    .advantage-text {
        font-size: 0.85rem;
    }

    .advantage-icon {
        font-size: 1.3rem;
    }

    .advantage-card {
        padding: 10px;
    }


    
}


.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    border-radius: unset !important;
    border-color:unset!important;
    border:unset!important;
    color:#f28c38;
    font-weight: bold;
    
}
.nav-tabs {
    border-bottom:unset!important;
    font-size: 1.5rem;
}

.nav-tabs .nav-link {
    border-radius: unset !important;    
    border-color:unset!important;
    border:unset!important;
    font-size: 1.5rem;
    color: #333;
    text-decoration: none;
    text-transform: capitalize;
    position: relative;
    transition: color 0.3s ease;
}


.nav-item .active::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: transparent;
    bottom: -2px;
    left: 0;
    transition: background-color 0.3s ease;
    background: #155799;
}


</style>

@endsection
@section('content')

<!-- Courses Section -->
<div class="about-title-wrapper text-center mb-5">
    <h2 class="title-section">{{ __('Our courses') }}</h2>
</div>
<section class="about-section">
    <div class="container">
        <!-- Language Cards Section -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                {{ __('Courses Language') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                {{ __('Another Courses') }}
                </button>
            </li>
        </ul>
        <br><br>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    @foreach ($courses->where('type', 'language') as $item)
                    <!-- Card 1: Hebrew -->
                    <div class="col-md-4 mb-4">
                        <div class="language-card">
                            <a href="#"><img src="{{ asset($item->image) }}" alt="Hebrew Flag" class="language-flag"> </a>
                            <div class="language-card-body p-4">
                                <h3 class="language-card-title">
                                    {{ $item->title }}
                                </h3>
                                <p class="language-card-text">
                                    {!! Str::limit($item->description, 150, '...') !!}
                                </p>
                                <a href="{{ route('front.courses.show', $item->id) }}" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    @foreach ($courses->where('type', 'another') as $item)
                    <!-- Card 1: Hebrew -->
                    <div class="col-md-4 mb-4">
                        <div class="language-card">
                            <a href="#"><img src="{{ asset($item->image) }}" alt="Hebrew Flag" class="language-flag"> </a>
                            <div class="language-card-body p-4">
                                <h3 class="language-card-title">
                                    {{ $item->title }}
                                </h3>
                                <p class="language-card-text">
                                    {!! Str::limit($item->description, 150, '...') !!}
                                </p>
                                <a href="{{ route('front.courses.show', $item->id) }}" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

@endsection