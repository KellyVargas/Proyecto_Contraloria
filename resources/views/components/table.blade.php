<table class="table" id="table">
    <thead>
    <tr>
        @foreach($fields as $field)
            <th name="{{ $field }}">{{ __('validation.attributes.' . $field )}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($entities as $entity)
            <tr id="{{ $entity->id }}">
                @foreach($fields as $field)
                    <td name="{{ $field }}">{{ $entity->$field }}</td>
                @endforeach
            </tr>
    @endforeach
    </tbody>
</table>