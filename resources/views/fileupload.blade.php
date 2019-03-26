@extends('theme.app')

@section('head')
<link rel="stylesheet" href="/plugin/fileupload/fileupload-1.1.css">
<link rel="stylesheet" href="/plugin/select2/select2.css">
<link rel="stylesheet" href="/plugin/select2/typeahead.css">

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <div id="profile" class="edit" style="background-image:url('/')">
                        <div id="cover" class="btn btn-success" input-field="cover_image" data-value="21">Update Cover Image</div>
                    </div>
                    <select name="tags[]" id="tags-input" multiple class="form-control"></select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="/plugin/select2/select2.js"></script>
<script src="/plugin/fileupload/fileupload-1.1.js"></script>
<script>

$('#cover').fileupload({
    serverUploadUrl:'{{url('medias')}}',
    serverAllFileUrl:'{{url('medias')}}'
});

$('#tags-input').select2({
    ajax:{
        url: '/tags',
        dataType: 'json',
        delay:1000,
        data: function (params) {
            return {q: params.term}
        },
        processResults: function (data) {
            return {
                results: data.results.map(function(item){
                    return {
                        id: item.text,
                        text: item.text
                    };
                })
            }
        }
    },
    tags:true
});
</script>
@endsection