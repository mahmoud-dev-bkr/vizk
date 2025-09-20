@extends('front.layouts.master')
@section('css')

<style>
/* Courses Section */
.courses-section {
    background-color: #fff; /* White background */
    padding-top: 60px;
}

/* Course Title */
.course-title {
    font-size: 6rem;
    font-weight: 900;
    color: #333;
    text-transform: capitalize;
    margin-bottom: 50px;
    text-align: center;
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

/* Category Container */
.category-container {
    margin-bottom: 20px;
}

.category-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: #f28c38;
    margin-bottom: 10px;
    padding-left: 10px;
    border-left: 4px solid #f28c38;
}

/* Lesson Container */
.lesson-container {
    max-height: 350px;
    overflow-y: auto;
    background-color: #f9f9f9;
    border: 2px solid #f28c38;
    border-radius: 15px;
    padding: 15px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

/* Course List */
.course-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.course-list li {
    position: relative;
    padding-left: 30px;
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
    background-color: #f28c38;
}

.course-list a {
    color: #666;
    text-decoration: none;
}

.course-list a:hover {
    color: #f28c38;
    text-decoration: underline;
}

/* Course Details Box */
.course-details-box {
    background-color: white;
    border: 2px solid #f28c38;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
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

/* Video Container */
.video-container {
    margin-bottom: 20px;
}

.video-container iframe {
    width: 100%;
    height: 600px; /* Increased from 400px to 600px */
    border: none;
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

    .video-container iframe {
        height: 400px; /* Adjusted for smaller screens */
    }

    .lesson-container {
        max-height: 250px;
    }

    .category-title {
        font-size: 1.1rem;
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

    .video-container iframe {
        height: 300px; /* Adjusted for smaller screens */
    }

    .lesson-container {
        max-height: 200px;
    }

    .category-title {
        font-size: 1rem;
    }
}
</style>

@endsection
@section('content')

<!-- Courses Section -->
<section class="courses-section py-5">
    <div class="container">
        <h1 class="course-title">Grammar</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/QXVzmzhxWWc" title="Introduction to Grammar" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="course-details-box">
                    <div class="course-detail-item"><strong>Course:</strong> Grammar</div>
                    <div class="course-detail-item"><strong>Lesson:</strong> Introduction to Grammar</div>
                    <div class="course-detail-item"><strong>Duration:</strong> 2:45</div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="course-subtitle">Other Lessons</h3>
                <div class="lesson-container">
                    <div class="category-container">
                        <h4 class="category-title">Basics</h4>
                        <ul class="course-list">
                            <li><a href="#">Introduction to Grammar | 2:46</a></li>
                            <li><a href="#">Parts of Speech | Grammar | 4:28</a></li>
                        </ul>
                    </div>
                    <div class="category-container">
                        <h4 class="category-title">Nouns</h4>
                        <ul class="course-list">
                            <li><a href="#">Introduction to Singular and Plural Nouns | 4:35</a></li>
                            <li><a href="#">Irregular Plural Nouns I | 2:34</a></li>
                            <li><a href="#">Irregular Plural Nouns II | 3:23</a></li>
                            <li><a href="#">Irregular Plural Nouns | Base | 5:07</a></li>
                        </ul>
                    </div>
                    <div class="category-container">
                        <h4 class="category-title">Basics</h4>
                        <ul class="course-list">
                            <li><a href="#">Introduction to Grammar | 2:46</a></li>
                            <li><a href="#">Parts of Speech | Grammar | 4:28</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')

@endsection