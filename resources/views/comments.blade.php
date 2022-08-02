@section('title')
    {{ $title }}
@endsection

@section('style')
    <style>
        body {
            background-color: ;
        }
    </style>
@endsection

<x-layout>
    @section('content')
        <div class="post">
            <h3> {{ $post->post_title }}</h3>
            <p> {{ $post->post_body }}</p>
            <br>
            <a href="{{ route('post.show') }}">
                <input type="button" value="Go Back">
            </a>
            <br>
            <br>
        </div>

        <h4>Comments All ({{ $comments->count() }})</h4>


        @foreach($comments as $comment)
            <div>
                <h3>
                    {{ $comment->comment_title }}
                </h3>
                <p>{{ $comment->comment_body }}</p>
            </div>
            @if(! $loop->last)
                <hr>
                <br>
            @else
                <br><br>
            @endif

        @endforeach
    @endsection
</x-layout>
