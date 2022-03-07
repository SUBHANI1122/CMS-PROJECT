@foreach($data as $item)
    <tr>
        @if($item->document)
            <td style="width: 200px"><img src ="{{ asset('images/'.$item->document) }}" style="height: 150px;width: 200px"></td>
        @else
            <td></td>
        @endif
        <td>{{$item->title}}</td>
        <td>{{$item->publish_date}}</td>
        <td>
            @include('components.view_edit_delete_buttons')
        </td>

    </tr>
@endforeach
