@layout('templates.index')

@section('content')
<div class="row">
    <div class="span12">
        <h2  align="center">Have no fear of perfection, as you will never reach it!</h2>
        <img src="img/header.jpg" class="img-polaroid" width="940" height="300">
    </div>
</div>

<div class="row">
	<div class="span8">

		@foreach ($posts as $post)
			<div class="divpost img-polaroid">
				<h3 class='post'>{{$post->title}}</h3>
				<small class='content'>
					{{$post->created_at}}
				</small>
				<br>
		   		<small class='content'>
		   			by&nbsp;<a href="#">{{User::find($post->user_id)->username}}</a>
		   		</small>
		        <hr>
		        <p class="content">
					{{ substr($post->content,0, 120).' [..]' }}
				</p>
				<p class="content">
					{{ HTML::link('view/'.$post->id, 'Read more &rarr;') }}
				</p>
				<p class="tags">Tags: 
					{{ HTML::link('tag/'.$post->tags, $post->tags) }}
		        </p>
			</div>
		@endforeach

	</div>
	<div class="span44 aside img-polaroid">
        <h3> Categories by tags </h3>
        <ul class="nav nav-list ">
            <li><a href="#">tag 1</a></li>
            <li><a href="#">tag 2</a></li>
            <li><a href="#">tag 3</a></li>
            <li><a href="#">tag 4</a></li>
        </ul>
	</div>
</div>
@endsection