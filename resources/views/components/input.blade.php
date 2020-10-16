<div class="form-group">
    <label for="{{ $field }}">{{ $label }}</label>
    @error($field)
    <div class="text-danger my-3">{{ $message }}</div>
    @enderror
    <input type="{{ $type }}" class="form-control" id="{{ $field }}" name="{{ $field }}"
        placeholder="{{ $placeholder ?? '' }}" @isset($value)
    value="{{ old($field) ? old($field) : $value }}" @else value="{{ old($field) }}" @endisset>
</div>
