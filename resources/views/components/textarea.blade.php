<div class="form-group mt-3">
    <label for="{{ $field }}">{{ $label }}</label>
    @error($field)
    <div class="text-danger my-3">{{ $message }}</div>
    @enderror
    <textarea name="{{ $field }}" id="{{ $field }}" cols="30" rows="10" placeholder="{{ $placeholder ?? '' }}"
        class="form-control">@isset($value){{ old($field) ? old($field) : $value }}@else{{ old($field) }}@endisset</textarea>
</div>
