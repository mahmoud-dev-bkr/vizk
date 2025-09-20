@extends('front.layouts.master')
@section('css')

<style>
/* Courses Section */
.courses-section {
    background-color: #fff;
    padding: 60px 0;
}

/* Quiz Container */
.quiz-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

/* Quiz Title */
.quiz-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Quiz Question */
.quiz-question {
    font-size: 1.5rem;
    color: #444;
    margin-bottom: 20px;
    line-height: 1.6;
}

/* Quiz Answers */
.quiz-answers {
    margin-bottom: 20px;
}

.quiz-answers p {
    font-size: 1.2rem;
    color: #666;
    margin: 10px 0;
    padding-left: 20px;
    position: relative;
}

.quiz-answers p::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #f28c38;
}

/* Answer Input */
.answer-input {
    width: 100%;
    max-width: 400px;
    padding: 10px;
    font-size: 1rem;
    border: 2px solid #f28c38;
    border-radius: 5px;
    margin-top: 20px;
}

.answer-input:focus {
    outline: none;
    border-color: #e07c2c;
    box-shadow: 0 0 5px rgba(242, 140, 56, 0.5);
}

/* Submit Button */
.submit-btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.1rem;
    color: #fff;
    background-color: #f28c38;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
}

.submit-btn:hover {
    background-color: #e07c2c;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .quiz-title {
        font-size: 2rem;
    }

    .quiz-question {
        font-size: 1.3rem;
    }

    .quiz-answers p {
        font-size: 1rem;
    }

    .answer-input {
        max-width: 100%;
    }
}

@media (max-width: 576px) {
    .quiz-title {
        font-size: 1.5rem;
    }

    .quiz-question {
        font-size: 1.1rem;
    }

    .quiz-answers p {
        font-size: 0.9rem;
    }
}
</style>

@endsection
@section('content')

<!-- Courses Section -->
<section class="courses-section py-5">
    <div class="container">
        <div class="quiz-container">
            <h1 class="quiz-title">Grammar Quiz</h1>
            <div class="quiz-question">
                What is the plural form of "child"?
            </div>
            <div class="quiz-answers">
                <p>children</p>
                <p>childs</p>
                <p>childes</p>
                <p>childrens</p>
            </div>
            <input type="text" class="answer-input" placeholder="Enter your answer">
            <button class="submit-btn">Submit</button>
        </div>
    </div>
</section>

@endsection
@section('js')

@endsection