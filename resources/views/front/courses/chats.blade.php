@extends('front.layouts.master')
@section('css')

<style>
/* Courses Section */
.courses-section {
    background-color: #fff;
    padding: 60px 0;
}

/* Chat Container */
.chat-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #f9f9f9;
    border: 2px solid #06BBCC;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    height: 600px;
    overflow-y: auto;
}

/* Chat Title */
.chat-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Chat Box */
.chat-box {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
}

.chat-box img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 15px;
    object-fit: cover;
    border: 2px solid #06BBCC;
}

.chat-content {
    background-color: #fff;
    padding: 10px 15px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 70%;
}

.chat-name {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.chat-message {
    font-size: 1rem;
    color: #666;
    line-height: 1.4;
}

/* Input Area */
.input-area {
    max-width: 800px;
    margin: 20px auto 0;
    display: flex;
    gap: 10px;
}

.input-area input {
    flex-grow: 1;
    padding: 10px;
    font-size: 1rem;
    border: 2px solid #06BBCC;
    border-radius: 5px;
    outline: none;
}

.input-area button {
    padding: 10px 20px;
    font-size: 1.1rem;
    color: #fff;
    background-color: #06BBCC;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.input-area button:hover {
    background-color: #e07c2c;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .chat-title {
        font-size: 2rem;
    }

    .chat-box img {
        width: 40px;
        height: 40px;
    }

    .chat-name {
        font-size: 1rem;
    }

    .chat-message {
        font-size: 0.9rem;
    }

    .input-area input {
        font-size: 0.9rem;
    }

    .input-area button {
        font-size: 1rem;
        padding: 8px 15px;
    }
}

@media (max-width: 576px) {
    .chat-title {
        font-size: 1.5rem;
    }

    .chat-box img {
        width: 35px;
        height: 35px;
    }

    .chat-name {
        font-size: 0.9rem;
    }

    .chat-message {
        font-size: 0.85rem;
    }

    .input-area input {
        font-size: 0.85rem;
        padding: 8px;
    }

    .input-area button {
        font-size: 0.9rem;
        padding: 6px 12px;
    }
}
</style>

@endsection
@section('content')

<!-- Courses Section -->
<section class="courses-section py-5">
    <div class="container">
        <h1 class="chat-title">Grammar Course Chat</h1>
        <div class="chat-container">
            <div class="chat-box">
                <img src="https://via.placeholder.com/50" alt="User 1">
                <div class="chat-content">
                    <div class="chat-name">Alice</div>
                    <div class="chat-message">This lesson on nouns is really helpful!</div>
                </div>
            </div>
            <div class="chat-box">
                <img src="https://via.placeholder.com/50" alt="User 2">
                <div class="chat-content">
                    <div class="chat-name">Bob</div>
                    <div class="chat-message">Yes, the examples make it clear. Thanks!</div>
                </div>
            </div>
            <div class="chat-box">
                <img src="https://via.placeholder.com/50" alt="User 3">
                <div class="chat-content">
                    <div class="chat-name">Charlie</div>
                    <div class="chat-message">Can someone explain irregular plurals again?</div>
                </div>
            </div>
        </div>
        <div class="input-area">
            <input type="text" placeholder="Type your message...">
            <button>Send</button>
        </div>
    </div>
</section>

@endsection
@section('js')

@endsection