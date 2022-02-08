@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-ui/jquery-ui.min.css')}}">
@endpush
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Add Slider Images</label>
        <div class="needsclick dropzone" id="document-dropzone">
        </div>
    </div>
</div>
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script type="text/javascript">
        $("#document-dropzone").dropzone({
            url: '{{ route('store_media_files') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append(
                    '<input type="hidden" name="document" value="' + response.success + '">' +
                    '</div>'
                );
            },
            removedfile: function (file) {
                var name = file.name;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    type: 'POST',
                    url: '{{ route('remove_media_files') }}',
                    data: {filename: name},
                    success: function (data){
                        alert("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                $('form').find('input[name="document"][value="' + name + '"]').remove()
            },
        });
    </script>
@endsection
