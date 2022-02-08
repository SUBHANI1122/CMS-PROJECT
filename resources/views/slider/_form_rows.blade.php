@foreach($data as $item)
    <tr>
        @if($item->document)
            <td><img src ="{{ asset('images/'.$item->document) }}" style="height: 100px;width: 200px"></td>
        @else
            <td></td>
        @endif
        <td>{{$item->title}}</td>

           @if($item->status == 1)
                <td><span class="badge badge-success">Active</span></td>
            @else
                <td><span class="badge badge-danger">NotActive</span></td>
            @endif
        <td>
            @include('components.view_edit_delete_buttons')
        </td>

    </tr>
@endforeach
