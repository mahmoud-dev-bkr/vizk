@extends('front.layouts.master')
@section('css')

<style>
/* Courses Section */
.courses-section {
    background-color: #fff; /* White background */
}

/* Course Flag */
.course-flag {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Course Title */
.course-title {
    font-size: 6rem;
    font-weight: 900;
    color: #333;
    text-transform: capitalize;
    margin-bottom: 50px;
}

/* Course Text */
.course-text {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

/* Course Subtitle */
.course-subtitle {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 1rem;
}

/* Course List */
.course-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.course-list li {
    position: relative;
    padding-left: 30px; /* Space for the custom bullet */
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 0.5rem;
}

.course-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 3px;
    background-color: #f28c38; /* Orange bullet */
}

/* Course Details Box */
.course-details-box {
    background-color: white; /* Light gray background */
    border: 2px solid #f28c38; /* Orange border */
    border-radius: 15px; /* Rounded corners */
    padding: 20px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

/* Course Detail Item */
.course-detail-item {
    font-size: 1rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.course-detail-item strong {
    color: #333;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .course-title {
        font-size: 2rem;
    }

    .course-subtitle {
        font-size: 1.3rem;
    }

    .course-text {
        font-size: 0.9rem;
    }

    .course-list li {
        font-size: 0.9rem;
        padding-left: 25px;
    }

    .course-list li::before {
        width: 15px;
        height: 2px;
    }

    .course-detail-item {
        font-size: 0.9rem;
    }

    .course-flag {
        width: 50px;
        height: 35px;
    }
}

@media (max-width: 576px) {
    .course-title {
        font-size: 1.5rem;
    }

    .course-subtitle {
        font-size: 1.2rem;
    }

    .course-text {
        font-size: 0.85rem;
    }

    .course-list li {
        font-size: 0.85rem;
        padding-left: 20px;
    }

    .course-list li::before {
        width: 12px;
        height: 2px;
    }

    .course-detail-item {
        font-size: 0.85rem;
    }

    .course-flag {
        width: 40px;
        height: 25px;
    }
}

</style>

@endsection
@section('content')

<!-- Courses Section -->
<section class="courses-section py-5">
    <div class="container">
        
    </div>
</section>

@endsection

@section('js')

@endsection