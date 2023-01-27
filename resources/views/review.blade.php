<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">

    <title>review</title>
</head>
<body>
<div class="main_container">
    <div class="send_feedback">
        <form class="feedback_form" method="post" action="/review">
            {{csrf_field()}}
            <input type="text" placeholder="title" class="title_feedback" name="title_feed">
            <div class="rate_container">

                <div class="radio_container">
                    <input type="radio" id="star_One" name="drone" value=1
                           checked>
                    <label for="star_One" class="star" onclick="change_star(this , 1)"></label>
                </div>

                <div class="radio_container">
                    <input type="radio" id="star_Two" name="drone" value=2>
                    <label for="star_Two" class="star" onclick="change_star(this , 2)"></label>
                </div>

                <div class="radio_container">
                    <input type="radio" id="star_Tree" name="drone" value=3>
                    <label for="star_Tree" class="star" onclick="change_star(this , 3)"></label>
                </div>
                <div class="radio_container">
                    <input type="radio" id="star_Four" name="drone" value=4>
                    <label for="star_Four" class="star" onclick="change_star(this , 4)"></label>
                </div>
                <div class="radio_container">
                    <input type="radio" id="star_Five" name="drone" value=5>
                    <label for="star_Five" class="star"onclick="change_star(this , 5)"></label>
                </div>
            </div>
            <div class="feedback_inputs">
                <input type="text" placeholder="userName" class="userName_feedback" name="userName_feed">

                <textarea placeholder="comment" class="comment_feedback" name="comment_feed" rows="5" cols="33"></textarea>
            </div>

            <input class="snd_feedback" type="submit" value="Publier"/>

        </form>
    </div>
    <div class="show_feedback">
        <ul class="list_container">
            @foreach($reviewList as $el)
                <li class="feedback_list">
                    <div class="container_feedback">
                        <span class="feedback_username" style="display:flex;align-items: center;gap: 0.5rem;">from: <h3> {{$el['user']}}</h3></span>
                        <div style="border: 1px solid black;"></div>
                        <span class="feedback_title"><h2>{{$el['title']}}</h2></span>
                        <span class="feedback_rate-{{{$el['rate']}}}"></span>
                        <span class="feedback_comment">{{$el['comment']}}</span>
                        <span class="feedback_date">Publier le: {{$el['created_at']}}</span>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</div>
<script src="{{ asset('js/review.js') }}"></script>
</body>
</html>
