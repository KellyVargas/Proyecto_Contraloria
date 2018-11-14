@foreach($fields as $field)
    @if($field['type'] == 'hidden')
        {{ Form::hidden($field['name'], null, ['id' => $field['name'] . '_' . $suffix]) }}
    @else
        <div class="form-group">
            {{ Form::label($field['name'] . '_' . $suffix,  $field['text'] ?? __('validation.attributes.' . $field['name'])) }}

            @if($field['type'] == 'text')
                {{ Form::text($field['name'], null,[
                    'id' => $field['name'] . '_' . $suffix,
                    'class' => 'form-control m-input',
                    'autocomplete' => 'off'
                ]) }}
            @endif
        </div>
    @endif
@endforeach
