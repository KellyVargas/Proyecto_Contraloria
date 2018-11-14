<div class="card-body">
    {{ Form::open(['id' => 'form', 'files' => $files ?? false]) }}
    @component('components.fields', [
        'fields' => $fields,
        'suffix' => $suffix ?? 'form'
    ])
    @endcomponent
    {{ Form::close() }}
</div>

<div class="card-footer">
    {{ Form::button(__('base.buttons.create'),[
        'id' => 'formButton',
        'class' => 'btn btn-primary',
        'data-action' => 'create'
    ]) }}
    {{ Form::button(__('base.buttons.cancel'), [
        'id' => 'formReset',
        'class' => 'btn bn-secondary'
    ]) }}
</div>