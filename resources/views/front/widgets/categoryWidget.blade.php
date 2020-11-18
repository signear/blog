<?php /** @var \App\Models\Category $row */ ?>

<div class="col-lg-3 col-md-2">
    <ul class="list-group">
        @foreach($datas as $row)
            <li class="list-group-item">{{$row->name }}</li>
        @endforeach
    </ul>
</div>
A
