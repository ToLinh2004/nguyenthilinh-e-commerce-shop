{{-- Xin chào, {!!$name!!} ! --}}
{{-- Day a comment --}}


{{-- <h1>{{$title}}</h1>
@includeif('shared.notify',['alertType'=>'alert-warning']) --}}
<h1>List Post</h1>
<div class="list-post">
    @each('shared.post',$posts,'post')
</div>