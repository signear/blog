<?php /** @var \App\Models\Category $row */ ?>

@isset($categories)
<div class="col-lg-3 col-md-2">
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">{{$category->name }} ({{$category->articleCount()}})</li>
        @endforeach
    </ul>
</div>
@endif
