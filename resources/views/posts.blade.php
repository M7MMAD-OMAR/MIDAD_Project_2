@section('title')
    {{ $title }}
@endsection


<x-layout>
    @section('content')
        <h4>Posts All ({{ $posts->count() }})</h4>
        @foreach($posts as $post)
            <a href="{{ route('comment.show', $post->id ) }}">
                <div>
                    <h3>
                        {{ $post->post_title }}
                    </h3>
                    <p>{{ $post->post_body }}</p>
                </div>
            </a>
            @if(! $loop->last)
                <hr>
                <br>
            @else
                <br><br>
            @endif
        @endforeach
    @endsection
</x-layout>

