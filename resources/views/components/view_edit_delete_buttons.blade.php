<a class="btn btn-xs-small" href="{{ URL::to($route.'/'.$item->id . '/edit') }}"><i class='fa fa-edit'></i></a>
{{--<a class="btn btn-xs-small" href="{{ URL::to($route.'.destroy',$item->id) }}"><i class='fa fa-trash'></i></a>--}}
<form action="{{ route($route.'.destroy',$item->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-xs-small" onclick="return confirm('Are you sure?')"><i class='fa fa-trash'></i></button>
</form>
{{--<a class="btn btn-xs-small " href="{{ URL::to($route.'/'.$item->id) }}"><i class='fa fa-eye'></i></a>--}}
