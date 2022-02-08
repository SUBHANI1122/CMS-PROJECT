@foreach($data as $item)
    <tr>
        @if($item->document)
            <td><img src ="{{ asset('images/'.$item->document) }}" style="height: 100px;width: 200px"></td>
        @else
            <td></td>
        @endif
        <td>{{$item->name}}</td>
        <td>{{$item->company}}</td>
        <td>
            @include('components.view_edit_delete_buttons')
        </td>

    </tr>
@endforeach
