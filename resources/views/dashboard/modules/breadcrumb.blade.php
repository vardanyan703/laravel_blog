<section class="content-header">
    <h1>
        {{ end($bread) }}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        @for ($i = 0; $i < count($bread); $i++)
            @if($i == count($bread) - 1)
                <li class="breadcrumb-item active">{{ $bread[$i] }}</li>
            @else
                <li class="breadcrumb-item"><a href="{{ route($bread[$i])}} ">{{ $bread[$i] }}</a></li>
            @endif
        @endfor



    </ol>
</section>

