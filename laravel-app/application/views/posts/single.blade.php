@layout('templates.index')

@section('content')

<?php
    $post = Post::where('id', '=', $post_id)->first();
    $comments = $post->comments()->get();
?>

<div class="row">
    <div class="span12 divpost img-polaroid">
            <h3 class='post'>{{$post->title}}</h2>
            <small class='content'>
                {{$post->created_at}}
            </small>
            <br> 
            <small class='content'>
                by&nbsp;
                <a href="#">
                    {{User::find($post->user_id)->username}}
                </a>
            </small>
            <hr/>
            <p class="content">
                {{$post->content}}
            </p>
            <p class="tags">Tags: 
                {{ HTML::link('tag/'.$post->tags, $post->tags) }}
            </p>
    </div>
</div>

<div class="row">
    <div class="span12 divpost img-polaroid">
        <h3 class="post"> Comments </h3>

        @foreach ($comments as $comment)
        <div class="row">
            <div class="span12">          
                <h4 class="post">
                    <a href="#">
                        {{User::find($comment->user_id)->username}}
                    </a>
                </h4>
                <div class="atooltip"></div>
                    <p class="content comment">
                        {{$comment->content}}
                    </p> 
                <div class="anothertooltip"></div>            
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="span12">
                <form action="" method="" class="form-horizontal">
                    <legend class="post">
                        Comment and contribute
                    </legend>
                    <div class="control-group">
                        <label class="control-label">
                            Comment:
                        </label>                        
                        <div class="controls">
                            <textarea rows="9" class="input-xxlarge"></textarea>
                        </div>                        
                    </div>
                        <div class="controls">
                            <button type="submit" class="btn btn-inverse">Publish</button>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection